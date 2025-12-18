<?php
$apiKey = getenv('LASTFM_API_KEY');

$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
if ($limit < 1) $limit = 1;
if ($limit > 50) $limit = 50;

$endpoint = "http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key="
          . urlencode($apiKey) . "&format=json&limit=" . $limit;

$response = file_get_contents($endpoint);
if (!$response) {
    echo "<p style='color:red;'>Failed to fetch Last.fm tracks</p>";
    exit;
}

$data = json_decode($response, true);
$tracks = $data['tracks']['track'] ?? [];

if (!$tracks) {
    echo "<p style='color:red;'>No tracks found.</p>";
    exit;
}

foreach ($tracks as $track) {
    $trackName  = $track['name'];
    $artistName = $track['artist']['name'];
    $lfmUrl     = $track['url'];
    $listeners  = $track['listeners'];

    $trackImage = "";
    if (isset($track['image']) && is_array($track['image'])) {
        foreach ($track['image'] as $img) {
            if ($img['size'] === 'extralarge') {
                $trackImage = $img['#text'];
                break;
            }
        }
    }
    $albumCover = "";
    $albumTitle = "Unknown Album";

    $infoUrl = "http://ws.audioscrobbler.com/2.0/?method=track.getInfo"
             . "&api_key=" . urlencode($apiKey)
             . "&artist=" . urlencode($artistName)
             . "&track="  . urlencode($trackName)
             . "&format=json";

    $infoResponse = @file_get_contents($infoUrl);
    if ($infoResponse) {
        $infoData = json_decode($infoResponse, true);
        if (isset($infoData['track']['album'])) {
            $albumTitle = $infoData['track']['album']['title'] ?? "Unknown Album";

            if (isset($infoData['track']['album']['image'])) {
                foreach ($infoData['track']['album']['image'] as $img) {
                    if ($img['size'] === 'extralarge') {
                        $albumCover = $img['#text'];
                        break;
                    }
                }
            }
        }
    }

    $finalImage = $albumCover ?: $trackImage;

    echo "
        <div class='track-card'>
            " . ($finalImage
                ? "<img src='$finalImage' class='track-img'>"
                : "<div class='track-img-placeholder'></div>"
            ) . "
            <h4 class='track-title'>".htmlspecialchars($trackName)."</h4>
            <p class='track-artist'>".htmlspecialchars($artistName)."</p>
            <p class='track-album'>".htmlspecialchars($albumTitle)."</p>
            <p class='track-listeners'>Listeners: $listeners</p>

            <a href='$lfmUrl' target='_blank' class='track-link'>
                View on Last.fm
            </a>
        </div>
    ";
}
?>

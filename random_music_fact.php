<?php
// random_music_fact.php

$randomOffset = rand(1, 150000);

$url = "https://musicbrainz.org/ws/2/release-group/"
     . "?query=primarytype:album&fmt=json&limit=1&offset=" . $randomOffset;

$options = [
    "http" => [
        "header" => "User-Agent: FestVerseApp/1.0 ( your-email@example.com )"
    ]
];
$context = stream_context_create($options);
$response = @file_get_contents($url, false, $context);

if (!$response) {
    echo "<p style='color:red;'>Could not fetch a music fact right now.</p>";
    exit;
}

$data = json_decode($response, true);

if (!isset($data["release-groups"][0])) {
    echo "<p style='color:red;'>No music fact found.</p>";
    exit;
}

$item = $data["release-groups"][0];

$title = isset($item["title"]) ? htmlspecialchars($item["title"]) : "Unknown Title";
$type  = isset($item["primary-type"]) ? htmlspecialchars($item["primary-type"]) : "Album";
$firstRelease = isset($item["first-release-date"]) ? htmlspecialchars($item["first-release-date"]) : "Unknown Date";

$artist = "Unknown Artist";
if (isset($item["artist-credit"][0]["artist"]["name"])) {
    $artist = htmlspecialchars($item["artist-credit"][0]["artist"]["name"]);
}

echo "
<div style='
    padding:15px;
    background:#111;
    color:#fff;
    border-radius:10px;
    max-width:500px;
    line-height:1.5;
'>
    <h3 style='margin-top:0;'>🎧 Random Music Fact</h3>
    <p>
        Did you know? The <b>$type</b> <b>\"$title\"</b> 
        was created by <b>$artist</b> and first released in <b>$firstRelease</b>.
    </p>
</div>
";
?>

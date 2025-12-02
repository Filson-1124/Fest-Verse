<?php
$apiUrl = "https://api.open-meteo.com/v1/forecast?latitude=33.6803&longitude=-116.1739&daily=uv_index_max,weather_code,sunrise,sunset,temperature_2m_max,temperature_2m_min&current=weather_code,temperature_2m,relative_humidity_2m,precipitation,is_day,wind_speed_10m,wind_direction_10m,rain&timezone=auto";

$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

// ICONS
$weatherIcons = [
    0 => "☀️",
    1 => "🌤️",
    2 => "⛅",
    3 => "☁️",
    45 => "🌫️",
    48 => "🌫️",
    51 => "🌦️",
    53 => "🌦️",
    55 => "🌧️",
    61 => "🌧️",
    63 => "🌧️",
    65 => "🌧️",
    71 => "❄️",
    73 => "❄️",
    75 => "❄️",
    80 => "🌧️",
    81 => "🌧️",
    82 => "🌧️",
    95 => "⛈️",
    96 => "⛈️",
    99 => "⛈️"
];

function formatDatePhp($dateStr) {
    return date("F j, Y", strtotime($dateStr));
}

function formatTimePhp($dateStr) {
    return date("g:i A", strtotime($dateStr));
}

// DAILY FORECAST
$daily = $data["daily"];

foreach ($daily["time"] as $i => $date) {
    $max = $daily["temperature_2m_max"][$i];
    $min = $daily["temperature_2m_min"][$i];
    $uv = $daily["uv_index_max"][$i];
    $sunrise = $daily["sunrise"][$i];
    $sunset = $daily["sunset"][$i];
    $code = $daily["weather_code"][$i];

    echo "
    <div class='day-card'>
        <div class='top-row'>
            <div class='top-left'>
                <h3>" . formatDatePhp($date) . "</h3>
                <p class='max-temp'>
                    <i class=\"fas fa-temperature-high\"></i> {$max}°C 
                    <span class='sep'>|</span> 
                    <span class='min-temp'><i class=\"fas fa-temperature-low\"></i> {$min}°C</span>
                </p>
            </div>
            <div class='weather-icon'>" . ($weatherIcons[$code] ?? "❓") . "</div>
        </div>
        <p class='icon-text'><i class=\"fas fa-sun\"></i> UV Index: {$uv}</p>
        <p class='icon-text'><span class='material-icons'>wb_sunny</span> Sunrise: " . formatTimePhp($sunrise) . "</p>
        <p class='icon-text'><span class='material-icons'>nights_stay</span> Sunset: " . formatTimePhp($sunset) . "</p>
    </div>
    ";
}

// CURRENT WEATHER
$current = $data["current"];
$icon = $weatherIcons[$current["weather_code"]] ?? "❓";

echo "
<div class='day-card current-card'>
    <div class='top-row'>
        <p class='current-temp'><i class='fas fa-temperature-high'></i> {$current["temperature_2m"]}°C</p>
        <div class='weather-icon'>{$icon}</div>
    </div>
    <p><i class='fas fa-tint'></i> {$current["relative_humidity_2m"]}% <span>|</span> <span><i class='fas fa-cloud-showers-heavy'></i> {$current["rain"]}</span></p>
    <p><i class='fas fa-wind'></i> {$current["wind_speed_10m"]} km/h <span>|</span> <span><i class='fas fa-location-arrow' style='transform: rotate({$current["wind_direction_10m"]}deg); display: inline-block;'></i> {$current["wind_direction_10m"]}°</span></p>
    <p><i class='fas fa-moon'></i> " . ($current["is_day"] ? "Day" : "Night") . "</p>
</div>
";
?>

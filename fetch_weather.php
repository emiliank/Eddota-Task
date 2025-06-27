<?php
require 'db.php';

$url = 'https://melchior.moja.it:8085/weather-api/get_weather?lat=41.3281007&lon=139.6917';
$response = @file_get_contents($url);

if ($response === FALSE) {
    echo "Failed to fetch weather data. The API may be rate-limiting you. Please wait a few minutes and try again.";
    exit;
}

$data = json_decode($response, true);

if ($data) {
    $stmt = $pdo->prepare("INSERT INTO weather_history (timestamp, current_temp, feels_like, weather_description) VALUES (NOW(), ?, ?, ?)");
    $stmt->execute([
        $data['current_temp'],
        $data['feels_like'],
        $data['weather_description']
    ]);
    echo "Weather data updated!";
} else {
    file_put_contents('cron_debug.log', date('c')." - Failed to decode weather data: $response\n", FILE_APPEND);
}
?>



<?php
require 'db.php';

// Get latest weather
$stmt = $pdo->query("SELECT * FROM weather_history ORDER BY timestamp DESC LIMIT 1");
$current = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Weather App</title>
</head>
<body>
    <h1>Current Weather</h1>
    <?php if ($current): ?>
        <p>Temperature: <?= $current['current_temp'] ?>°C</p>
        <p>Feels Like: <?= $current['feels_like'] ?>°C</p>
        <p>Description: <?= $current['weather_description'] ?></p>
        <p>Last Updated: <?= $current['timestamp'] ?></p>
    <?php else: ?>
        <p>No data available.</p>
    <?php endif; ?>
    <a href="weather_history.php">View Weather History</a>
</body>
</html>
<?php
require 'db.php';


$stmt = $pdo->query("SELECT * FROM weather_history ORDER BY timestamp DESC LIMIT 1");
$current = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Weather App</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6fb;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        h1 {
            margin-top: 40px;
            color: #333;
        }
        .weather-card {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            border-radius: 12px;
            padding: 32px 40px;
            margin: 32px 0 24px 0;
            min-width: 320px;
            text-align: center;
        }
        .weather-card p {
            font-size: 1.1em;
            margin: 12px 0;
            color: #444;
        }
        .btn-link {
            display: inline-block;
            background: #4f8cff;
            color: #fff;
            text-decoration: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 500;
            transition: background 0.2s;
            margin-bottom: 40px;
        }
        .btn-link:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>
    <h1>Current Weather</h1>
    <div class="weather-card">
    <?php if ($current): ?>
        <p>Temperature: <strong><?= $current['current_temp'] ?>°C</strong></p>
        <p>Feels Like: <strong><?= $current['feels_like'] ?>°C</strong></p>
        <p>Description: <strong><?= $current['weather_description'] ?></strong></p>
        <p style="font-size:0.95em;color:#888;">Last Updated: <?= $current['timestamp'] ?></p>
    <?php else: ?>
        <p>No data available.</p>
    <?php endif; ?>
    </div>
    <a class="btn-link" href="weather_history.php">View Weather History</a>
</body>
</html>
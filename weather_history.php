<?php
require 'db.php';
$stmt = $pdo->query("SELECT * FROM weather_history ORDER BY timestamp DESC");
$history = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Weather History</title>
</head>
<body>
    <h1>Weather History</h1>
    <table border="1">
        <tr>
            <th>Timestamp</th>
            <th>Temperature (°C)</th>
            <th>Feels Like (°C)</th>
            <th>Description</th>
        </tr>
        <?php foreach ($history as $row): ?>
        <tr>
            <td><?= $row['timestamp'] ?></td>
            <td><?= $row['current_temp'] ?></td>
            <td><?= $row['feels_like'] ?></td>
            <td><?= $row['weather_description'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php">Back to Dashboard</a>
</body>
</html>
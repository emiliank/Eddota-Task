<?php
require 'db.php';
$stmt = $pdo->query("SELECT * FROM weather_history ORDER BY timestamp DESC");
$history = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Weather History</title>
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
        table {
            border-collapse: collapse;
            margin: 32px 0 24px 0;
            min-width: 600px;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            border-radius: 12px;
            overflow: hidden;
        }
        th, td {
            padding: 14px 20px;
            text-align: center;
        }
        th {
            background: #4f8cff;
            color: #fff;
            font-weight: 600;
        }
        tr:nth-child(even) {
            background: #f4f6fb;
        }
        tr:nth-child(odd) td {
            background: #fff;
        }
        td {
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
    <a class="btn-link" href="index.php">Back to Dashboard</a>
</body>
</html>
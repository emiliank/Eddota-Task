CREATE TABLE weather_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    timestamp DATETIME NOT NULL,
    current_temp FLOAT NOT NULL,
    feels_like FLOAT NOT NULL,
    weather_description VARCHAR(255) NOT NULL
);
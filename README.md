# Real-Time Weather App

## Setup Instructions

1. **Database Setup**
   - Create a MySQL database named `weather_db`.
   - Import the provided `schema.sql` to create the `weather_history` table.

2. **Configure Database Connection**
   - Edit `db.php` and set your MySQL username and password if different from default.

3. **Automate Weather Fetching**
   - Set up a cron job to run `fetch_weather.php` every 5 minutes:
     ```sh
     */5 * * * * /usr/bin/php /Applications/MAMP/htdocs/EddotaTask/weather-app/fetch_weather.php
     ```

4. **Access the App**
   - Open `index.php` in your browser to view the current weather and access the weather history.

## API Reference
- [Weather API Example](https://melchior.moja.it:8085/weather-api/get_weather?lat=41.3281007&lon=139.6917) 
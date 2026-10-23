<?php
// Copy this file to config/db.php and fill in your own values.
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'YOUR_DB_USER';
$pass = getenv('DB_PASS') ?: 'YOUR_DB_PASSWORD';
$dbname = getenv('DB_NAME') ?: 'YOUR_DB_NAME';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) { error_log(mysqli_connect_error()); http_response_code(500); exit('Database unavailable'); }
mysqli_set_charset($conn, "utf8mb4");

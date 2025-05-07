<?php 

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_USER', 'mer6rk');
define('DB_PASS', 'W!mPyKiD@1412*!=2603');
define('DB_NAME', 'umitech_db');

$dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
$options = array(
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

try {

    $conn = new PDO($dsn, DB_USER, DB_PASS, $options);
    echo 'Database connected successfully !';

} catch (PDOException $ex) {

    error_log($ex->getMessage());
    header("HTTP/1.1 500 Internal Server Error");
    exit('<h1>500 Internal Server Error</h1>' . '<hr>');

}
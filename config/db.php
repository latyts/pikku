<?php
require_once __DIR__ . '/env.php';

$conn = null;
try {
    $host = $config[HOST_VARIABLE];
    $port = $config[PORT_VARIABLE];
    $user = $config[USER_VARIABLE];
    $dbname = $config[DBNAME_VARIABLE];
    $pswd = $config[PSWD_VARIABLE];
    $conn = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pswd
    );
} catch (PDOException $e) {
    die();
}
?>

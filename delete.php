<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        echo "Verbinding is gelukt!";
        var_dump($pdo);
    } else {
        echo "interne server error :(";
    }
} catch (PDOException $e) {
    $e->getMessage();
}
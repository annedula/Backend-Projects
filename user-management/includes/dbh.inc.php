<?php

$dsn = "mysql:host=localhost;dbname=localdb";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new pdo($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
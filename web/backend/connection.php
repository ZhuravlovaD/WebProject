<?php

$driver = 'mysql';
$host = 'localhost';
$dbName = 'webapp';
$dbUser = 'root';
$dbPass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$dbName;charset=$charset",
        $dbUser, $dbPass, $options 
    );
} catch (PDOException $i) {
    die("Ошибка подключения к базе данных");
}
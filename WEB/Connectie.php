<?php

$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'classicmodels';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

if($pdo === false) // Verbinding is mislukt!
{
    echo "Kan geen verbinding maken met de database";
}
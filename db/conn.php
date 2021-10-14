<?php
$host = '127.0.0.1';
$db = 'attendace_db';
$user = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "<h1>No Database Found ";

    //throw new PDOException($e -> getMessage);
}
require_once 'crud.php';
$crud = new crud($pdo);

<?php

$host = 'localhost';
$dbname = 'asm2';
$user = 'postgres';
$pass = '';

try {
    $connect = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success";
} catch (PDOException $e) {
    die($e->getMessage());
}



?>
<?php
require_once "../models/connect.php";

try {
    $sql = "SELECT * FROM majors";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $resultMajor = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>
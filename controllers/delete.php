<?php
require_once "../models/connect.php";

try {
    $sql = "DELETE FROM students WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    header('location: ../views/table.php');
} catch (PDOException $e) {
    die($e->getMessage());
}

?>
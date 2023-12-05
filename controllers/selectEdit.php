<?php
require_once "../models/connect.php";

try {
    $sql = "SELECT students.id, students.code, students.name, students.img, majors.majors_name FROM students INNER JOIN majors ON students.major_id = majors.majors_id WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    $selectEdit = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>
<?php
require_once "../models/connect.php";

try {
    $sql = "SELECT students.id, students.code, students.name, students.img, majors.majors_name FROM students INNER JOIN majors ON students.major_id = majors.majors_id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $resultStudents = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>
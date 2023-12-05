<?php
require_once "../models/connect.php";
require_once "../views.session.php";

try {
    $imgPath = '';

    if(empty($_FILES['img']['tmp_name'])){
        $imgPath = $_POST['imgSave'];
    }else{
        $imgNew = file_get_contents($_FILES['img']['tmp_name']);
        $imgPath = base64_encode($imgNew);
    }



    $sql = "UPDATE students SET code = :code, name = :name, img = :img WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":code", $_POST['code']);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":img", $imgPath);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();
    header("location: ../views/table.php");
} catch (PDOException $e) {
    die($e->getMessage());
}

?>
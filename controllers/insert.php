<?php
require_once "../models/connect.php";
require_once "../views/session.php";

try {

    if(empty($_POST['code'])){
        $_SESSION['error']['code'] = 'Vui long nhap code';
    }else{
        unset($_SESSION['error']['code']);
    }

    if(empty($_POST['name'])){
        $_SESSION['error']['name'] = 'Vui long nhap name';
    }else{
        unset($_SESSION['error']['name']);
    }

    if(empty($_FILES['img']['tmp_name'])){
        $_SESSION['error']['img'] = 'Vui long truyen img ';
    }else{
        unset($_SESSION['error']['img']);
    }

    if(!empty($_SESSION['error'])){
        header("location: ../views/create.php");
    }else{
    $img = file_get_contents($_FILES['img']['tmp_name']);
    $imgBase64 = base64_encode($img);
    $sql = "INSERT INTO students (major_id, code, name, img) VALUES (:major_id, :code, :name, :img)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":major_id", $_POST['mar_id']);
    $stmt->bindParam(":code", $_POST['code']);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":img", $imgBase64);
    $stmt->execute();
    header("location: ../views/table.php");
    }
} catch (PDOException $e) {
    die($e->getMessage());
}

?>
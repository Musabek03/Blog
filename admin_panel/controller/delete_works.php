<?php


    include_once "connect.php";

    $id = $_POST['id'];

$sql = "UPDATE `works` SET `deleted_at` = '1' WHERE `works`.`id` = $id;";

mysqli_query($connect,$sql);

header("Location: ../views/works.php");





?>
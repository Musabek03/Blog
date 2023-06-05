<?php


    include_once "connect.php";

    $id = $_POST['id'];

$sql = "UPDATE `home_page` SET `deleted_at` = '1' WHERE `home_page`.`id` = $id;";

mysqli_query($connect,$sql);
header("Location: ../views/home_page.php");





?>
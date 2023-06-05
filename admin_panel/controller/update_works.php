<?php
require_once "connect.php";

$title = $_POST['title'];
$description = $_POST['description'];
$id = $_POST['id'];


$sql = "UPDATE `works` SET `title` = '$title', `description` = '$description', `img` = '' WHERE `works`.`id` = $id;";
mysqli_query($connect,$sql);

header("Location: ../views/works.php");


?>
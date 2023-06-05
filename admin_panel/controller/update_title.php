<?php
include_once "connect.php";

$title = $_POST['title'];

$sql = "UPDATE `home_page` SET `title` = '$title' WHERE `home_page`.`id` = 1;";
mysqli_query($connect,$sql);

header("Location: ../views/home_page.php");


?>
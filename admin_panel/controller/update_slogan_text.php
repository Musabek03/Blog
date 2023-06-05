<?php
include_once "connect.php";

$slogan = $_POST['slogan'];
$text = $_POST['text'];
$id = $_POST['id'];
print_r($id);


$sql = "UPDATE `home_page` SET `slogon` = '$slogan', `text` = '$text' WHERE `home_page`.`id` = $id ;";
mysqli_query($connect,$sql);

header("Location: ../views/home_page.php");


?>
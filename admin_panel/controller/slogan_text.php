<?php

include_once "connect.php";


$slogan = $_POST['slogan'];
$text = $_POST['text'];

$sql = "INSERT INTO `home_page` (`id`, `title`, `slogon`, `text`) VALUES (NULL, NULL, '$slogan', '$text');";

mysqli_query($connect,$sql);

header("Location: ../index.php ");



?>
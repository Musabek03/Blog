<?php

require_once "connect.php";
if(  $_POST['title'] != "" && $_FILES['img']['error'] != 4  && $_POST['description'] != "" ){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = time().$_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $div = "../../assets/img/";
    $id = $_POST['id'];

    $sql = "INSERT INTO `works` (`id`, `title`, `description`, `img`) VALUES (NULL, '$title', '$description', '$img');";
        move_uploaded_file($tmp_name, $div.$img);

            mysqli_query($connect,$sql);}

        header("Location: ../views/works.php");
?>
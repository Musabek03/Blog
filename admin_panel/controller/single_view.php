<?php


require_once "connect.php";
    $id = $_POST['id'];
    $sql = "SELECT * FROM `home_page`  ;";

    $data = mysqli_query($connect,$sql);
    $data = mysqli_fetch_all($data);



?>
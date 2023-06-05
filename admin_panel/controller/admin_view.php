<?php


require_once "connect.php";
    
    $sql = "SELECT * FROM `home_page`  ;";

    $data = mysqli_query($connect,$sql);
    $data = mysqli_fetch_all($data);



?>
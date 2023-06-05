<?php


require_once "connect.php";
    
    $sql = "SELECT * FROM `works`  ;";

    $data = mysqli_query($connect,$sql);
    $data = mysqli_fetch_all($data);
    


?>
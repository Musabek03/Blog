<?php
require_once "admin_panel/controller/connect.php";

$sql = "SELECT * FROM `our_services`";
$data = mysqli_query($connect,$sql);

$data = mysqli_fetch_all($data);



?>
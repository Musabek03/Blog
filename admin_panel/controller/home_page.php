<?php
require_once "connect.php";

if(isset($_POST['slogon'])){
    add_info('home_page', $_POST['slogon'], 'slogon', $_POST['text'], 'text');
    header("Location: ../views/home_page.php");
}

if(isset($_POST['name_services'])){

    inf('our_services', $_POST['name_services'], 'name');
        header("Location: ../views/add_services.php");

    
}


  
        
function add_info($tabel, $infos, $slog, $infot, $tx){

    global $connect;
    $sql = "INSERT INTO `$tabel` (`id`, `$slog`, `$tx`) VALUES (NULL, '$infos', '$infot'); ";
    return mysqli_query($connect,$sql);

}

function inf($tab, $info, $coll){
    global $connect;
    $sql = "INSERT INTO `$tab` (`id`, `$coll`) VALUES (NULL, '$info');";
    return  mysqli_query($connect,$sql);   

}






?>


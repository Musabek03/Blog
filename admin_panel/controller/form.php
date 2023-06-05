<?php

        $token  = "6285635540:AAH1lShBNRPSIjsf54TS2kFtEch9tz9IBmo";
        $tg_user ="1092578323";
    function func($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
    require_once "connect.php";

    $selected_services = "Selected Services: \n";
    $sql = "SELECT * FROM `our_services` ";
    $data = mysqli_query($connect,$sql);
    $data = mysqli_fetch_all($data);

        for($i=0;$i<count($data); $i++){
            $indeks = $data[$i][0];
        
            if(isset($_POST["$indeks"])){
                $selected_services .= "\n".  $data[$i][1];     
            }
        }



        func($_POST);
       func($selected_services);


       $text_message = "name: ". $_POST['name'] . "\nphone: " . $_POST['phone'] . "\n" . $selected_services;
func($text_message);

$params = [
    'chat_id' => $tg_user,
    'text'    => $text_message
];

file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($params));
header("Location: ../../index.php");

?>
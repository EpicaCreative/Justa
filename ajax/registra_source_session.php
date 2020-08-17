<?php

// Start the session
session_start();

require '../Admin/funcoes/funcoes.php';

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $save = true;

    if(isset($_POST['userAgent']))
    {
        if(strlen($_POST['userAgent']) > 0)
        {
            $_SESSION["userAgent"] = $_POST['userAgent'];
        }
    }

    if(isset($_POST['language']))
    {
        if(strlen($_POST['language']) > 0)
        {
            $_SESSION["language"] = $_POST['language'];
        }
    }

    if(isset($_POST['doNotTrack']))
    {
        if(strlen($_POST['doNotTrack']) > 0)
        {
            $_SESSION["doNotTrack"] = $_POST['doNotTrack'];
        }
    }

    if(isset($_POST['utmSource']))
    {
        if(strlen($_POST['utmSource']) > 0)
        {
            $_SESSION["utmSource"] = $_POST['utmSource'];
        }
    }

    if(isset($_POST['page']))
    {
        if(strlen($_POST['page']) > 0)
        {
            $_SESSION["page"] = $_POST['page'];
        }
    }

     if(isset($_POST['utmSource']) ? strlen($_POST['utmSource']) > 0 : false)
     {
        $pagina = $_POST['page']; 
        $source = $_POST['utmSource']; 
        $campaign = $_POST['utmCampaign']; 
        $medium = $_POST['utmMedium']; 
        $language = $_POST['language'];
        $ip = getUserIpAddr();

        $sql_command = "INSERT INTO tb_rastreio (pagina, source, campaign, medium, language, ip) VALUES ('$pagina', '$source', '$campaign', '$medium', '$language', '$ip')";
        
        //print($sql_command);
        //print_r($_SESSION);

        $mysqli = conexao();

        $registrado = $mysqli->query($sql_command);
        $error = "";
        if(!$registrado)
        {
            $error = $mysqli->error;
        }

        $save_on_db = $registrado ? true : false;
    }else{
        $error = "No UTM Source was provided";
        $save_on_db = false;
    }

    return print(json_encode(array('save_on_db' => $save_on_db, 'error' => $error, 'source' => $_POST['utmSource'])));
}else{
    return print(json_encode(array('save_on_db' => false, 'error' => true, 'message' => 'No data')));
}
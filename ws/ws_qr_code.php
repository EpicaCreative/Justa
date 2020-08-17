<?php

include '../Admin/funcoes/funcoes.php';

header('Content-Type: application/json');

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

if(isset($_POST['ref']))
{
    $ip = getUserIpAddr();
    $ref = $_POST['ref'];

    if(strlen($ref) > 0)
    {
        $sql_command = "INSERT INTO acessos_qrcode (qrcode_id, ip, data) VALUES ('$ref', '$ip', now())";

        $select_classe = mysqli_query(Conexao(), $sql_command);

        $array_response = array('created' => true, 'message' => 'Referral inserido com sucesso');
    }else{
        $array_response = array('created' => false, 'message' => 'Código do refferal não especificado');
    }
}else{
    $array_response = array('created' => false, 'message' => 'Código do refferal não especificado');
}

print(json_encode($array_response));
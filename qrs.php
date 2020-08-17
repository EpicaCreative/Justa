<?php

require 'Admin/funcoes/funcoes.php';

if(isset($_GET['ref']))
{
    $referral = $_GET['ref'];
    $user_ip = getUserIpAddr();


    $sql_command_registra_acesso = "INSERT INTO acessos_qrcode (qrcode_id, ip, data) VALUES ('$referral', '$user_ip', now())";
    $statement_registra_acesso = mysqli_query(Conexao(), $sql_command_registra_acesso);

    
    $sql_command_referral = "SELECT * FROM qr_codes where unique_id='$referral'";
    $statement_referral = mysqli_query(conexao(), $sql_command_referral);

    $redirect_to = "index.php";

    if($statement_referral->num_rows > 0)
    {
        while($referral_array = mysqli_fetch_array($statement_referral))
        {
            $redirect_to = $referral_array['redirect_to'];
            break;
        }

        $acces_registred = $statement_registra_acesso ? 1 : 0;
        $url_redirect = "$redirect_to?ref=$referral&access=$acces_registred";
    }else{
        $url_redirect = "index.php?ref=$referral";
    }
}else{
    $url_redirect = "index.php";
}

//print($url_redirect);
header("Location: $url_redirect");
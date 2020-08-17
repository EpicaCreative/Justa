<?php 
	//header("Access-Control-Allow-Origin: *");
	$host    = "18.229.51.254";             
    $user    = "root";                       
    $pass    = "J7e%XFhuUQhGv8Kw6UZL";                            
    $bd      = "empor274_painel_administrativo";   
	$password = "algumacoisaestranha";   	
	//mysqli_set_charset($host, "utf8");  


$conecta = mysqli_connect($host, $user, $pass, $bd) or die("Erro ao se conectar ao BD ".mysqli_error());


?>

<?php 

 require("conexao2.php");//
    $login = $_POST['login'];
    $senha=openssl_encrypt($_POST['senha'],"AES-128-ECB",$password);
	//echo $conecta; /*
    $sel_usu = mysqli_query($conecta, "Select id_usuario, nome, status, senha2 from usuarios where login='$login' && senha2='$senha'") or die (mysqli_error());
    $array = mysqli_fetch_array($sel_usu);
	
	//echo "Recebeu ".$login." e o Nome encontrado é: ".$array['nome'];
	
	if(mysqli_num_rows($sel_usu)==0) {echo "naoexiste#"; }
	else{$id_usuario = $array['id_usuario'];
	$nome = $array['nome'];
	$status = $array['status'];	
	
    if($status=='Bloqueado') {echo "bloqueado#"; }
   
    else {/*
	if($_POST['save']==false){
	$id_sessao = setcookie('id_sessao', $array['id_usuario'],(time() + (2 * 36000)));
	$nome_sessao = setcookie('nome', $array['nome'], (time() + (2 * 36000)));
	echo $id_sessao."#".$nome_sessao;
	}
	else{
	$id_sessao = setcookie('id_sessao', $array['id_usuario'],time()+3600*24*365);
	$nome_sessao = setcookie('nome', $array['nome'], time()+3600*24*365);	
	echo $id_sessao."#".$nome_sessao."#".$_POST['save'];
	}
*/
	echo $array['id_usuario']."#".$array['nome']."#".$_POST['save'];
		}
		
		
	}

?>
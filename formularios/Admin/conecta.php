<?php 
//include "funcoes/funcoes.php"; 
include "../ws/conexao.php";
$login = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = mysqli_query($conecta, "SELECT id, nome, data_cancelamento FROM TB_usuario where email = '".$login."' and senha = '".$senha."'") or die('ERRO');
if(mysqli_num_rows($sql) == 0){
echo "<script>alert('Login ou senha incorretos');window.location='login.php';</script>";	
}//
if(mysqli_num_rows($sql)>0){
	$array = mysqli_fetch_array($sql);
	if($array['data_cancelamento']!='1111-11-11') {
	echo "<script>alert('Usuário cancelado!');window.location='login.php';</script>";	
	}//Fecha if encontrado
	else {
	$id = setcookie('id_sessao', $array['id'],(time() + (30 * 24 * 3600)));
	$nome = setcookie('nome', $array['nome'], (time() + (30 * 24 * 3600)));
	
	echo "<script>alert('Bem vindo ".$array['nome']."'); window.location='index.php'</script>";	
	}//Fecha else
}
	
?>
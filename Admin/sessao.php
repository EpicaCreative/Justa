<?php
$id_sessao = $_COOKIE['id_sessao']; 
$nome_sessao = $_COOKIE['nome'];
if($id_sessao == "") {
echo "<script>window.location='login.php'</script>";	
	
}

?>
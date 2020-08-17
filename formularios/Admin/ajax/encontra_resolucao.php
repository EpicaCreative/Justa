<?php include "../funcoes/funcoes.php"; 

		$select = mysqli_query(conexao(), "Select width, height from tags where id = ".$_POST['id']) or die(mysqli_error());
		$array = mysqli_fetch_array($select);
		echo $array[0]."#".$array[1];
		


?>
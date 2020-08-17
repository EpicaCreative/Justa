
	<?php  date_default_timezone_set('America/Sao_Paulo');
	function conexao() {
		$host    = "18.229.51.254";             
		$user    = "root";                       
		$pass    = "J7e%XFhuUQhGv8Kw6UZL";                            
		$bd      = "empor274_painel_administrativo";   

		$conecta = mysqli_connect($host, $user, $pass, $bd) or die("Erro ao se conectar ao BD ".mysqli_error());
		return($conecta);
		
	}
	


	
	function dado_usuario_sistema($campo, $pesquisa, $valor) {
		$select = mysqli_query(conexao(), "Select ".$campo." from usuarios where ".$pesquisa." = '".$valor."'") or die(mysqli_error());
		$array = mysqli_fetch_array($select);
		return $array[$campo];
		
	}//FECHA FUNCTION DADO USUARIO SISTEMA

	function Trata_Campos($tagATratar, $valorATratar, $texto){
					return str_replace($tagATratar, $valorATratar, $texto);	
		} //FECHA FUNCAO TRATA TADOS

		function dado_pagina($campo1, $campo2, $pesquisa, $valor) {
		$campo2 = ",".$campo2;
		$select = mysqli_query(conexao(), "Select ".$campo1.$campo2." from conteudos where ".$pesquisa." = '".$valor."'") or die(mysqli_error());
		$array = mysqli_fetch_array($select);
		return $array[$campo];
		
	}//FECHA FUNCTION DADO USUARIO SISTEMA


?>
<?php 	//include "../funcoes/funcoes.php"; header("Access-Control-Allow-Origin: *");
include "../../ws/conexao.php";

	if($_POST['acao']==""){
	if(is_array($_FILES)){
	foreach($_FILES['arquivo']['name'] as $name => $value){
		$nome_novo = "";
		$pasta = "http://www.goowin.com.br/justa/images/";
		$largura = 1280;
		$altura = 720;
	   	
	   	$ratio_orig = $largura/$altura;

	   if ($largura/$altura > $ratio_orig) {
		  $largura = $altura*$ratio_orig;
	   } else {
		  $altura = $largura/$ratio_orig;
	   }		
			
		if ($_FILES['arquivo']['type'][$name]=="image/jpeg" or $_FILES['arquivo']['type'][$name]=="image/jpg"){
			$img = imagecreatefromjpeg($_FILES['arquivo']['tmp_name'][$name]);
			$nome_novo = md5(uniqid(rand(),true));echo "Jpeg";	
		}else if ($_FILES['arquivo']['type'][$name]=="image/png"){echo "PNG";	
			$img = imagecreatefrompng($_FILES['arquivo']['tmp_name'][$name]);
			$nome_novo = md5(uniqid(rand(),true));
		}
		$x   = imagesx($img);
		$y   = imagesy($img);
		
		
		if ($_FILES['arquivo']['type'][$name]=="image/jpeg"){
			$nova = imagecreatetruecolor($largura, $altura);
			imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura+1, $altura+1, $x, $y);
			$local=$pasta.$nome_novo.".jpg";
			imagejpeg($nova, $local);
			$nome_novo = $nome_novo.".jpg";
		}
		else if ($_FILES['arquivo']['type'][$name]=="image/png"){
			$nova = imagecreatetruecolor($largura, $altura);
			imagealphablending($nova, true); 
			imagesavealpha($nova, true); 
			$transparente = imagecolorallocatealpha($nova, 0, 0, 0, 127);
			imagefill($nova,0,0,0x7fff0000); 
			imagestring($nova,2,4,4,'',$transparente);
			imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);		

			$local=$pasta.$nome_novo.".png";
			imagepng($nova, $local);
			$nome_novo = $nome_novo.".png";
		}	
		imagedestroy($img);
		imagedestroy($nova);			

		
		
		$src = $nome_novo;	
		if($nome_novo != ""){
		$update = mysqli_query($conecta, "Update TB_conteudo set conteudo = '".$src."', id_tipo_conteudo = 1, situacao = 1 WHERE id = ".$_POST['id_conteudo']) or die(mysqli_error());
		
		if($update){echo "../images/".$src;} else {echo "erro";}
			}else{
				echo "Erro ao inserir alguma(s) imagen(s). Verifique o formato de todas e tente novamente";	
			}
		
		}
		
		}
		
	}

	
	elseif($_POST['acao'] == "alterar_dados"){
				if($_POST['campo'] == "conteudo") {$ativa_post = ", situacao = 1";}
				$update = mysqli_query($conecta,"Update ".$_POST['tabela']." set ".$_POST['campo']." = '".utf8_decode($_POST['novo_valor'])."' ".$ativa_post." where ".$_POST['condicao']." = '".$_POST['valor_condicao']."'");
				if($update) echo 1; else echo 0;
	}

	elseif($_POST['acao'] == "encontra_conteudo_existente"){
				$sql = mysqli_query($conecta,"Select descricao from TB_append_conteudo where posicao = ".$_POST['posicao']." and vinculo_conteudo = ".$_POST['id_conteudo']);
				$array = mysqli_fetch_array($sql);
				echo utf8_encode($array['descricao']);
	}

	elseif($_POST['acao'] == "cadastra_append_conteudo"){
				$sql = mysqli_query($conecta,"Select descricao from TB_append_conteudo where posicao = ".$_POST['posicao']." and vinculo_conteudo = ".$_POST['id_conteudo']);
				if(mysqli_num_rows($sql)==0){
				$insert = mysqli_query($conecta, "INSERT into TB_append_conteudo (id_tipo_conteudo, vinculo_conteudo, descricao, posicao, situacao, data_cadastro) VALUES (2, ".$_POST['id_conteudo'].", '".utf8_decode($_POST['descricao'])."', ".$_POST['posicao'].", 1, '".date('Y-m-d')."')");	
				$resto = " ao cadastrar o campo. Tente novamente!"	;	
				}else{
				$update = mysqli_query($conecta, "UPDATE TB_append_conteudo set descricao = '".utf8_decode($_POST['descricao'])."' WHERE posicao = ".$_POST['posicao']." and vinculo_conteudo = ".$_POST['id_conteudo']);	
				$resto = " ao atualizar o campo!"	;
				}
		if($insert or $update) {echo "Sucesso".$resto;} else {echo "Erro".$resto;}
	}

	elseif($_POST['acao']=="deleta-artigo"){
		
		$Delete = mysqli_query($conecta,"Delete from TB_conteudo where id = ".$_POST['id_conteudo'])or die(mysqli_error());
		$Delete_append = mysqli_query($conecta,"Delete from TB_append_conteudo where vinculo_conteudo = ".$_POST['id_conteudo'])or die(mysqli_error());
		$Delete_vinculo = mysqli_query($conecta,"Delete from TB_vinculo where id_conteudo = ".$_POST['id_conteudo'])or die(mysqli_error());
		if($Delete and $Delete_append and $Delete_vinculo){
			echo "Artigo removido com sucesso!";
			}
	
	}
	?>


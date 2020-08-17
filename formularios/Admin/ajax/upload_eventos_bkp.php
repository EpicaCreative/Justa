<?php 	include "../funcoes/funcoes.php";
		function Redimensionar($imagem, $pasta){
		$largura = 1280;
		$altura = 720;
	   	
	   	$ratio_orig = $largura/$altura;

	   if ($largura/$altura > $ratio_orig) {
		  $largura = $altura*$ratio_orig;
	   } else {
		  $altura = $largura/$ratio_orig;
	   }		
		$name = md5(uniqid(rand(),true));
		if ($imagem['type']=="image/jpeg"){
			$img = imagecreatefromjpeg($imagem['tmp_name']);
		}else if ($imagem['type']=="image/png"){
			$img = imagecreatefrompng($imagem['tmp_name']);
		}
		$x   = imagesx($img);
		$y   = imagesy($img);
		
/*$thumb = imagecreatetruecolor($newwidth,$newheight); $transparent = imagecolorallocatealpha($thumb, 0, 0, 0, 127); imagefill($thumb, 0, 0, $transparent); imagesavealpha($thumb, true); imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height); imagepng($thumb, $output_dir);*/
		
		if ($imagem['type']=="image/jpeg"){
			$nova = imagecreatetruecolor($largura, $altura);
			imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura+1, $altura+1, $x, $y);
			$local=$pasta.$name.".jpg";
			imagejpeg($nova, $local);
			$name = $name.".jpg";
		}
		else if ($imagem['type']=="image/png"){
			$nova = imagecreatetruecolor($largura, $altura);
			imagealphablending($nova, true); 
			imagesavealpha($nova, true); 
			$transparente = imagecolorallocatealpha($nova, 0, 0, 0, 127);
			imagefill($nova,0,0,0x7fff0000); 
			imagestring($nova,2,4,4,'',$transparente);
			imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura+1, $altura+1, $x, $y);		

			$local=$pasta.$name.".png";
			imagepng($nova, $local);
			$name = $name.".png";
		}	
		imagedestroy($img);
		imagedestroy($nova);			

		return $name;

}//FECHA FUNCAO DE REDIMENSIONAMENTO

	if($_POST['acao']==""){
	foreach($_FILES['arquivo']['name'] as $name => $value){
	
	
	
	
		$foto = $_FILES['arquivo'];	
		$src = Redimensionar($foto, "../Site/eventos/");	
		$insert = mysqli_query(Conexao(), "Insert into imagem_eventos (vinculo_evento, imagem) VALUES (".$_POST['vinculo_evento'].", '".$src."')"); 
		if($insert){echo "Imagem enviada com sucesso! Recarregando listagem...";} else {echo "Erro ao enviar! Tente novamente.";}
		}	
	}

	elseif($_POST['acao'] == "carrega"){ 
	$selExistente = mysqli_query(conexao(),"Select * from imagem_eventos where vinculo_evento = ".$_POST['id']." order by id Desc")or die(mysqli_error());
	?>
                                <div class="span12">
  									<table class="table table-hover">
						              <tbody>

<?php 			 
				  while($array = mysqli_fetch_array($selExistente)){
				  
				  
				?>
						                <tr>
						                  <td><img src="Site/eventos/<?php echo $array['imagem']; ?> " style="width: 130px; "></td>
						                  <td><br><?php if($array['capa']==1){echo "Capa do evento";} else { ?>
						                  <button type="buttom" id="capa" class="btn btn-info" onClick="Capa(<?php echo $array['id'] ?>)" >Definir como capa</button> <?php } ?>
						                  </td>
						                  <td><br><?php if($array['imagem_maior']==1){echo "Primeira Imagem";} else { ?>
						                  <button type="buttom" id="imagem_maior" onClick="Principal(<?php echo $array['id'] ?>)" class="btn btn-info">Primeira Imagem</button><?php } ?>
						                  </td>
						                  <td><br><button type="buttom" onClick="Remover(<?php echo $array['id'] ?>)" class="btn btn-danger remover">Remover</button></td>
						                </tr>
						                
<?php 		} //Fecha While	  ?>
				  
						              </tbody>
						            </table>
                                </div>		
<?php 		} //Fecha IF CARREGA

	elseif($_POST['acao'] == "remove"){ 
				$selExistente = mysqli_query(conexao(),"Select imagem from imagem_eventos where id = ".$_POST['id']." order by id Desc")or die(mysqli_error());
				$array = mysqli_fetch_array($selExistente);
				unlink("../Site/eventos/".$array['imagem']);
				$Delete_imagens = mysqli_query(Conexao(),"Delete from imagem_eventos where id = ".$_POST['id'])or die(mysqli_error());
	
	
	
	}
	
	elseif($_POST['acao'] == "capa"){ 
				$selExistente = mysqli_query(conexao(),"Select vinculo_evento from imagem_eventos where id = ".$_POST['id']."")or die(mysqli_error());
				$array = mysqli_fetch_array($selExistente);
				$updateAll = mysqli_query(Conexao(),"update imagem_eventos set capa = 0 where vinculo_evento = ".$array['vinculo_evento'])or die(mysqli_error());
				unlink("../Site/eventos/".$array['imagem']);
				$update = mysqli_query(Conexao(),"update imagem_eventos set capa = 1 where id = ".$_POST['id'])or die(mysqli_error());
	
	
	
	}
	elseif($_POST['acao'] == "primeira"){ 
				$selExistente = mysqli_query(conexao(),"Select vinculo_evento from imagem_eventos where id = ".$_POST['id']."")or die(mysqli_error());
				$array = mysqli_fetch_array($selExistente);
				$updateAll = mysqli_query(Conexao(),"update imagem_eventos set imagem_maior = 0 where vinculo_evento = ".$array['vinculo_evento'])or die(mysqli_error());
				unlink("../Site/eventos/".$array['imagem']);
				$update = mysqli_query(Conexao(),"update imagem_eventos set imagem_maior = 1 where id = ".$_POST['id'])or die(mysqli_error());
	
	
	
	}	
	
	?>


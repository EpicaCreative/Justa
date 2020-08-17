<?php include "cabecalho.php"; 


	
	if($_POST['pagina'] != "") {
	
	$imagem = $_FILES['arquivo'];	
	$nova_largura = 1280;
	$nova_altura = 720;
	$pasta = "Site/img/";
	$name = md5(uniqid(rand(),true));
	$largura = imagesx($img);
	$altura = imagesy($img);
	
	   	$ratio_orig = $largura/$altura;

	   if ($largura/$altura > $ratio_orig) {
		  $largura = $altura*$ratio_orig;
	   } else {
		  $altura = $largura/$ratio_orig;
	   }		
	
	if ($imagem['type']=="image/jpeg" or $imagem['type']=="image/jpg"){
		$img = imagecreatefromjpeg($imagem['tmp_name']);
	}else if ($imagem['type']=="image/png"){
		$img = imagecreatefrompng($imagem['tmp_name']);
	}

	if ($imagem['type']=="image/jpeg"  or $imagem['type']=="image/jpg"){
	$nova = imagecreatetruecolor($nova_largura, $nova_altura);
	imagecopyresampled($nova, $img, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura, $altura);
	$local=$pasta.$name.".jpg";
	imagejpeg($nova, $local);
	$name = $name.".jpg";
	}
	else if ($imagem['type']=="image/png"){
	$nova = imagecreatetruecolor($nova_largura, $nova_altura);
	imagealphablending($nova, true); 
	imagesavealpha($nova, true); 
	$transparente = imagecolorallocatealpha($nova, 0, 0, 0, 127);
	imagefill($nova,0,0,0x7fff0000); 
	imagestring($nova,2,4,4,'',$transparente);
	imagecopyresampled($nova, $img, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura, $altura);		

	$local=$pasta.$name.".png";
	imagepng($nova, $local);
	$name = $name.".png";
	}	
	else{
	echo "Erro ao subir a imagem...";
	}
	imagedestroy($img);
	imagedestroy($nova);			

//////////////////////
		
	if($name!=""){
	$insert = mysqli_query(Conexao(), "insert into conteudos (tipo, vinculo_tag, imagem, posicao, situacao, link) VALUES ('Imagem', ".$_POST['class'].", '".$name."', ".$_POST['posicao'].", 1, '".$_POST['link']."')");

	if($insert){echo "<script>alert('Foto cadastrada com sucesso!'); window.location='listagem_imagens.php';</script>";} 	
			
		} 
 	}//FECHA POST
else{

	//$id_selecionado = $_GET['id']; 
?>	
<script src="assets/scripts.js"></script>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

        <div class="span9" >

        <div class="container-fluid">
            <div class="row-fluid pull">
               <h2 class="page-header">Adicionar Imagens</h2>
                  <form method="post" enctype="multipart/form-data"  action="">
					<div class="muted pull">
						<label>Arquivo</label>
							<input class="form-control" type="file"  id="arquivo"  name="arquivo" placeholder="Selecione a imagem" required>
                                        <div class="muted pull">
                                            <label>Página</label>
                                            <select name="pagina" id="pagina" class="form-control">
                                            <option value="">Selecione a página</option>
											<?php
											$select_paginas = mysqli_query(Conexao(),"Select paginas.id, paginas.descricao as descricao_pagina from tags INNER JOIN paginas ON paginas.id = tags.vinculo_pagina WHERE tags.tipo = 'imagem' group by paginas.descricao ASC");
											while($array_paginas = mysqli_fetch_array($select_paginas)){?>
												<option value="<?php echo $array_paginas['id'] ?>"><?php echo utf8_encode($array_paginas['descricao_pagina']); ?></option>
											<?php } ?>
											</select>
                                        </div>  
                                        <div class="muted pull">
                                            <label>Classe</label>
                                            <div id="resposta">
                                            <select  class="form-control">
                                            <option value="">Selecione uma página</option>
											</select>
                                       		</div>
					    				</div> 
                                        <div class="muted pull">
                                            <label>Url Banner Tela Principal</label>
                                            <span class="page-header">Somente em caso de link no Banner Principal</span>
                                            <div id="resposta">
                                            <input type="text" class="form-control" name="link" id="link" style="width: 30%" placeholder="Insira o link completo">
                                            </div>
					    				</div>                                                                              	
                                        <div class="muted pull">
                                            <label>Posic&ccedil;&atilde;o na p&aacute;gina</label>
                                            <select name="posicao" id="posicao" required class="form-control">
                                            <option value="">Selecione a posi&ccedil;&atilde;o</option>
											<?php
											for($i = 1; $i < 11; $i++){?>
												<option value="<?php echo $i ?>" <?php if($arrayExistente['posicao'] == $i) {echo "selected='selected'"; } ?>><?php echo "Posi&ccedil;&atildeo ".$i; ?></option>
											<?php } ?>
											</select>
                                        </div>  									
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Cadastrar os dados</button>
                                        <input type="hidden" name="id" value="<?php echo $id_selecionado; ?>">
                                       
                                        </div>
                                </form>

			    </div>
	    </div>        
<?php } ?>
<script>

	$("#pagina").change(function(){
		var id = this.value;
		$.ajax({
			url : "ajax/encontra_paginas.php",
			type : "POST",
			data : {id : id, tipo : 'imagem'},
			success : function(resposta){
				resposta = resposta.trim();
				$("#resposta").html(resposta);				
				
			}
			
		})
		
		
	})	


</script>	    

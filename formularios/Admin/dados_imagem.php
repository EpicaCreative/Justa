<?php include "cabecalho.php"; 
	
	
	if(isset($_POST['pagina']) != "") {

	$imagem = $_FILES['arquivo'];
	
	if($imagem['tmp_name'] != "Array"){
	
	if ($imagem['type']=="image/jpeg" or $imagem['type']=="image/jpg"){
		$img = imagecreatefromjpeg($imagem['tmp_name']);
	}else if ($imagem['type']=="image/png"){
		$img = imagecreatefrompng($imagem['tmp_name']);
	}
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
		
	}	
	
	else{
	echo "Erro ao subir a imagem...";
	}
	imagedestroy($img);
	imagedestroy($nova);
	if($name != ""){
		$insere_nome = "imagem = '".$name."',";
	}else{
		$insere_nome = "";
	}
	$update = mysqli_query(conexao(), "update conteudos set vinculo_tag = ".$_POST['class'].",
															posicao = ".$_POST['posicao'].",
															situacao = ".$_POST['situacao'].",
															".$insere_nome."
															link = '".$_POST['link']."'
															WHERE id = ".$_GET['id']) or die(mysqli_error());
	
	
	if($update){echo "<script>alert('Foto alterada com sucesso!'); window.location='listagem_imagens.php';</script>";} 	
	else{echo "<script>alert('Erro ao alterar. Tente novamente.'); window.location='dados_imagem?id=".$_GET['id']."';</script>";}
			
 
 	}//FECHA POST


	$id_selecionado = $_GET['id']; 
	$selectExistente = mysqli_query(conexao(), "Select conteudos.*, tags.vinculo_pagina, tags.id as id_tag, tags.descricao as descricao_tag from conteudos INNER JOIN tags ON tags.id = conteudos.vinculo_tag WHERE conteudos.id = ".$id_selecionado) or die(mysqli_error());
	$arrayExistente = mysqli_fetch_array($selectExistente);
	
?>	
<script src="assets/scripts.js"></script>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

        <div class="span9" >

        <div class="container-fluid">

               <h2 class="page-header">Alterar Imagens</h2>
         		<div class="row">
              		 <div class="span5">
                 		 <form method="post" enctype="multipart/form-data"  action="">
					
						<label>Arquivo</label>
							<input class="form-control" type="file"  id="arquivo"  name="arquivo" placeholder="Selecione a imagem"  maxlength="40">

                                        <div class="form-group">
                                            <label>Página</label>
                                            <select name="pagina" id="pagina" class="form-control">
                                            <option value="">Selecione a página</option>
											<?php
											$select_paginas = mysqli_query(Conexao(),"Select paginas.id, paginas.descricao as descricao_pagina from tags INNER JOIN paginas ON paginas.id = tags.vinculo_pagina WHERE tags.tipo = 'imagem' group by paginas.descricao ASC");
											while($array_paginas = mysqli_fetch_array($select_paginas)){?>
												<option value="<?php echo $array_paginas['id'] ?>" <?php if($arrayExistente['vinculo_pagina'] == $array_paginas['id']) {echo "selected='selected'"; } ?>><?php echo utf8_encode($array_paginas['descricao_pagina']); ?></option>
											<?php } ?>
											</select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Classe</label>
                                            <div id="resposta">
                                            <select name="class" id="class" class="form-control">
                                            <option value="">Selecione uma página</option>                                            
                                            <option value="<?php echo $arrayExistente['id_tag'] ?>" selected><?php echo utf8_encode($arrayExistente['descricao_tag']) ?></option>
											</select>
                                       		</div>
					    				</div>    
                                        <div class="muted pull">
                                            <label>Url Banner Tela Principal</label>
                                            <span class="page-header">Somente em caso de link no Banner Principal</span>
                                            <div id="resposta">
                                            <input type="text" class="form-control" name="link" value="<?php echo $arrayExistente['link']; ?>" id="link" style="width: 60%" placeholder="Insira o link completo">
                                            </div>
					    				</div>                                                                            	
                                        <div class="form-group">
                                            <label>Posic&ccedil;&atilde;o na p&aacute;gina</label>
                                            <select name="posicao" id="posicao"  class="form-control">
                                            <option value="0">Selecione a posi&ccedil;&atilde;o</option>
											<?php
											for($i = 1; $i < 11; $i++){?>
												<option value="<?php echo $i ?>" <?php if($arrayExistente['posicao'] == $i) {echo "selected='selected'"; } ?>><?php echo "Posi&ccedil;&atildeo ".$i; ?></option>
											<?php } ?>
											</select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Situa&ccedil;&atilde;o</label>
                                            <select name="situacao" id="situacao"  class="form-control">
                                            <option value="1" <?php if($arrayExistente['situacao']==1){echo "selected";} ?>>Ativo</option>
                                            <option value="2" <?php if($arrayExistente['situacao']==2){echo "selected";} ?>>Inativo</option>
											</select>
                                        </div>                                         									
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Atualizar os dados</button>
                                        <input type="hidden" name="id" value="<?php echo $id_selecionado; ?>">
                                       
                                        </div>
                                		</form>
									</div>
									<div class="span7">
                                            <label>Imagem atual</label>
                                            <img src="Site/img/<?php echo $arrayExistente['imagem'] ?>" class="img-responsive" >
                                        
									</div>
								</diiv>         	
							</div>
							
							        
				</div>         

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

<?php include "cabecalho.php"; 

	
	if(isset($_POST['pagina'])) {
	if($_POST['tipo'] == "Arquivo" && $_FILES['arquivo'] != "Array"){
	$uploaddir = 'docs/';
	$uploadfile = $uploaddir . basename($_FILES['arquivo']['name']);
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	$link = $uploaddir . basename($_FILES['arquivo']['name']);
		}
	}
	else{$link = $_POST['url_link'];}
	$descricao = utf8_decode($_POST['descricao']);
	$update = mysqli_query(Conexao(), "update menus_download set id_ciclo = ".$_POST['pagina'].",
															descricao = '".$descricao."',
															tipo = '".$_POST['tipo']."',
															classe = '".$_POST['classe']."',
															situacao = ".$_POST['situacao'].",
															link = '".$link."'
															WHERE id = ".$_GET['id']) or die(mysqli_error());
	

	if($update){echo "<script>alert('Link alterado com sucesso!'); window.location='listagem_downloads.php';</script>";} 	
	else{echo "<script>alert('Erro ao alterar. Tente novamente.'); window.location='dados_download?id=".$_GET['id']."';</script>";}
			
 
 	}//FECHA POST


	$id_selecionado = $_GET['id']; 
	$selectExistente = mysqli_query(Conexao(), "Select * from menus_download Where id = ".$id_selecionado) or die(mysqli_error());
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
					
						                <div class="form-group">
                                            <label>Página</label>
                                            <select name="pagina" id="pagina" class="form-control">
                                            <option value="">Selecione a página</option>
                                            <option value="0" <?php if($arrayExistente['id_ciclo'] == 0) {echo "selected='selected'"; } ?>>Sem vinculo</option>
											<?php
											$select_paginas = mysqli_query(Conexao(),"Select paginas.id, paginas.descricao from paginas group by paginas.descricao ASC");
											while($array_paginas = mysqli_fetch_array($select_paginas)){?>
												<option value="<?php echo $array_paginas['id'] ?>" <?php if($arrayExistente['id_ciclo'] == $array_paginas['id']) {echo "selected='selected'"; } ?>><?php echo utf8_encode($array_paginas['descricao']); ?></option>
											<?php } ?>
											</select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Classe</label>
                                            <select name="classe" id="classe" class="form-control">
                                            <option value="">Selecione o grupo</option>                                            
                                            <option value="nova">Novo grupo</option>                                            
                                            <?php
											$select_grupo = mysqli_query(Conexao(),"Select classe from menus_download group by classe ASC");
											while($array_grupo = mysqli_fetch_array($select_grupo)){?>
												<option value="<?php echo $array_grupo['classe'] ?>" <?php if($arrayExistente['classe'] == $array_grupo['classe']) {echo "selected='selected'"; } ?>><?php echo utf8_encode($array_grupo['classe']); ?></option>
											<?php } ?>
				    						</select>
					    				</div>                                       	
                                        <div class="form-group">
                                            <label>Descri&ccedil;&atilde;o na p&aacute;gina</label>
											<input type="text" placeholder="Como vai aparecer na página (50 máx)" maxlength="50" name="descricao" required value="<?php echo utf8_encode($arrayExistente['descricao']) ?>">	
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
                                		
									</div>
									<div class="span7">
                                           <div id="nova_classe" style="display: none">
                                            <label>Novo grupo</label>
											<input type="text" placeholder="Nome da novo grupo" maxlength="30" name="descricao_classe"  id="descricao_classe" >	            
                                            </div>                              
                                        <div class="form-group">
                                            <label>Tipo de item</label>
                                            <select name="tipo" id="tipo" required  class="form-control">
                                            <option value="">Selecione o tipo</option>
                                            <option value="Url" <?php if($arrayExistente['tipo']=="Url"){echo "selected";} ?>>Url</option>
                                            <option value="Arquivo" <?php if($arrayExistente['tipo']=="Arquivo"){echo "selected";} ?>>Arquivo</option>
											</select>
                                        </div>
                                           <div id="Arquivo"  style="display: <?php if($arrayExistente['tipo']=="Arquivo"){echo "block"; $endereco = "Site/";} else{echo "none";} ?>">
                                            <label>Arquivo</label>
											<input class="form-control" type="file"  id="arquivo"  name="arquivo" placeholder="Selecione o arquivo (pdf)" >
                                           </div>
                                           <div id="Url"  style="display: <?php if($arrayExistente['tipo']=="Url"){echo "block"; $endereco = "";} else{echo "none";} ?>">
                                           	<input type="text" placeholder="Url" maxlength="30" name="url"  id="url_link" >	            
                                           </div>  
                                           <?php if($arrayExistente['classe']=="Artigos"){
										   		$link = $arrayExistente['link']."=".$arrayExistente['id'];
										   } else {$link = $arrayExistente['link']; }?>
                                        	<a href="<?php echo $endereco.utf8_encode($link) ?>" target="_blank" >Link atual</a>
									</div>
								</div>   
								</form>      	
							</div>
							
							        
				</div>         

<script>

	$("#classe").change(function(){
		var id = this.value;
		if(id == "nova"){$("#nova_classe").css("display", "block");}
			else{$("#nova_classe").css("display", "none");}
			$("#descricao_classe").val("");
	});
	$("#tipo").change(function(){
		var id = this.value;
		$("#Url").css("display", "none");
		$("#Arquivo").css("display", "none");
		$("#"+id).css("display", "block");
			
	})		


</script>	    

<?php include "cabecalho.php"; 

	
	if(isset($_POST['pagina'])) {
	if($_POST['tipo'] == "Arquivo"){
	$uploaddir = 'docs/';
	$uploadfile = $uploaddir . basename($_FILES['arquivo']['name']);
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	$link = $uploaddir . basename($_FILES['arquivo']['name']);
		}
	}
	else{$link = $_POST['url_link'];}
	$descricao = utf8_decode($_POST['descricao']);
	$update = mysqli_query(Conexao(), "Insert into menus_download (id_ciclo, descricao, link, classe, situacao, tipo) 
												values (".$_POST['pagina'].", '".$descricao."', '".$link."', '".$_POST['classe']."', 1, '".$_POST['tipo']."')"); 
	

	if($update){echo "<script>alert('Link cadastrado com sucesso!'); window.location='listagem_downloads.php';</script>";} 	
	else{echo "<script>alert('Erro ao alterar. Tente novamente.'); window.location='links_download.php';</script>";}
			
 
 	}//FECHA POST

	
?>	
<script src="assets/scripts.js"></script>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

        <div class="span9" >

        <div class="container-fluid">

               <h2 class="page-header">Alterar Downloads</h2>
         		<div class="row">
              		 <div class="span5">
                 		 <form method="post" enctype="multipart/form-data"  action="">
					
						                <div class="form-group">
                                            <label>Página</label>
                                            <select name="pagina" id="pagina" class="form-control">
                                            <option value="">Selecione a página</option>
                                            <option value="0">Sem vinculo</option>
											<?php
											$select_paginas = mysqli_query(Conexao(),"Select paginas.id, paginas.descricao from paginas group by paginas.descricao ASC");
											while($array_paginas = mysqli_fetch_array($select_paginas)){?>
												<option value="<?php echo $array_paginas['id'] ?>"><?php echo utf8_encode($array_paginas['descricao']); ?></option>
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
												<option value="<?php echo $array_grupo['classe'] ?>"><?php echo utf8_encode($array_grupo['classe']); ?></option>
											<?php } ?>
				    						</select>
					    				</div>                                       	
                                        <div class="form-group">
                                            <label>Descri&ccedil;&atilde;o na p&aacute;gina</label>
											<input type="text" placeholder="Como vai aparecer na página (50 máx)" maxlength="50" name="descricao" required value="">	
                                        </div> 
                                     									
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Cadastrar</button>
                                       
                                       
                                        </div>

									</div>
									<div class="span7">
                                           <div id="nova_classe" style="display: none">
                                            <label>Novo grupo</label>
											<input type="text" placeholder="Nome da novo grupo" maxlength="30" name="descricao_classe"  id="descricao_classe" >	            
                                            </div>                              
                                        <div class="form-group">
                                            <label>Tipo de item</label>
                                            <select name="tipo" id="tipo"  class="form-control">
                                            <option value="">Selecione o tipo</option>
                                            <option value="Url" <?php if($arrayExistente['tipo']=="Url"){echo "selected";} ?>>Url</option>
                                            <option value="Arquivo" <?php if($arrayExistente['tipo']=="Arquivo"){echo "selected";} ?>>Arquivo</option>
											</select>
                                        </div>
                                           <div id="Arquivo"  style="display: none">
                                            <label>Arquivo</label>
											<input class="form-control" type="file"  id="arquivo"  name="arquivo" placeholder="Selecione o arquivo (pdf)" >
                                           </div>
                                           <div id="Url"  style="display: none">
                                           	<input type="text" placeholder="Url" maxlength="30" name="url"  id="url_link" >	            
                                           </div>  
                                           <?php if($arrayExistente['classe']=="Artigos"){
										   		$link = $arrayExistente['link']."=".$arrayExistente['id'];
										   } else {$link = $arrayExistente['link']; }?>
                                        	<a href="<?php echo utf8_encode($link) ?>" target="_blank" >Link atual</a>
									</div>
								</diiv>         	
							</div>
                  		</form>		
							        
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

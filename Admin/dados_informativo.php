<?php include "cabecalho.php"; 

	
	if(isset($_POST['descricao'])) {

	$uploaddir = 'Site/informativos/';
	$uploadfile = $uploaddir . basename($_FILES['arquivo']['name']);
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	$link = $uploaddir . basename($_FILES['arquivo']['name']);
	$altera_link = "link = '".$link."', ";
		}
	else {$altera_link = "";}	
	$descricao = utf8_decode($_POST['descricao']);
	$resumo = utf8_decode($_POST['resumo']);
	$pdf_issue = $_POST['pdf_issue'];
	$update_pagina = mysqli_query(Conexao(), "Update paginas set descricao = '".$descricao."' where id = ".$_POST['id_vinculo_informativo']); 
	$update = mysqli_query(Conexao(), "Update menus_download set descricao = '".$descricao."', 
																".$altera_link."
																resumo = '".$resumo."', 
																pdf_issue = '".$pdf_issue."',
																situacao = ".$_POST['situacao']." 
																where id = ".$_GET['id']); 
	

	if($update and $update_pagina){echo "<script>alert('Informativo alterado com sucesso!'); window.location='listagem_informativos.php';</script>";} 	
	else{echo "<script>alert('Erro ao alterar. Tente novamente.'); window.location='dados_informativo.php?id=".$_GET['id']."';</script>";}
			
 
 	}//FECHA POST
	else{
	$id_selected = $_GET['id'];
	$select_atual = mysqli_query(Conexao(), "Select id_vinculo_informativo, descricao, resumo, link, pdf_issue, situacao from menus_download where id = ".$id_selected) or die(mysqli_error());
	$array_atual = mysqli_fetch_array($select_atual);
	}
	
?>	
<script src="assets/scripts.js"></script>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

        <div class="span9" >

        <div class="container-fluid">

               <h2 class="page-header">Altera&ccedil;&atilde;o Informativos</h2>
         		<div class="row">
              		 <div class="span12">
								 <form method="post" enctype="multipart/form-data"  action="">
									  <div class="form-group">
										  <label>Descri&ccedil;&atilde;o na p&aacute;gina</label>
										  <input type="text" placeholder="Como vai aparecer na página (50 máx)" maxlength="50" name="descricao" required value="<?php echo utf8_encode($array_atual['descricao']) ?>">	
									  </div>
									  <div class="form-group">
										  <label>Arquivo PDF</label>
										  <input class="form-control" type="file"  id="arquivo"  name="arquivo" placeholder="Selecione o arquivo (pdf)" >
										  <a href="<?php echo $array_atual['link'] ?>" >Arquivo Atual</a>
									 </div>  
									 <div class="form-group">
									 		 <br>
									 		<label>Situa&ccedil;&atilde;o</label>
												<select name="situacao">
													<option value="1" <?php if($array_atual['situacao']==1){echo "selected";} ?> >Ativo</option>
													<option value="0" <?php if($array_atual['situacao']==0){echo "selected";} ?> >Inativo</option>
												</select>
									 </div> 
									 <div class="form-group">
											<label>Código Iframe ISSUE</label>
											<textarea name="pdf_issue" placeholder="Insira o html gerado no site Issue" style="min-width: 70%" maxlength="200" rows="3"><?php echo utf8_encode($array_atual['pdf_issue']) ?></textarea>
									 </div> <br>
									  									                               
									 <div class="form-group">
											<label>Resumo</label>
											<textarea name="resumo" placeholder="Insira um breve resumo do informativo..." style="min-width: 70%" maxlength="200" rows="3"><?php echo utf8_encode($array_atual['resumo']) ?></textarea>
									 </div>                               	
									  <div class="form-group">
											<button type="submit" class="btn btn-success">Alterar</button>
											<input type="hidden" name="id_vinculo_informativo" value="<?php echo $array_atual['id_vinculo_informativo'] ?>">
									  </div>
								  </form>	
									</div>
								</diiv>         	
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

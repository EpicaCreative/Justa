<?php include "cabecalho.php"; 

	
	if(isset($_POST['descricao'])) {

	$uploaddir = 'Site/informativos/';
	$uploadfile = $uploaddir . basename($_FILES['arquivo']['name']);
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	$link = $uploaddir . basename($_FILES['arquivo']['name']);
		}

	$descricao = utf8_decode($_POST['descricao']);
	$resumo = utf8_decode($_POST['resumo']);
	$pdf_issue = $_POST['pdf_issue'];
	$insert_pagina = mysqli_query(Conexao(), "Insert into paginas (descricao) VALUES ('".$descricao."')"); 
	$select_pagina = mysqli_query(Conexao(), "select id from paginas where descricao = '".$descricao."'");
	$array_pagina = mysqli_fetch_array($select_pagina);
	$id_pagina = $array_pagina[0];
	
	$insert_tags =  mysqli_query(Conexao(), "Insert into tags (tipo, vinculo_pagina, descricao, width, height) VALUES ('imagem', ".$id_pagina.", 'Banner Detalhes Informativos', '1920', '1280')"); 
	$insert_tags2 =  mysqli_query(Conexao(), "Insert into tags (tipo, vinculo_pagina, descricao, width, height) VALUES ('class', ".$id_pagina.", 'Titulo Detalhes Informativos', '', '')"); 	
	$insert = mysqli_query(Conexao(), "Insert into menus_download (id_vinculo_informativo, descricao, link, resumo, pdf_issue, classe, situacao) 
												values (".$id_pagina.", '".$descricao."', '".$link."', '".$resumo."', '".$pdf_issue."', 'Informativos', 1)"); 
	

	if($insert){echo "<script>alert('Informativo cadastrado com sucesso!'); window.location='listagem_informativos.php';</script>";} 	
	else{echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.location='links_informativo.php';</script>";}
			
 
 	}//FECHA POST

	
?>	
<script src="assets/scripts.js"></script>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

        <div class="span9" >

        <div class="container-fluid">

               <h2 class="page-header">Cadastro de Informativos</h2>
         		<div class="row">
              		 <div class="span12">
								 <form method="post" enctype="multipart/form-data"  action="">
									  <div class="form-group">
										  <label>Descri&ccedil;&atilde;o na p&aacute;gina</label>
										  <input type="text" placeholder="Como vai aparecer na página (50 máx)" maxlength="50" name="descricao" required value="">	
									  </div>
									  <div class="form-group">
										  <label>Arquivo PDF</label>
										  <input class="form-control" type="file"  id="arquivo"  name="arquivo" placeholder="Selecione o arquivo (pdf)" >
									 </div>                                
									 <div class="form-group">
									 <br>
											<label>Código Iframe ISSUE</label>
											<textarea name="pdf_issue" placeholder="Insira o html gerado no site Issue" style="min-width: 70%" maxlength="200" rows="3"></textarea>
									 </div>   									 
									 <div class="form-group">
									 <br>
											<label>Resumo</label>
											<textarea name="resumo" placeholder="Insira um breve resumo do informativo..." style="min-width: 70%" maxlength="200" rows="3"></textarea>
									 </div>                               	
									  <div class="form-group">
											<button type="submit" class="btn btn-success">Cadastrar</button>
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

<?php include "cabecalho.php"; 


	if(isset($_POST['conteudo'])){
		$update = mysqli_query(Conexao(),"update conteudos set vinculo_tag = ".$_POST['class'].", texto = '".$_POST['conteudo']."', posicao = '".$_POST['posicao']."' where id = ".$_GET['id']);
		if($update){
			echo "<script>alert('Texto atualizado com sucesso'); window.location='listagem_textos.php';</script>";
		}
		
	}
	else {
		
		$selExistente = mysqli_query(conexao(),"Select conteudos.id, tags.vinculo_pagina, tags.id as id_tag,
														  conteudos.tipo as conteudo, conteudos.situacao, conteudos.texto, conteudos.posicao from conteudos 
														  INNER JOIN tags ON tags.id = conteudos.vinculo_tag 
														  INNER JOIN paginas ON paginas.id = tags.vinculo_pagina
														  WHERE conteudos.id = ".$_GET['id']."")or die(mysqli_error());
		if(mysqli_num_rows($selExistente)>0){
		$arrayExistente = mysqli_fetch_array($selExistente);
		
			}		
	}
		

?>

          <div class="span9" >

						<div class="container-fluid">
							<div class="row-fluid pull">
							   <h2 class="page-header">Alterar Textos</h2>
								  <form method="post"  action="">
                                        <div class="muted pull">
                                            <label>Página</label>
                                            <select name="pagina" id="pagina" class="form-control">
                                            <option value="">Selecione a página</option>
											<?php
											$select_paginas = mysqli_query(Conexao(),"Select * from paginas order by descricao ASC");
											while($array_paginas = mysqli_fetch_array($select_paginas)){?>
												<option value="<?php echo $array_paginas['id'] ?>" <?php if($arrayExistente['vinculo_pagina'] == $array_paginas['id']) {echo "selected='selected'"; } ?> ><?php echo utf8_encode($array_paginas['descricao']) ?></option>
											<?php } ?>
											</select>
                                        </div>  
                                        <div class="muted pull">
                                            <label>Classe</label>
											<div id="resposta">
                                            <select name="class" id="class"  class="form-control">
                                            <option value="">Selecione a classe</option>
											<?php
											$select_classe = mysqli_query(Conexao(),"Select * from tags where tipo = 'class' && vinculo_pagina = ".$arrayExistente['vinculo_pagina']."  order by descricao ASC");
											while($array_classe = mysqli_fetch_array($select_classe)){?>

													<option value="<?php echo $array_classe['id'] ?>" <?php if($arrayExistente['id_tag'] == $array_classe['id']) {echo "selected='selected'"; } ?>><?php echo utf8_encode($array_classe['descricao']) ?></option>
											<?php } ?>
											</select>
											</div>                                       
                                        </div>
                                        <div class="muted pull">
                                            <label>Posic&ccedil;&atilde;o na p&aacute;gina</label>
                                            <select name="posicao" id="posicao"  class="form-control">
                                            <option value="">Selecione a posi&ccedil;&atilde;o</option>
											<?php
											for($i = 1; $i < 11; $i++){?>
												<option value="<?php echo $i ?>" <?php if($arrayExistente['posicao'] == $i) {echo "selected='selected'"; } ?>><?php echo "Posi&ccedil;&atildeo ".$i; ?></option>
											<?php } ?>
											</select>
                                        </div>                                          
					  					<div class="muted pull">
										<div class="span11" id="content">
										<div class="row-fluid">
											<!-- block -->
											<div class="block">
												<div class="navbar navbar-inner block-header">
													<div class="muted pull-left">Editor de Texto</div>
												</div>
												<div class="block-content collapse in">
										  	   		Texto salvo no banco de dados:
											  	   <textarea id="tinymce_full" name="conteudo"><?php echo utf8_encode($arrayExistente['texto']) ?></textarea>
												</div>
											</div>
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Atualizar</button>
                                        </div>											
											<!-- /block -->
										</div>
									</div>				  						
					  			</div>                                                                                                           
                             </form>

					   		 </div>
			    		</div>
	   				</div>        
		        </div>

        <!--/.fluid-container-->
        <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

		<script src="vendors/ckeditor/ckeditor.js"></script>
		<script src="vendors/ckeditor/adapters/jquery.js"></script>

		<script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

        <script src="assets/scripts.js"></script>
        <script>

    
		// Tiny MCE
        tinymce.init({
		    selector: "#tinymce_full",
		    plugins: [
		        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		        "searchreplace wordcount visualblocks visualchars code fullscreen",
		        "insertdatetime media nonbreaking save table contextmenu directionality",
		        "emoticons template paste textcolor"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    toolbar2: "print preview media | forecolor backcolor emoticons",
		    image_advtab: true,
		    templates: [
		        {title: 'Test template 1', content: 'Test 1'},
		        {title: 'Test template 2', content: 'Test 2'}
				
		    ]
		});


	$("#pagina").change(function(){
		var id = this.value;
		$.ajax({
			url : "ajax/encontra_paginas.php",
			type : "POST",
			data : {id : id, tipo : 'class'},
			success : function(resposta){
				resposta = resposta.trim();
				$("#resposta").html(resposta);
			}
			
		})
		
		
	})


</script>	        
    </body>

</html>
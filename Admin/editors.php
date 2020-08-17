
	<?php include "cabecalho.php"; 

	if(isset($_POST['conteudo'])){
		$insert = mysqli_query(Conexao(),"Insert into conteudos (tipo, texto, vinculo_tag, posicao, situacao) VALUES ('Texto', '".$_POST['conteudo']."', '".$_POST['class']."', ".$_POST['posicao'].", 1)");
		if($insert){
			echo "<script>alert('Texto cadastrado com sucesso'); window.location='listagem_textos.php';</script>";
		}
		
	}


?>

          <div class="span9" >

						<div class="container-fluid">
							<div class="row-fluid pull">
							   <h2 class="page-header">Adicionar Textos</h2>
								  <form method="post"  action="">
                                        <div class="muted pull">
                                            <label>Página</label>
                                            <select name="pagina" id="pagina" class="form-control">
                                            <option value="">Selecione a página</option>
											<?php
											$select_paginas = mysqli_query(Conexao(),"Select * from paginas order by descricao ASC");
											while($array_paginas = mysqli_fetch_array($select_paginas)){?>
												<option value="<?php echo $array_paginas['id'] ?>"><?php echo utf8_encode($array_paginas['descricao']) ?></option>
											<?php } ?>
											</select>
                                        </div>  
                                        <div class="muted pull">
                                            <label>Classe</label>
                                            <div id="resposta">
                                            <select name="class" id="class"  class="form-control">
                                            <option value="">Selecione uma página</option>
											</select>
                                       		</div>
                                        </div>
                                        <div class="muted pull">
                                            <label>Posic&ccedil;&atilde;o na p&aacute;gina</label>
                                            <select name="posicao" id="posicao"  class="form-control">
                                            <option value="">Selecione a posi&ccedil;&atilde;o</option>
											<?php
											for($i = 0; $i < 11; $i++){?>
												<option value="<?php echo $i ?>"><?php echo "Posi&ccedil;&atildeo ".$i; ?></option>
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
												   <textarea id="tinymce_full" name="conteudo"></textarea>
												</div>
											</div>
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Cadastrar</button>
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
        $(function() {
            // Bootstrap
            $('#bootstrap-editor').wysihtml5();

            // Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '500px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px', text : "asuh"});
			
        });

        //Tiny MCE
        tinymce.init({
		    selector: "#tinymce_basic",
		    plugins: [
		        "advlist autolink lists link image charmap print preview anchor",
		        "searchreplace visualblocks code fullscreen",
		        "insertdatetime media table contextmenu paste"
		    ],
		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});

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
		        {title: 'Test template 2', content: 'Test 2'},
				{value: 'uashauh'}
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
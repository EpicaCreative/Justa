<?php include "cabecalho.php"; 

//descricao 	link 	categoria 1 para menu, 2 para sub-menu	posicao ordem de exibicao	vinculo_menu vinculado ao id do menu na página
	if(isset($_POST['descricao'])){
		if($_POST['vinculo'] != ""){
			$categoria = 2; $vinculo = $_POST['vinculo'];
		}
		else{
			$categoria = $_POST['categoria']; $vinculo = 0;
		}
		$insert = mysqli_query(Conexao(),"Update menus set
											descricao ='".$_POST['descricao']."',
											link = '".$_POST['link']."',
											categoria = ".$categoria.", 
											posicao = ".$_POST['posicao'].",
											vinculo_menu = ".$vinculo."
											WHERE id = ".$_GET['id']."
											") or die(mysqli_error());
		if($insert){
			echo "<script>alert('Menu Alterado com sucesso'); window.location='listagem_menus.php';</script>";
		}
		
	}
	else{
		 $selExistente = mysqli_query(conexao(),"Select descricao, link, categoria, posicao, vinculo_menu from menus where id = ".$_GET['id'])or die(mysqli_error());
		 $arrayExistente = mysqli_fetch_array($selExistente);
	}

?>

          <div class="span9" >
						
						<div class="container-fluid">
							<div class="row-fluid pull">
							   <h2 class="page-header">Alterar Menu</h2>
								  <form method="post"  action="">
                                        <div class="muted pull">
                                            <label>Descri&ccedil;&atilde;o</label>
                                            <input type="text" value="<?php echo $arrayExistente['descricao'] ?>" name="descricao" id="descricao" onKeyUp="ReplaceMaiusculas(this.value)" placeholder="Como vai aparecer no menu" required class="input_text">
                                            
                                        </div>  
                                        <div class="muted pull">
                                            <label>Link</label>
                                            <input type="text" name="link" value="<?php echo utf8_decode($arrayExistente['link']) ?>" placeholder="Link de acesso" class="input_text">
                                            
                                        </div>                                          
                                        <div class="muted pull">
                                            <label>V&iacute;nculo&nbsp;<label style="color: brown">Selecione algum valor para transformar esse conte&uacute;do em Sub-Menu</label></label>
                                            
                                            <select name="vinculo" id="vinculo" onChange="alerta(this.value)" class="form-control">
                                            <option value="">Selecione o V&iacute;nculo</option>
											<?php
											$selectVinculo = mysqli_query(conexao(), "Select id, descricao from menus where categoria = 1");
					  						while($arrayVinculo = mysqli_fetch_array($selectVinculo)){?>
												<option value="<?php echo $arrayVinculo['id'] ?>" <?php if($arrayExistente['vinculo_menu'] == $arrayVinculo['id']) {echo "selected='selected'";} ?></option><?php echo utf8_encode($arrayVinculo['descricao']) ?></option>
											<?php } ?>
											</select>
                                        </div>
                                        <div class="muted pull">
                                            <label>Classe</label>
                                            <select name="posicao" id="posicao" required class="form-control">
                                            <option value="0">Selecione a posi&ccedil;&atilde;o</option>
											<?php
											for($i = 1; $i < 21; $i++){?>
												<option value="<?php echo $i ?>" <?php if($arrayExistente['posicao'] == $i) {echo "selected='selected'";} ?>><?php echo "Posi&ccedil;&atildeo ".$i; ?></option>
											<?php } ?>
											</select>
                                        </div>
                                        <div class="muted pull">
                                            <label>Local</label>
                                            <select name="categoria" id="categoria" <?php if($arrayExistente['categoria'] == 1 or $arrayExistente['categoria'] == 2) {echo "disabled='disabled'";} ?> required class="form-control">
                                            <option value="0">Selecione a localiza&ccedil;&atilde;o</option>
												<option value="1"<?php if($arrayExistente['categoria'] == 1) {echo "selected='selected'";} ?>>Menu Superior</option>
												<option value="2"<?php if($arrayExistente['categoria'] == 2) {echo "selected='selected'";} ?>>Menu Superior</option>												
												<option value="3"<?php if($arrayExistente['categoria'] == 3) {echo "selected='selected'";} ?>>Rodapé</option>
												<option value="4"<?php if($arrayExistente['categoria'] == 4) {echo "selected='selected'";} ?>>Links Úteis</option>
											</select>
                                        </div>                                                                                 
					  					<div class="muted pull">
										<div class="span11" id="content">
										<div class="row-fluid">
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Alterar</button>
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
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
			function ReplaceMaiusculas(str){
			$("#descricao").val("");
			$("#descricao").val(str.toUpperCase());
			
			} 
			function alerta(value){
				if(value > 0){
					alert('Se algum vinculo for selecionado, automaticamente o sistema entende que o menu se torna um Sub-Menu');
				}
			}



		</script>

    </body>

</html>
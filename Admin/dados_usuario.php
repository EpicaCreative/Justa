<?php include "cabecalho.php"; 
	
	if(isset($_POST['nome'])) {
	

			  if($_POST['nova_senha']!="******"){$altera_senha = ", senha = '".md5($_POST['nova_senha'])."'";} else {$altera_senha = "";}
              $update = mysqli_query(conexao(),"update TB_usuario set 
					nome = '".utf8_decode($_POST['nome'])."',
					email = '".utf8_decode($_POST['email'])."',
					data_cancelamento = '".$_POST['data_cancelamento']."'
					".$altera_senha."
					where id = ".$_POST['id']." ") or die(mysqli_error());	  
               if($update) {
					            
                   echo "<script>alert('Alterado com sucesso!'); window.location='listagem_usuarios.php';</script>";
                }else{
                   echo "<script>alert('Falha ao Alterar!'); window.location='listagem_usuarios.php';</script>";
                }
           
        
	}//FECHA POST

	
	$id_selecionado = $_GET['id']; 
	$selExistente = mysqli_query(conexao(),"Select * from TB_usuario where id = ".$id_selecionado)or die(mysqli_error());
	$array = mysqli_fetch_array($selExistente);
?>	


        <div class="span9" >

        <div class="container-fluid">
            <div class="row-fluid pull">
                    <h2 class="page-header" style="text-align: left">Dados de Acesso</h2>
                    <h6 class="muted pull">&nbsp;Usu&aacute;rio cadastrado dia <?php echo date('d/m/Y',strtotime($array["data_cadastro"])) ?></h6>
                   



                                    <form method="post" enctype="multipart/form-data"  action="">

                                        <div class="muted pull">
									 	<label>Nome</label>
										<input class="form-control" type="text" width="100"  id="nome" value="<?php echo utf8_encode($array["nome"]) ?>" name="nome" placeholder="Digite seu nome" required maxlength="40">
												

                                        </div>
                                        
										<div class="muted pull">
                                            <label>Senha</label>
                                            <input type="password" class="form-control" name="nova_senha" placeholder="Senha de acesso" autocomplete="off" value="******" >
											<h6 class="muted pull" style="margin-top: -8px; color: cornflowerblue">&nbsp;Somente digite a senha caso deseje alter&aacute;-la.</h6>
                                        </div>
                                       
                                        <div class="muted pull">
                                            <label>E-mail</label>
                                           <input class="form-control" type="text" id="email" width="100"  value="<?php echo utf8_encode($array["email"]) ?>" name="email" placeholder="Seu E-mail" required >
                                        </div>                                        

                                        <div class="muted pull">
                                            <label>Situa&ccedil;&atilde;o</label>
												<select name="data_cancelamento" id="data_cancelamento" class="form-control">
													<option <?php if($array['data_cancelamento']=="1111-11-11") {echo "selected";} ?> value="1111-11-11">Ativo</option>
													<option <?php if($array['data_cancelamento']!="1111-11-11") {echo "selected";} ?> value="<?php echo date('Y-m-d'); ?>">Cancelado</option>
												</select>                                           
                                        </div>  
                                                                               
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Atualizar os dados</button>
                                        <input type="hidden" name="id" value="<?php echo $id_selecionado; ?>">
                                       
                                        </div>
		

                                </form>




    </div>    </div>    </div>
        <script src="assets/scripts.js"></script>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
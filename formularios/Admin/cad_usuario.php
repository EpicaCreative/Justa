<?php include "cabecalho.php";  include "../ws/conexao.php";
	
	if($_POST['nome'] != "") {
	
			  
			  $selExistente = mysqli_query($conecta,"Select id from TB_usuario where email = '".$_POST['email']."'") or die(mysqli_error());
			  if(mysqli_num_rows($selExistente)>0){
				  echo "<script>alert('E-mail já cadastrado. Utilize um e-mail diferente!'); window.location='index.php';</script>";
			  }
				else {
              $cadastra = mysqli_query($conecta,"Insert into TB_usuario (nome, email, senha, data_cadastro) Values ('".$_POST['nome']."','".$_POST['email']."', '".md5($_POST['nova_senha'])."', '".date('Y-m-d')."', '1111-11-11', 'admin')") or die(mysqli_error());	  
               if($cadastra) {
					            
                   echo "<script>alert('Cadastrado com sucesso!'); window.location='index.php';</script>";
                }else{
                   echo "<script>alert('Falha ao Cadastrar!'); window.location='index.php';</script>";
                }
	}
           
        
	}//FECHA POST

?>	


        <div class="span9" >

            <div class="row-fluid pull">
                    <h2 class="page-header" style="text-align: left">Novo Usu&aacute;rio</h2>
                    
                                    <form method="POST"  action="">

                                        <div class="muted pull">
									 	<label>Seu Nome</label>
										<input class="form-control" type="text" autocomplete="off" id="nome" value="" name="nome" placeholder="Digite seu nome" required maxlength="40">
												

                                        </div>
                                        
										<div class="muted pull">
                                            <label>Senha</label>
                                            <input type="password" class="form-control" autocomplete="off"  name="nova_senha" placeholder="Senha de acesso" autocomplete="off" >
                                        </div>
                                       
                                        <div class="muted pull">
                                            <label>E-mail</label>
                                           <input class="form-control" type="text" id="email" autocomplete="off"  value="" name="email" placeholder="Seu E-mail" required >
                                        </div>                                        

								
                                        <div class="form-group">

 										<button type="submit" class="btn btn-success">Cadastrar</button>
                                        
                                       
                                        </div>
		

                                </form>




    </div>    </div>   
        <script src="assets/scripts.js"></script>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
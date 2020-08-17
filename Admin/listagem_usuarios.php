<?php include "cabecalho.php"; ?>
                <div class="span8" >     
                
            <div class="row-fluid pull">
                    <h2 class="page-header" style="text-align: left">Usu&aacute;rios cadastrados</h2>
                        <div class="block">

  
<?php 			  $selExistente = mysqli_query(conexao(),"Select id, nome, email, data_cancelamento from TB_usuario order by nome ASC")or die(mysqli_error());
			  	  if(mysqli_num_rows($selExistente)>0){
				  
				?>                          
                               <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-hover">
						              <thead>
						                <tr>
						                  <th>Cadastro</th>
						                  <th>Nome</th>
						                  <th>E-mail (login)</th>
						                  <th>Situa&ccedil;&atilde;o</th>
										  <th>Ver</th>	
						                </tr>
						              </thead>
						              <tbody>

<?php 			 
				  while($array = mysqli_fetch_array($selExistente)){
				  if($array['data_cancelamento']!="1111-11-11"){$situacao = "Cancelado dia ".date('d/m/Y', strtotime($array['data_cancelamento']));} else {$situacao = "Ativo";}
				?>
						                <tr>
						                  <td><?php echo $array['id'] ?></td>
						                  <td><?php echo $array['nome'] ?></td>
						                  <td><?php echo $array['email'] ?></td>
						                  <td><?php echo $situacao ?></td>
										  <td><a href="dados_usuario.php?id=<?php echo $array['id'] ?>" class="btn btn-success">Ver</a></td>	
						                </tr>
						                
<?php 		} //Fecha While	  ?>
				  
						              </tbody>
						            </table>
                                </div>
                            </div>
<?php 	  }//Fecha If	  ?>                            
                        </div>
                        <!-- /block -->
                    </div>
             </div>

 

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>
<?php include "cabecalho.php"; $pagina_atual = $_GET['pagina']; if($pagina_atual=="") $pagina_atual = 1;
	if($_GET['acao']=="excluir"){
		$Delete = mysqli_query(conexao(),"Delete from menus_download where id = ".$_GET['id'])or die(mysqli_error());
		$Delete_pagina = mysqli_query(conexao(),"Delete from paginas where id = ".$_GET['id_pagina'])or die(mysqli_error());
		$Delete_tag = mysqli_query(conexao(),"Delete from tags where vinculo_pagina = ".$_GET['id_pagina'])or die(mysqli_error());
		if($Delete and $Delete_pagina and $Delete_tag){
			echo "<script>alert('Deletado com sucesso'); window.location='listagem_informativos.php';</script>";
			}
	}
?>
                <div class="span9">      
                
            <div class="row-fluid pull">
                    <h2 class="page-header">Itens Cadastrados&nbsp;<a href="links_informativo.php" class="btn btn-success">Cadastrar</a></h2>
                        <form action="" method="get">
                    <div class="row-fluid pull">
                    	<div class="span3"> 
                     		<select name="data_cadastro" onChange="this.form.submit();">
                     			<option <?php if($_GET['data_cadastro']==""){echo "selected"; } ?> value="">Todas as datas</option> 
                     			<?php $select_col1 = mysqli_query(conexao(),"Select data_cadastro from menus_download where classe = 'Informativos' GROUP by menus_download.data_cadastro Desc");
								while($array_col1 = mysqli_fetch_array($select_col1)){ ?>
                    			                  	<option <?php if($_GET['data_cadastro']==$array_col1[0]){echo "selected"; } ?> value="<?php echo $array_col1[0] ?>"><?php echo date('d/m/Y', strtotime($array_col1['data_cadastro'])); ?></option>
							<?php } ?>                    			                  	
                    		</select>                 	
                    	</div>
                    	<div class="span3"> 
                    		<select name="descricao" onChange="this.form.submit();">
                     			<option <?php if($_GET['descricao']==""){echo "selected"; } ?> value="">Todas as descri&ccedil;&otilde;es</option> 
                     			<?php $select_col3 = mysqli_query(conexao(),"Select descricao from menus_download where classe = 'Informativos' GROUP by menus_download.data_cadastro Desc");
								while($array_col3 = mysqli_fetch_array($select_col3)){ ?>
                    			                  	<option <?php if($_GET['descricao']==utf8_encode($array_col3['descricao'])){echo "selected"; } ?> value="<?php echo utf8_encode($array_col3['descricao']); ?>"><?php echo utf8_encode($array_col3['descricao']); ?></option>
							<?php } ?>   
                    		</select> 
                    	</div>
                    	<div class="span3"> 
         	
                    	</div>                    	                    	
                    </div>   
					</form>  

  
<?php 			  if($_GET['data_cadastro'] != ""){$pesquisa_cadastro = " && data_cadastro = '".$_GET['data_cadastro']."'";}
				  if($_GET['classe']!=""){$pesquisa_classe = " && classe = '". utf8_decode($_GET['classe'])."'";}
				  if($_GET['descricao']!=""){$pesquisa_descricao = " && descricao = '".utf8_decode($_GET['descricao'])."'";}		
				  $inicio = ($pagina_atual - 1) * 25; 					  
				  $selExistente = mysqli_query(conexao(),"Select * from menus_download where classe = 'Informativos'  ".$pesquisa_cadastro.$pesquisa_classe.$pesquisa_descricao." order by menus_download.data_cadastro Desc LIMIT 25 OFFSET ".$inicio."")or die(mysqli_error());
			  	  if(mysqli_num_rows($selExistente)>0){
 				  $selTotal = mysqli_query(conexao(),"Select * from menus_download where classe = 'Informativos'  ".$pesquisa_cadastro.$pesquisa_classe.$pesquisa_descricao." order by menus_download.data_cadastro Desc")or die(mysqli_error());				  
				?>                          
                               <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-hover">
						              <thead>
						                <tr>
						                  <th>Cadastro</th>		
						                  <th>Descri&ccedil;&atilde;o</th>
						                  <th>Situa&ccedil;&atilde;o</th>
						                  <th>Editar</th>
						                  <th>Excluir</th>
						                </tr>
						              </thead>
						              <tbody>

<?php 			$registros = 0;
				$total_registros = mysqli_num_rows($selTotal);
				$total_paginas = ceil($total_registros / 25);
				while($array = mysqli_fetch_array($selExistente)){
				  
				?>
						                <tr>
						                  <td><?php if($array['data_cadastro']!="0000-00-00 00:00:00") echo date('d/m/Y', strtotime($array['data_cadastro'])); else echo "N&atilde;o Def." ?></td>	
						                  <td><?php echo utf8_encode($array['descricao']); ?></td>
						                  <td><?php if($array['situacao']==1)  echo "Ativo"; else echo "Inativo"; ?></td>
						                  <td><a href="dados_informativo.php?id=<?php echo $array['id'] ?>" class="btn btn-success">Editar</a></td>
						                  <td><a href="listagem_informativos.php?id=<?php echo $array['id'] ?>&id_pagina=<?php echo $array['id_vinculo_informativo'] ?>&acao=excluir" class="btn btn-danger">Deletar</a></td>
						                </tr>
						                
<?php 		$registros++;} //Fecha While	  ?>
				  
						              </tbody>
						            </table>
                                </div>
                            </div>
<?php 	  }//Fecha If	  ?>                            
                        </div>
                        <!-- /block -->
									<div class="row">
										<div class="col-md-6"><span class="quantidade_paginacao">Mostrando
										<?php echo $registros; ?> registros de
										<?php echo $total_registros; ?> em <?php echo $total_paginas ?> p&aacute;gina(s). </span>
										</div>
										<div class="col-md-6">
											<nav style="float: right">
												<ul class="pagination pagination-lg">
													<li>
														<a href="?data_cadastro=<?php echo $_GET['data_cadastro'] ?>&descricao=<?php echo $_GET['descricao'] ?>&pagina=1" class="paginacao-submit">«</a>
													</li>
													<?php 
										 for($anterior = $pagina_atual - 3; $anterior < $pagina_atual; $anterior++){
										 if($anterior > 0 && $anterior != $pagina_atual){ ?>
													<li>
														<a href="?data_cadastro=<?php echo $_GET['data_cadastro'] ?>&descricao=<?php echo $_GET['descricao'] ?>&pagina=<?php echo $anterior ?>" class="paginacao-submit"><?php echo $anterior ?></a>
													</li>
													<?php } } ?>
													<li>
														<a class="paginacao-submit"><?php echo $pagina_atual ?></a>
													</li>
													<?php
													for ( $proxima = $pagina_atual + 1; $proxima < $pagina_atual + 4; $proxima++ ) {
														if ( $proxima <= $total_paginas ) {
															?>
													<li>
														<a href="?data_cadastro=<?php echo $_GET['data_cadastro'] ?>&descricao=<?php echo $_GET['descricao'] ?>&pagina=<?php echo $proxima ?>" class="paginacao-submit"><?php echo $proxima ?></a>
													</li>
													<?php }} ?>
													<li>
														<a href="?data_cadastro=<?php echo $_GET['data_cadastro'] ?>&descricao=<?php echo $_GET['descricao'] ?>&pagina=<?php echo $total_paginas ?>" class="paginacao-submit">»</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>                          
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
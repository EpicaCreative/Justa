<?php include "cabecalho.php"; $pagina_atual = $_GET['pagina']; if($pagina_atual=="") $pagina_atual = 1;
	if($_GET['acao']=="excluir"){
		$Delete = mysqli_query(conexao(),"Delete from menus where id = ".$_GET['id'])or die(mysqli_error());
		if($Delete){
			echo "<script>alert('Deletado com sucesso'); window.location='listagem_menus.php';</script>";
			}
	}
?>
                <div class="span9">      
                
            <div class="row-fluid pull">
                    <div class="row"><h2 class="page-header">Menus cadastrados&nbsp;<a href="menus.php" class="btn btn-success">Cadastrar</a></h2>
                        <form action="" method="get">
                    <div class="row-fluid pull">
                    	<div class="span3"> 
                  	
                    	</div>
                    	<div class="span3"> 
                    		<select name="categoria" onChange="this.form.submit();">
                    			<option <?php if($_GET['categoria']==""){echo "selected"; } ?> value="">Todas as categorias</option>
                    			<option <?php if($_GET['categoria']==1){echo "selected"; } ?> value="1">Menu</option>
                    			<option <?php if($_GET['categoria']==2){echo "selected"; } ?> value="2">Sub-Menu</option>
                    			<option <?php if($_GET['categoria']==3){echo "selected"; } ?> value="3">Rodap&eacute;</option>
                    			<option <?php if($_GET['categoria']==4){echo "selected"; } ?> value="4">Links &Uacute;teis</option>
                    		</select>
                    	</div>
                    	<div class="span3"> 
               	
                    	</div>                    	                    	
                    </div>   
					</form>
   <div class="block"></div>
<?php 				if($_GET['categoria']!=""){$pesquisa_categoria = "&& categoria = ".$_GET['categoria'];}
					$inicio = ($pagina_atual - 1) * 25; 
					$selExistente = mysqli_query(conexao(),"Select id, descricao, categoria, vinculo_menu from menus WHERE id <> 0 ".$pesquisa_categoria." order by posicao ASC LIMIT 25 OFFSET ".$inicio."")or die(mysqli_error());
					
			  	  if(mysqli_num_rows($selExistente)>0){
				  	$selTotal = mysqli_query(conexao(),"Select id from menus WHERE id <> 0 ".$pesquisa_categoria." ");
				?>                          
                               <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-hover">
						              <thead>
						                <tr>
						                  <th>Descri&ccedil;&atilde;o</th>
						                  <th>Categoria</th>
						                  <th>Vinculo</th>
						                  <th>Editar</th>
						                  <th>Excluir</th>
						                </tr>
						              </thead>
						              <tbody>

<?php 			$registros = 0;
				$total_registros = mysqli_num_rows($selTotal);
				$total_paginas = ceil($total_registros / 25);
				  while($array = mysqli_fetch_array($selExistente)){
				  if($array['categoria']==1)  $categoria = "Menu"; 
					elseif($array['categoria']==2) $categoria = "Sub-menu";
					elseif($array['categoria']==3) $categoria = "Rodap&eacute;";
					elseif($array['categoria']==4) $categoria = "Links &Uacute;teis";
					  if($array['vinculo_menu']!=0){
					  	$selectVinculo = mysqli_query(conexao(), "Select descricao from menus where id = ".$array['vinculo_menu']);
					  	$arrayVinculo = mysqli_fetch_array($selectVinculo);
						$vinculado = utf8_encode($arrayVinculo['descricao'])	;
					  }
					  else{
						$vinculado = "N&AtildeO VINCULADO"  ;
					  }
				?>
						                <tr>
						                  <td><?php echo utf8_encode($array['descricao']); ?></td>
						                  <td><?php echo $categoria ?></td>
						                  <td><?php echo $vinculado ?></td>
						                  <td><a href="dados_menu.php?id=<?php echo $array['id'] ?>" class="btn btn-success">Editar</a></td>
						                  <td><a href="listagem_menus.php?id=<?php echo $array['id'] ?>&acao=excluir" class="btn btn-danger">Deletar</a></td>
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
														<a href="?categoria=<?php echo $_GET['categoria'] ?>&pagina=1" class="paginacao-submit">«</a>
													</li>
													<?php 
										 for($anterior = $pagina_atual - 3; $anterior < $pagina_atual; $anterior++){
										 if($anterior > 0 && $anterior != $pagina_atual){ ?>
													<li>
														<a href="?categoria=<?php echo $_GET['categoria'] ?>&pagina=<?php echo $anterior ?>" class="paginacao-submit"><?php echo $anterior ?></a>
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
														<a href="?categoria=<?php echo $_GET['categoria'] ?>&pagina=<?php echo $proxima ?>" class="paginacao-submit"><?php echo $proxima ?></a>
													</li>
													<?php }} ?>
													<li>
														<a href="?categoria=<?php echo $_GET['categoria'] ?>&pagina=<?php echo $total_paginas ?>" class="paginacao-submit">»</a>
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
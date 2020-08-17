<?php include "cabecalho.php"; $pagina_atual = $_GET['pagina']; if($pagina_atual=="") $pagina_atual = 1;
	
?>
                <div class="span9" >     
                
            <div class="row-fluid pull">
					
                    <h2 class="page-header" style="text-align: left;">Artigos Cadastrados&nbsp;<a href="dados_eventos.php?id=cadastro" class="btn btn-success">Cadastrar</a></h2>
                        <form action="" method="get">
                    <div class="row-fluid pull">
                    	<div class="span3"> 
                     		<select name="tipo" onChange="this.form.submit();">
                     			<option <?php if($_GET['tipo']==""){echo "selected"; } ?> value="">Todas os Tipos</option> 
                     			<option <?php if($_GET['tipo']=="imagem"){echo "selected"; } ?> value="imagem">Foto</option>
								<option <?php if($_GET['tipo']=="texto"){echo "selected"; } ?> value="texto">Texto</option>
								<option <?php if($_GET['tipo']=="video"){echo "selected"; } ?> value="video">V&iacute;deo</option>
							<?php //} ?>                    			                  	
                    		</select>                 	
                    	</div>
                    	<div class="span3"> 
                    		<select name="filtro" onChange="this.form.submit();">
                     			<option <?php if($_GET['filtro']==""){echo "selected"; } ?> value="">Todas os Filtros</option> 
                     			<?php $select_col3 = mysqli_query(conexao(),"SELECT distinct filtro from TB_conteudo order by filtro ASC");
								while($array_col3 = mysqli_fetch_array($select_col3)){ ?>
                    			                  	<option <?php if($_GET['filtro']==utf8_encode($array_col3['filtro'])){echo "selected"; } ?> value="<?php echo utf8_encode($array_col3['filtro']); ?>"><?php echo utf8_encode($array_col3['filtro']); ?></option>
							<?php } ?>   
                    		</select> 
                    	</div>
                    	<div class="span3"> 
                    		<select name="situacao" onChange="this.form.submit();">
                     			<option <?php if($_GET['situacao']==""){echo "selected='selected'"; } ?> value="">Todas as Situa&ccedil;&otilde;es</option> 
                     			<option <?php if($_GET['situacao']=="0"){echo "selected='selected'"; } ?> value="0">Inativo</option>
								<option <?php if($_GET['situacao']=="1"){echo "selected='selected'"; } ?> value="1">Ativo</option>
								<option <?php if($_GET['situacao']=="2"){echo "selected='selected'"; } ?> value="2">Nunca Publicado</option>
								<option <?php if($_GET['situacao']=="3"){echo "selected='selected'"; } ?> value="3">Publicado em Homolog</option>
							<?php //} ?>   
                    		</select>          	
                    	</div>                    	                    	
                    </div>   
					</form>                        
                        <div class="block"></div>

  
<?php 		  	  if($_GET['tipo'] != ""){$pesquisa_tipo = " && tconteudo.tipo = '".utf8_decode($_GET['tipo'])."'";}
				  if($_GET['filtro']!=""){$pesquisa_filtro = " && conteudo.filtro = '".utf8_decode($_GET['filtro'])."'";}	
				  if($_GET['situacao']!=""){$pesquisa_situacao = " && conteudo.situacao = ".$_GET['situacao']."";}	
				  $inicio = ($pagina_atual - 1) * 25; 	
				  $selExistente = mysqli_query(conexao(), "SELECT TB_append_conteudo.descricao, conteudo.id as id_conteudo, conteudo.*, tconteudo.descricao as tipo_conteudo from TB_conteudo as conteudo 
										INNER JOIN TB_tipos_conteudo as tconteudo ON conteudo.id_tipo_conteudo = tconteudo.id
										INNER JOIN TB_append_conteudo ON TB_append_conteudo.vinculo_conteudo = conteudo.id
										INNER JOIN TB_vinculo as vinculo ON vinculo.id_conteudo = conteudo.id
										INNER JOIN TB_pagina as pagina on pagina.id = vinculo.id_pagina
										WHERE TB_append_conteudo.posicao = 1 ".$pesquisa_tipo."  ".$pesquisa_filtro."  ".$pesquisa_situacao." order by conteudo.data_cadastro DESC LIMIT 25 OFFSET ".$inicio."")or die(mysqli_error());
				 
			  	  if(mysqli_num_rows($selExistente)>0){
				  $selTotal = mysqli_query(conexao(),"SELECT conteudo.id as id_conteudo, conteudo.*, tconteudo.tipo from TB_conteudo as conteudo 
										INNER JOIN TB_tipos_conteudo as tconteudo ON conteudo.id_tipo_conteudo = tconteudo.id
										INNER JOIN TB_append_conteudo ON TB_append_conteudo.vinculo_conteudo = conteudo.id
										INNER JOIN TB_vinculo as vinculo ON vinculo.id_conteudo = conteudo.id
										INNER JOIN TB_pagina as pagina on pagina.id = vinculo.id_pagina
										WHERE TB_append_conteudo.posicao = 1 ".$pesquisa_tipo."  ".$pesquisa_filtro."  ".$pesquisa_situacao." order by conteudo.data_cadastro DESC")or die(mysqli_error());
				?>                          
                               <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-hover">
						              <thead>
						                <tr>
						                  
						                  <th>Descri&ccedil;&atilde;o</th>
						                  <th>Data Cadastro</th>
						                  <th>Tipo</th>
										  <th>Filtro</th>	
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
						                  <td><?php echo utf8_encode($array['descricao']); ?></td>
						                  <td><?php echo date('d/m/Y', strtotime($array['data_cadastro'])); ?></td>
						                  <td><?php echo utf8_encode($array['tipo_conteudo']); ?></td>
										  <td><?php echo utf8_encode($array['filtro']); ?></td>	
						                  <td><?php if($array['situacao']==1)  echo "Ativo"; 
													elseif($array['situacao']==0) echo "Inativo";
											  		elseif($array['situacao']==2) echo "Nunca Publicado";
											  		elseif($array['situacao']==3) echo "Publicado em Homolog";
											  ?></td>
						                  <td><a href="dados_eventos.php?id=<?php echo $array['id']; ?>" class="btn btn-success">Editar</a></td>
						                  <td><a class="btn btn-danger" onClick="DeletaArtigo(<?php echo $array['id']; ?>)">Deletar</a></td>
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
														<a href="?tipo=<?php echo $_GET['tipo'] ?>&filtro=<?php echo $_GET['filtro'] ?>&situacao=<?php echo $_GET['situacao'] ?>&pagina=1" class="paginacao-submit">«</a>
													</li>
													<?php 
										 for($anterior = $pagina_atual - 3; $anterior < $pagina_atual; $anterior++){
										 if($anterior > 0 && $anterior != $pagina_atual){ ?>
													<li>
														<a href="?tipo=<?php echo $_GET['tipo'] ?>&filtro=<?php echo $_GET['filtro'] ?>&situacao=<?php echo $_GET['situacao'] ?>&pagina=<?php echo $anterior ?>" class="paginacao-submit"><?php echo $anterior ?></a>
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
														<a href="?tipo=<?php echo $_GET['tipo'] ?>&filtro=<?php echo $_GET['filtro'] ?>&situacao=<?php echo $_GET['situacao'] ?>&pagina=<?php echo $proxima ?>" class="paginacao-submit"><?php echo $proxima ?></a>
													</li>
													<?php }} ?>
													<li>
														<a href="?tipo=<?php echo $_GET['tipo'] ?>&filtro=<?php echo $_GET['filtro'] ?>&situacao=<?php echo $_GET['situacao'] ?>&pagina=<?php echo $total_paginas ?>" class="paginacao-submit">»</a>
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
			function DeletaArtigo(id_conteudo){
			var confirmar = confirm('Confirma a exclusão?');
			
			var acao = 'deleta-artigo';
			if(confirmar){
					
					$.ajax({
					url : 'ajax/upload_eventos.php',
					type : 'POST',
					data : {id_conteudo : id_conteudo, acao : acao },
					success : function(recebido){
						alert(recebido);
						window.location='listagem_blog.php';
						
					},
					error : function(){
					alert('Algo deu errado, tente novamente por favor!');
						}
				})
			}
		}	
		</script>	

    </body>

</html>
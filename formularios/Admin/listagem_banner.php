<?php 
    include "cabecalho.php"; 

    $pagina_atual = $_GET['pagina']; 
    if($pagina_atual=="") $pagina_atual = 1;

    $offset = ($pagina_atual - 1) * 25; 	

    $sql_search_candidates = "SELECT * FROM tb_banners ORDER BY id DESC LIMIT 25 OFFSET $offset";
    $statement = mysqli_query(conexao(), $sql_search_candidates);

    $sql_search_pages = "SELECT * FROM tb_banners";

    $sql_total_rows = mysqli_query(conexao(), $sql_search_pages);
    $registros = 0;
	$total_registros = mysqli_num_rows($sql_total_rows);
	$total_paginas = ceil($total_registros / 25); 

    
?>
<div class="span9" >     
                
                <div class="row-fluid pull">
                <h2 class="page-header" style="text-align: left;">Banners Cadastrados&nbsp;
                <a href="cadastrar_banner.php?action=cadastro" class="btn btn-success">Cadastrar</a>
            </h2>
                <form></form>
<!-- forms vão aqui -->

<div class="block"></div>

<div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-hover">
						              <thead>
                                          <th>#</th>
                                        <th>Nome</th>
                                        <th>Página</th>
                                        <th>Im. Alta Resolução</th>
                                        <th>Im. Baixa Resolução</th>
                                        <th>Status</th>
                                        <th>Opções</th>
                                      </thead>
                                      <tbody>
                                            <?php 
                                            $registros = 1;
                                            while($array = mysqli_fetch_array($statement)){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo utf8_decode($registros); ?></td>
                                                    <td><?php echo utf8_encode($array['name']); ?></td>
                                                    <td><?php echo utf8_encode($array['pagina']); ?></td>
                                                    <td><?php echo utf8_encode($array['imagem_high']); ?></td>
                                                    <td><?php echo utf8_encode($array['imagem_low']); ?></td>
                                                    <td><?php echo utf8_encode($array['ativo']); ?></td>
                                                    <td>
                                                        <a class="btn btn-success" href="cadastrar_banner.php?id=<?php echo utf8_encode($array['id']); ?>&action=editar">editar</a>
                                                        <a class="btn btn-danger" onclick="deletarBanner(<?php echo utf8_encode($array['id']); ?>)">excluir</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $registros++;
                                            } ?>
                                      </tbody>
                                      </table>
                                </div>
</div>

<div class="row">
										<div class="col-md-6"><span class="quantidade_paginacao">Mostrando
										<?php echo $registros -1; ?> registros de
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
            VerArquivo = url =>
            {
              

                var request = new XMLHttpRequest();  
                request.open('GET', url, true);
                request.onreadystatechange = function(){
                    if (request.readyState === 4){
                        if (request.status === 404) {  
                            Swal.fire(
                                'Erro!',
                                'Arquivo de currículo não encontrado',
                                'error'
                            );
                        } else{
                            var win = window.open(url, '_blank');
                            win.focus();
                        }
                    }
                };
                request.send();
            }

            let deletarBanner = $id => 
            {
                var confirmar = confirm('Confirma a exclusão?');
			
			var acao = 'deleta-artigo';
			if(confirmar){
					
					$.ajax({
					url : 'ajax/delete_banner.php',
					type : 'POST',
					data : {id : $id, acao : 'delete' },
					success : function(recebido){
						alert(recebido);
						window.location='listagem_banner.php';
						
					},
					error : function(){
					alert('Algo deu errado, tente novamente por favor!');
						}
				})
			}
            }
        </script>

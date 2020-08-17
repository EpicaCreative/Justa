<?php 
    include "cabecalho.php"; 

    $pagina_atual = $_GET['pagina']; 
    if($pagina_atual=="") $pagina_atual = 1;

    $offset = ($pagina_atual - 1) * 25; 
    
    $month = isset($_GET['month']) ? $_GET['month'] : 0;
    $year = isset($_GET['year']) ? $_GET['year'] : 0;

    $query = isset($_GET['query']) ? $_GET['query'] : '';

    $append = " WHERE (month(created_at) = $month OR $month=0) AND (YEAR(created_at) = $year OR $year = 0) ";
    if(strlen($query) > 0)
    {
        $append .= "AND (nome LIKE '%$query%' OR email LIKE '%$query%' OR telefone LIKE '%$query%' OR cidade LIKE '%$query%' OR estado LIKE '%$query%' OR teste LIKE '%$query%')" ;
    }

    $sql_search_candidates = "SELECT * FROM candidatos $append ORDER BY id DESC LIMIT 25 OFFSET $offset";
    $statement = mysqli_query(conexao(), $sql_search_candidates);

    $sql_search_pages = "SELECT * FROM candidatos";

    $sql_total_rows = mysqli_query(conexao(), $sql_search_pages);
    $registros = 0;
	$total_registros = mysqli_num_rows($sql_total_rows);
	$total_paginas = ceil($total_registros / 25); 

    $current_year = date("Y");

    print($sql_search_candidates);
?>
<div class="span9" >     
                
                <div class="row-fluid pull">
                <h2 class="page-header" style="text-align: left;">Candidatos Cadastrados&nbsp;
                <!-- <a href="dados_eventos.php?id=cadastho" class="btn btn-success">Cadasthar</a> -->
            </h2>
            <form method="GET">
                    <div class="row-fluid pull">
                        <div class="span2">                             
                            <select name="month">
                                <option value="0" <?php echo 0 == $month ? "selected='selected'" : ''; ?>>Todos</option>
                                <option value="1" <?php echo 1 == $month ? "selected='selected'" : ''; ?>>Janeiro</option>
                                <option value="2" <?php echo 2 == $month ? "selected='selected'" : ''; ?>>Fevereiro</option>
                                <option value="3" <?php echo 3 == $month ? "selected='selected'" : ''; ?>>Março</option>
                                <option value="4" <?php echo 4 == $month ? "selected='selected'" : ''; ?>>Abril</option>
                                <option value="5" <?php echo 5 == $month ? "selected='selected'" : ''; ?>>Maio</option>
                                <option value="6" <?php echo 6 == $month ? "selected='selected'" : ''; ?>>Junho</option>
                                <option value="7" <?php echo 7 == $month ? "selected='selected'" : ''; ?>>Julho</option>
                                <option value="8" <?php echo 8 == $month ? "selected='selected'" : ''; ?>>Agosto</option>
                                <option value="9" <?php echo 9 == $month ? "selected='selected'" : ''; ?>>Setembro</option>
                                <option value="10" <?php echo 10 == $month ? "selected='selected'" : ''; ?>>Outubro</option>
                                <option value="11" <?php echo 11 == $month ? "selected='selected'" : ''; ?>>Novembro</option>
                                <option value="12" <?php echo 12 == $month ? "selected='selected'" : ''; ?>>Dezembro</option>
                            </select>
                        </div>
                        <div class="span2">                             
                            <select name="year">
                                <option value="0">Todos</option>
                                <?php for($i = 2010; $i <= $current_year; $i++){ ?>
                                    <option value="<?php echo $i; ?>" selected="<?php echo $i == $year ? 'selected' : ''; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>    
                        </div>
                        <div class="span2">                             
                            <input type="text" name="query" value="<?php echo $query !== 0 ? $query : ''; ?>" class="" style="height: 30px;" placeholder="Pesquisar" />
                            
                        </div>
                        <div class="span2">                             
                            <button type="submit" class="btn btn-primary btn-block">Pesquisar</button>
                        </div>

                        <div class="span4">                                                      
                            <a href="export/listagem_candidatos.php?month=<?php echo $month; ?>&year=<?php echo $year; ?>&query=<?php echo $query; ?>" class="btn btn-success">Exportar (Excel)</a>
                            <!--<button onclick="ExportarConsultaPdf()" class="btn btn-danger">Exportar (PDF)</button> -->
                        </div>
                    </div>
                </form>
<!-- forms vão aqui -->
<!-- forms vão aqui -->

<div class="block"></div>

<div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-hover">
						              <thead>
                                          <th>#</th>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>Escolaridade</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Carta de Apresentação</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th></th>
                                      </thead>
                                      <tbody>
                                            <?php 
                                            $registros = 1;
                                            while($array = mysqli_fetch_array($statement)){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo utf8_decode($registros); ?></td>
                                                    <td><?php echo utf8_encode($array['Nome']); ?></td>
                                                    <td><?php echo utf8_encode($array['Sobrenome']); ?></td>
                                                    <td><?php echo utf8_encode($array['Escolaridade']); ?></td>
                                                    <td><?php echo utf8_encode($array['Cidade']); ?></td>
                                                    <td><?php echo utf8_encode($array['Estado']); ?></td>
                                                    <td><?php echo utf8_encode($array['Carta_De_Apresentação']); ?></td>
                                                    <td><?php echo utf8_encode($array['Email']); ?></td>
                                                    <td><?php echo utf8_encode($array['Telefone']); ?></td>
                                                    <td><td><a class="btn btn-primary" onClick="VerArquivo('<?php echo '../cvs/'.$array['Nome'].' '.$array['Sobrenome'].'/'.$array['CV']; ?>')"><i class="fa fa-pdf"></i> Ver</a></td></td>
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
        </script>

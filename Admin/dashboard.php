<?php 
    include "cabecalho.php"; 

    $sql_command_papo_newsletter = "SELECT * FROM vw_bloco_papo_justo_newsletter";

    $social = $_GET['social'];
    
    $sql_bloco_facebook = "call proc_bloco_rede_social('facebook.com')";
    $sql_bloco_linkedin = "call proc_bloco_rede_social('linkedin.com')";
    $sql_bloco_instagram = "call proc_bloco_rede_social('instagram.com')";
    $sql_bloco_newsletter = "call proc_bloco_rede_social('web')";

    $sql_acontecimentos = "SELECT * FROM vw_ultimos_acontecimentos ORDER BY data_cadastro DESC LIMIT 10";

    $statement_bloco_facebook = mysqli_query(conexao(), $sql_bloco_facebook);
    $statement_bloco_linkedin = mysqli_query(conexao(), $sql_bloco_linkedin);
    $statement_bloco_instagram = mysqli_query(conexao(), $sql_bloco_instagram);
    $statement_bloco_newsletter = mysqli_query(conexao(), $sql_bloco_newsletter);

    $statement = mysqli_query(conexao(), $sql_command_papo_newsletter);
    $array_data_papo_justo = mysqli_fetch_array($statement);

    $statement_acontecimentos = mysqli_query(conexao(), $sql_acontecimentos);
    //$array_acontecimentos = mysqli_fetch_array($statement_acontecimentos);
   
?>
<style>
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.pace-inactive {
  display: none;
}

.pace .pace-progress {
  background: #2299dd;
  position: fixed;
  z-index: 2000;
  top: 0;
  right: 100%;
  width: 100%;
  height: 2px;
}

</style>

<input type="hidden" value="<?php print($_GET['social']) ?>" name="social_id" id="social_id" />

<div class="span9">
    <div class="row-fluid pull">        
        <div class="span8">
            <div class="block">
                <!-- <a class="btn btn-success" href="export/charts_dashboard.php">Exportar Relatório</a> -->

                <h3 class="text-center">Leads</h3>

                <form class="form-inline text-center" method="GET" action="">
                    <!-- <label for="rad_justa_mais" class="radio"><input value="justa-mais-tef.html" id="page" name="page" type="radio" style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Justa Mais</label>
                    <label for="rad_credito_justo"><input name="page" value="credito-justo.html" id="page" type="radio" style="text-align: right;  clear: both; float:left;  margin-right:5px;"/>Crédito Justo</label>
                    <label for="rad_maquininhas"><input name="page" value="lpmaquininhas.html" id="page" type="radio"  style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Maquininhas</label>
                    <label for="rad_justos"><input name="page" value="seja-um-justo.html" id="page" type="radio"  style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Justo</label>
                    <label for="rad_justos"><input name="page" value="" id="page" type="radio"  style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Todos</label> -->

                    <!-- <label for="rad_newsletter" class="radio"><input <?php print($social === 'newsletter' ? 'checked' : 'nochecked'); ?> value="newsletter" id="social" name="social" type="radio" style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Newsletter</label>
                    <label for="rad_facebook"><input <?php print($social === 'facebook.com' ? 'checked' : 'nochecked'); ?> name="social" value="facebook.com" id="social" type="radio" style="text-align: right;  clear: both; float:left;  margin-right:5px;"/>Facebook</label>
                    <label for="rad_instagram"><input <?php print($social === 'instagram.com' ? 'checked' : 'nochecked'); ?> name="social" value="instagram.com" id="social" type="radio"  style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Instagram</label>
                    <label for="rad_linkedin"><input <?php print($social === 'linkedin.com' ? 'checked' : 'nochecked'); ?> name="social" value="linkedin.com" id="social" type="radio"  style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Linkedin</label>
                    <label for="rad_qr_code"><input <?php print($social === 'qr_code' ? 'checked' : 'nochecked'); ?> name="social" value="qr_code" id="social" type="radio"  style="text-align: right;  clear: both; float:left;  margin-right:5px;"/> Qr Code</label>

                    <button type="submit" class="btn btn-success">Filtrar</button> -->
                </form>
               
                <canvas class="chart" id="chart" name="chart"></canvas>
            </div>

            <div class="block">
                <h3 class="text-center">Novidades</h3>
                <table class="table">
                    <tbody>
                    <?php if($statement_acontecimentos->num_rows == 0) { ?>
                        <tr>
                            <td>Nenhuma novidade hoje</td>
                        </tr>
                    <?php }else{?>

                    <?php while ($row = mysqli_fetch_array($statement_acontecimentos)){ ?>
                        <tr><td><?php print($row['nome'].' acabou de se registrar em '. str_replace('.html', '', $row['cadastro'])); ?></td></tr>
                    <?php } }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="span4">
            <div class="block">
                <h3 class="text-center">Origem</h3>
                <table class="table table-sources">
                    <thead>
                        <th></th>
                        <th>Hoje</th>
                        <th>Semana</th>
                        <th>Mês</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="../images/icon_facebook.png" /></td>
                            <?php if($statement_bloco_facebook->num_rows > 0){
                                    while ($row = mysqli_fetch_array($statement_bloco_facebook)){ ?>
                                <td><?php print($row['today']); ?></td>
                            <?php } 
                                }else{
                                    ?>
                                    <td>0</td><td>0</td><td>0</td><td>0</td>
                                    <?php
                                }
                             ?>
                        </tr>
                        <tr>
                            <td><img src="../images/instagram_admin.png" /></td>
                            <?php if($statement_bloco_instagram->num_rows > 0){ while ($row = mysqli_fetch_array($statement_bloco_instagram)){ ?>
                                <td><?php print($row['today']); ?></td>
                                <?php } 
                                }else{
                                    ?>
                                    <td>0</td><td>0</td><td>0</td><td>0</td>
                                    <?php
                                }
                             ?>
                        </tr>
                        <tr>
                            <td><img src="../images/linkedin_admin.svg" style="height: 32px;"></td>
                            <?php if($statement_bloco_linkedin->num_rows > 0) { while ($row = mysqli_fetch_array($statement_bloco_linkedin)){ ?>
                                <td><?php print($row['today']); ?></td>
                                <?php } 
                                }else{
                                    ?>
                                    <td>0</td><td>0</td><td>0</td><td>0</td>
                                    <?php
                                }
                             ?>
                        </tr>
                        <tr>
                            <td><img src="../images/envelope_admin.png" /></td>
                            <?php if($statement_bloco_newsletter->num_rows > 0) { while ($row = mysqli_fetch_array($statement_bloco_newsletter)){ ?>
                                <td><?php print($row['today']); ?></td>
                                <?php } 
                                }else{
                                    ?>
                                    <td>0</td><td>0</td><td>0</td><td>0</td>
                                    <?php
                                }
                             ?>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="block">
                <table class="table table-readers">
                    <thead>
                        <th colspan="3">
                            Leitores Papo Justo
                        </th>
                        <th colspan="3">
                            Originados de Newsletter
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SEM</td>
                            <td>MES</td>
                            <td>TOT</td>
                            <td>SEM</td>
                            <td>MES</td>
                            <td>TOT</td>
                        </tr>
                        <tr>
                            <td><?php echo !empty($array_data_papo_justo['leitores_papo_justo_sem']) ? $array_data_papo_justo['leitores_papo_justo_sem'] : '0'; ?></td>
                            <td><?php echo !empty($array_data_papo_justo['leitores_papo_justo_mes']) ? $array_data_papo_justo['leitores_papo_justo_mes'] : '0'; ?></td>
                            <td><?php echo !empty($array_data_papo_justo['leitores_papo_justo_total']) ? $array_data_papo_justo['leitores_papo_justo_total'] : '0'; ?></td>
                            <td><?php echo !empty($array_data_papo_justo['leitores_newsletter_sem']) ? $array_data_papo_justo['leitores_newsletter_sem'] :  '0'; ?></td>
                            <td><?php echo !empty($array_data_papo_justo['leitores_newsletter_mes']) ? $array_data_papo_justo['leitores_newsletter_mes'] : '0'; ?></td>
                            <td><?php echo !empty($array_data_papo_justo['leitores_newsletter_total']) ? $array_data_papo_justo['leitores_newsletter_total'] : '0'; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="block">
                <div class="dropdown btn-block" style="margin: 20px 0px;">
                <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span id="dropdown_title">Total</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#" onclick="get_bloco_leads('week', 'Essa semana')">Essa semana</a></li>
                    <li><a href="#" onclick="get_bloco_leads('month', 'Mes')">Esse Mês</a></li>
                    <li><a href="#" onclick="get_bloco_leads('year', 'Ano')">Esse Ano</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#" onclick="get_bloco_leads('total', 'Total')">Total</a></li>
                </ul>
                </div>
                
                <table class="table table-leads">
                    <tr>
                        <td>
                            <p>Total de Leads</p>
                            <h1 id="h1_total_leads">XXX</h1>
                        </td>
                        <td>
                            <p>Novos Justos</p>
                            <h1 id="h1_novos_justos">XXX</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Newsletter</p>
                            <h1 id="h1_newsletter">XXX</h1>
                        </td>
                        <td>
                            <p>Maquininha</p>
                            <h1 id="h1_maquininhas">XXX</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Crédito Justo</p>
                            <h1 id="h1_credito_justo">XXX</h1>
                        </td>
                        <td>
                            <p>Justa Mais</p>
                            <h1 id="h1_justa_mais_tef">XXX</h1>
                        </td>
                    </tr>
                </table>
                
            </div>
                
            </div>
    </div>
</div>  


<script src="assets/scripts.js"></script>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" type="text/javascript"></script>
<script src="assets/app.js" type="text/javascript"></script>
<script src="assets/pace.min.js" type="text/javascript"></script>
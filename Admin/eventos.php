<?php include "cabecalho.php"; 

	
	if(isset($_POST['descricao'])) {
	$descricao = utf8_decode($_POST['descricao']);
	$resumo = utf8_decode($_POST['resumo']);
	$date_evento = explode("/", $_POST['data_evento']);
	$date_evento = $date_evento[2]."-".$date_evento[1]."-".$date_evento[0];
	$insert = mysqli_query(Conexao(), "Insert into eventos (descricao, unidade,resumo, data_evento, data_cadastro, url, situacao) 
												values ('".$descricao."', '".$_POST['unidade']."', '".$resumo."','".$date_evento."', '".date('Y-m-d')."', '".$_POST['url']."', 1)"); 
	
	$selExistente = mysqli_query(conexao(),"Select id from eventos where descricao = '".$descricao."' && data_cadastro = '".date('Y-m-d')."' order by data_cadastro Desc")or die(mysqli_error());
	$arrayExistente = mysqli_fetch_array($selExistente);
	if($insert){echo "<script>alert('Evento cadastrado com sucesso!'); window.location='dados_eventos.php?id=".$arrayExistente[0]."';</script>";} 	
	else{echo "<script>alert('Erro ao alterar. Tente novamente.'); window.location='listagem_eventos.php';</script>";}
			
 
 	}//FECHA POST

	
?>	
<script src="assets/scripts.js"></script>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

        <div class="span9" >

        <div class="container-fluid">

               <h2 class="page-header">Cadastrar Eventos</h2>
         		<div class="row">
                        <div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Aviso</h4>
                        	Ao criar o evento voc&ecirc; ser&aacute; redirecionado para inserir as imagens.</div>             		 
              		 <div class="span5">
                 		 <form method="post" enctype="multipart/form-data"  action="">
                                      	
                                        <div class="form-group">
                                            <label>Descri&ccedil;&atilde;o do Evento</label>
											<input type="text" placeholder="Evento" maxlength="50" style="min-width: 350px;" name="descricao" required value="">	
                                        </div>
                                        <div class="form-group">
                                            <label>Resumo(Opcional)</label>
											<input type="text" placeholder="Resumo do Evento" maxlength="100" style="min-width: 350px;" name="resumo"  value="">	
                                        </div>
                                        <div class="form-group">
                                            <label>V&iacute;deo(Opcional)</label>
											<input type="text" placeholder="Url" maxlength="300" style="min-width: 300px;" name="url"  value="">	
                                        </div>                                                                                     
                                        <div class="form-group">
                                            <label>Data do Evento</label>
											<input type="text" placeholder="Data Evento" onKeyUp="mascaraData(this)"  maxlength="50" width="100" size="100" name="data_evento" required value="">	                                            
					    				</div>   
						                <div class="form-group">
                                            <label>Unidade</label>
												<select name="unidade" id="unidade" class="form-control">
													<option value="">Selecione a Unidade</option>
													<option value="eventotiete">Unidade Tiet&ecirc;</option>
													<option value="eventocerquilho">Unidade Cerquilho</option>
													<option value="eventojunior">Unidade J&uacute;nior</option>
												</select>
                                        	</div>
											<div class="form-group">
												<button type="submit" class="btn btn-success">Cadastrar</button>
											</div>
									</div>
								</div>         	
							</div>
                  		</form>		
							        
				</div>         

<script>
function mascaraData(val) {
  var pass = val.value;
  var expr = /[0123456789]/;

  for (i = 0; i < pass.length; i++) {
    // charAt -> retorna o caractere posicionado no índice especificado
    var lchar = val.value.charAt(i);
    var nchar = val.value.charAt(i + 1);

    if (i == 0) {
      // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
      // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
      // instStr.search(expReg);
      if ((lchar.search(expr) != 0) || (lchar > 3)) {
        val.value = "";
      }

    } else if (i == 1) {

      if (lchar.search(expr) != 0) {
        // substring(indice1,indice2)
        // indice1, indice2 -> será usado para delimitar a string
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }

    } else if (i == 4) {

      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }
    }

    if (i >= 6) {
      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
      }
    }
  }

  if (pass.length > 10)
    val.value = val.value.substring(0, 10);
  return true;
}
</script>	    

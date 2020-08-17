<?php 
	    $id_sessao = $_COOKIE['id_sessao'];
		$pagina = $_POST['pagina']; include "conexao.php";
		
		$select = mysqli_query($conecta, "Select * from usuarios where id_usuario = ".$id_sessao);
		$array = mysqli_fetch_array($select);
		$administrador =  $array['musuarios'];		
		if($pagina=="tela_cadastra_usuarios"){ ?>

            <div class="main col-12">

              <h1 class="page-title" id="tituloPagina">Usu&aacute;rios</h1>
              <div class="space-bottom"></div>
              <fieldset>
                <legend id="legenda">Cadastro de Usu&aacute;rio</legend>
                <form class="form-horizontal" id="form-cadastro">
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title">Informa&ccedil;&atilde;o Pessoal</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Nome<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="nome" name="nome" value="" required placeholder="Nome">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingLastName" class="col-lg-2 control-label text-lg-right col-form-label">E-mail<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="email" name="email" value="" required placeholder="E-mail">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Login<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="login" name="login" value="<?php $randum = rand(0,9);
						  			$randois = rand(0,9);
									$rantres = rand(0,9);
									$ranquatro = rand(0,9);
									$rancinco = rand(0,9);
									$ranseis = rand(0,9);  
									$ransete= rand(0,9);
									$ranoito = rand(0,9);
									$total = $randum.$randois.$rantres.$ranquatro.$rancinco.$ranseis.$ransete.$ranoito;
									echo trim($total);
						?>" required placeholder="Login">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Senha<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="senha" value="<?  $CaracteresAceitos = '0123456789';
$max = strlen($CaracteresAceitos)-1;
$password = null;
	for($i=0; $i < 6; $i++) {
	$password .= $CaracteresAceitos{mt_rand(0, $max)};
	} echo $password; ?>" name="senha" required placeholder="Senha">
                        </div>
                      </div>    
                    </div>
                  </div>
                  <div class="space"></div>
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title mt-5 mt-lg-0">Permiss&otilde;es</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                  
                      <div class="form-group row">
                        <label class="col-lg-2 control-label text-lg-right col-form-label">N&iacute;vel<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <select class="form-control" name="Fusuarios" id="Fusuarios" required>
                            <option value="">Selecione o tipo de Usu&aacute;rio</option>
                            <option value="1">Administrador</option>
                            <option value="0">Normal</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="space"></div>
                  	<input type="hidden" name="pagina" value="cadastra_usuario">
					<input type="submit" onClick="CadastrarUsuario()" class="btn btn-group btn-success" value="Cadastrar" >
                </form>
              </fieldset>
              <div class="text-right">  
                <a onClick="clique('lista_usuarios');" class="btn btn-group btn-default">Voltar para Listagem</a>
              </div>

            </div>
  



<?php } elseif($pagina=="cadastra_usuario"){
			
			$select = mysqli_query($conecta, "Select id_usuario from usuarios where nome = '".$_POST['nome']."' and login = '".$_POST['login']."'");
			if(mysqli_num_rows($select)>0){
			$array = mysqli_fetch_array($select);
			echo "existe|".$array['id_usuario'];
			}//IF EXISTIR
			else{
			$senha=openssl_encrypt($_POST['senha'],"AES-128-ECB",$password);
	  $insert_usuarios = mysqli_query($conecta, "INSERT INTO usuarios (id_usuario, nome, login, senha2, email, status, mclientes, mprodutos, musuarios,	mfinanceiro, mfornecedores) VALUES (NULL, '".$_POST['nome']."', '".$_POST['login']."', '".$senha."', '".$_POST['email']."', 'Ativo', '".$_POST['Fclientes']."', '".$_POST['Fprodutos']."', '".$_POST['Fusuarios']."', '".$_POST['Ffinanceiro']."', '".$_POST['Ffornecedores']."')");	
	  		if($insert_usuarios){
			$nome = $_POST['nome'];
			$email = $_POST['email'];	
			$login = $_POST['login'];
			$headers = "MIME-Version: 1.1\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: glasscolor@glasscolor.com.br\r\n"; // remetente
			$headers .= "Return-Path: glasscolor@glasscolor.com.br\r\n"; // return-path

			$senha2=openssl_decrypt($senha,"AES-128-ECB",$password);
			$texto = utf8_decode("Olá $nome, você foi cadastrado no sistema GlassColor.\r\n
			Para vizualizar os arquivos, acesse o site, clique no menu Acesso restrito e digite os dados abaixo:\r\n
			Login: $login\r\n
			Senha: $senha2\r\n

			\r\n
			Atenciosamente.");

			$envio = mail("$email", "Contato Site", "$texto", $headers);
			if($envio){echo "cadastrado|";} else{echo "erro_email|";}
				}
				
				
				
			}//IF NÃO EXISTIR
			
}elseif($pagina=="altera_usuario"){
			

			$senha=openssl_encrypt($_POST['senha'],"AES-128-ECB",$password);
	  $update_usuarios = mysqli_query($conecta, "update usuarios set nome = '".$_POST['nome']."', login = '".$_POST['login']."', senha2 = '".$senha."', email = '".$_POST['email']."', status = '".$_POST['situacao']."', musuarios = '".$_POST['Fusuarios']."' where id_usuario = ".$_POST['id_usuario']);	
	  		if($update_usuarios){
				echo "atualizado|".$administrador; 
				}
				else{echo "erro|".$administrador;}
				

}   elseif($pagina=="tela_altera_usuario"){ 
		 $select = mysqli_query($conecta, "Select * from usuarios where id_usuario = ".$_POST['id_usuario']);
		 $array = mysqli_fetch_array($select);
?>

            <div class="main col-12">

              <h1 class="page-title" id="tituloPagina">Usu&aacute;rios</h1>
              <div class="space-bottom"></div>
              <fieldset>
                <legend id="legenda">Manuten&ccedil;&atilde;o de Usu&aacute;rio</legend>
                <form class="form-horizontal" id="form-update">
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title">Informa&ccedil;&atilde;o Pessoal</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Nome<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $array['nome']; ?>" required placeholder="Nome">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingLastName" class="col-lg-2 control-label text-lg-right col-form-label">E-mail<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="email" name="email" value="<?php echo $array['email']; ?>" required placeholder="E-mail">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Login<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="login" name="login" value="<?php echo $array['login']; ?>" required placeholder="Login">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Situa&ccedil;&atilde;o<small class="text-default">*</small></label>
                        <div class="col-lg-10">
						  <select name="situacao" class="form-control" >
							  <option value="">Selecione a situa&ccedil;&atilde;o</option>
							  <option value="Bloqueado" <?php if($array['status'] == 'Bloqueado') echo "selected='selected'"; ?>>Bloqueado</option>
							  <option value="Ativo" <?php if($array['status'] == 'Ativo') echo "selected='selected'"; ?>>Ativo</option>
						  </select>	
                        </div>
                      </div> 						
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Senha<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="senha" autocomplete="off" value="<?php $senha2 = (string)openssl_decrypt($array['senha2'],"AES-128-ECB",$password); echo $senha2; ?>" name="senha" required placeholder="Senha">
                        </div>
                      </div>    
                    </div>
                  </div>
                  <div class="space"></div>
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title mt-5 mt-lg-0">Permiss&otilde;es</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                  
                      <div class="form-group row">
                        <label class="col-lg-2 control-label text-lg-right col-form-label">N&iacute;vel<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <select class="form-control" name="Fusuarios" id="Fusuarios" required>
                            <option value="">Selecione o tipo de Usu&aacute;rio</option>
                            <option value="1" <?php if($array['musuarios']==1) { echo "selected='selected'"; } ?>>Administrador</option>
                            <option value="0" <?php if($array['musuarios']==0) { echo "selected='selected'"; } ?>>Normal</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="space"></div>
                  	<input type="hidden" name="pagina" value="altera_usuario">
                  	<input type="hidden" name="id_usuario" value="<?php echo $_POST['id_usuario']; ?>">
					<input type="submit" onClick="AlteraUsuario()" class="btn btn-group btn-success" value="Alterar" >
                </form>
              </fieldset>
              <div class="text-right" >  
                <a onClick="clique('lista_usuarios');" class="btn btn-group btn-default">Voltar para Listagem</a>
              </div>

            </div>






<?php } elseif($pagina=="lista_usuarios"){ 
			
			if($_POST['pesquisa'] != "") $pesquisa = " && (nome like '%".$_POST['pesquisa']."%' or email like '%".$_POST['pesquisa']."%' or login like '%".$_POST['pesquisa']."%') ";	else $pesquisa = "";
			$select = mysqli_query($conecta, "Select * from usuarios where id_usuario <> 0 ".$pesquisa." order by nome asc");
			if(mysqli_num_rows($select) > 0 and $administrador == 1){?>

<table style="width:100%">
					<thead>
					  <tr>
						<!--<th scope="col">C&oacute;digo</th>-->
						<th scope="col">Nome</th>
						<th scope="col">Login</th>
						<th scope="col">E-mail</th>	
						<th scope="col">Senha</th>						
						<th scope="col">Situa&ccedil;&atilde;o</th>						
						<th scope="col">Ver</th>
						<th scope="col">Excluir</th>
					 </tr>
					</thead>
				<tbody>	
<?php 		
			while($array = mysqli_fetch_array($select)){
					$senha=openssl_decrypt($array['senha2'],"AES-128-ECB",$password);
?>
					  <tr>
						<!--<td  data-label="C&oacute;digo"><?php //if($array['id_usuario'] != "") echo $array['id_usuario']; else echo "&nbsp"; ?></td>-->
						<td  data-label="Nome"><?php if($array['nome'] != "") echo $array['nome']; else echo "&nbsp"; ?></td>
						<td  data-label="Login"><?php if($array['login']!="") echo $array['login']; else echo "&nbsp"; ?></td>
						<td  data-label="E-mail" title="<?php echo $array['email']; ?>"><?php if($array['email']!="") if(strlen($array['email']) > 30) echo substr($array['email'], 0, 25)."..."; else{echo $array['email'];} else echo "&nbsp"; ?></td>
						<td  data-label="Senha" align="center"><?php if($senha!="") echo $senha; else echo "&nbsp"; ?></td>
						<td  data-label="Situa&ccedil;&atilde;o"><?php echo $array['status']; ?></td>						
						<td  data-label="Ver"><input type="button" class="btn btn-primary" onClick="clique_altera('tela_altera_usuario', <?php echo $array['id_usuario'] ?>)" value="Ver"></td>
						<td  data-label="Excluir"><input type="button" class="btn btn-info" onClick="remove_usuarios(<?php echo $array['id_usuario'] ?>)" value=" X "></td>  
					  </tr>
<?php $registros++;} ?>	
							  
					</tbody>
				  </table>


<?php } //if usuarios > 0
			else{
			
			?>
			
	
<table style="width:100%">
					<thead>
					  <tr>
						<th scope="col">Descri&ccedil;&atilde;o</th>
						<th scope="col">Pasta Origem</th>
						<th scope="col">Siua&ccedil;&atilde;o</th>						
						<th scope="col">Ver</th>
					 </tr>
					</thead>
				<tbody>	
<?php 		if($_POST['pesquisa'] != "") $pesquisa = " && (descricao like '%".$_POST['pesquisa']."%' or pasta1 like '%".$_POST['pesquisa']."%' or pasta2 like '%".$_POST['pesquisa']."%' or pasta3 like '%".$_POST['pesquisa']."%') ";	else $pesquisa = "";
			$select = mysqli_query($conecta, "Select * from arquivos_listar where id <> 0 ".$pesquisa." order by pasta1 ASC");
			while($array = mysqli_fetch_array($select)){
			$pasta1 = $array['pasta1'];
			$pasta2 = $array['pasta2'];
			$pasta3 = $array['pasta3'];	
	
   			$path = "http://www.glasscolor.com.br/nav/admin/arquivos_new/".utf8_encode($array['link']);
			
			 $controle = $path;	$escrita = "Ver";
					
?>
					  <tr>
						<td  data-label="Descri&ccedil;&atilde;o"><?php if($array['descricao'] != "") echo $array['descricao']; else echo "&nbsp"; ?></td>
						<td  data-label="Pasta Origem"><?php if($array['pasta1']!="") echo $array['pasta1']; else echo "&nbsp"; ?></td>
						<td  data-label="Situa&ccedil;&atilde;o"><?php echo $array['situacao']; ?></td>						
						<td  data-label="Ver">
						<input type="button" class="btn btn-primary" onClick="verPasta('<?php echo $pasta1 ?>', '<?php echo $pasta2 ?>', '<?php echo $pasta3 ?>', '<?php echo $controle ?>')" value="<?php echo $escrita ?>"></td>
					  </tr>
<?php $registros++;} ?>	
							  
					</tbody>
				  </table>		
			
<?php			}



} elseif($pagina=="lista_arquivos"){ 
			$pasta1 = $_POST['pasta1']; 
			$pasta2 = $_POST['pasta2'];
			$pasta3 = $_POST['pasta3'];	
		    ?>
		    <legend style="color: #007bff">
		    <?php
			if($pasta1 != "" and $pasta2 =="" and $pasta3 == "" ) {$pesquisa = " && pasta1 = '".$_POST['pasta1']."'";
			$select_pastas = mysqli_query($conecta, "Select id from arquivos_listar where id <> 0 ".$pesquisa." GROUP BY pasta2"); $quantidade =  mysqli_num_rows($select_pastas);
			if($quantidade >  1) {$order = "GROUP by pasta2 ASC";} else {$order = "ORDER by descricao ASC";} $medida = "pasta2";   ?> <button class="btn btn-default" onClick="verPasta('', '', '', '')"><?php echo "Raiz"; ?></button> <?php }		
			
			elseif ($pasta1 != "" and $pasta2 !=""  and $pasta3 == "" ) {
			$pesquisa = " && pasta1 = '".$_POST['pasta1']."'  && pasta2 = '".$_POST['pasta2']."'";
			$select_pastas = mysqli_query($conecta, "Select id from arquivos_listar where id <> 0 ".$pesquisa." GROUP BY pasta3"); $quantidade =  mysqli_num_rows($select_pastas);
			if($quantidade >  1) {$order = "GROUP by pasta2 ASC";} else {$order = "ORDER by descricao ASC";}
			$medida = "pasta2"; ?><button  class="btn btn-default" onClick="verPasta('', '', '', '')"><?php echo "Raiz"; ?></button> > <button  class="btn btn-default" onClick="verPasta('<?php echo $pasta1; ?>', '', '', '')"><?php echo $pasta1; ?></button> <?php  }		
			 
			elseif ($pasta1 != "" and $pasta2 !="" and $pasta3 != "") {
			
			$pesquisa = " && pasta1 = '".$_POST['pasta1']."'  && pasta2 = '".$_POST['pasta2']."' && pasta3 = '".$_POST['pasta3']."'";  $medida = "pasta3"; 
			$select_pastas = mysqli_query($conecta, "Select id from arquivos_listar where id <> 0 ".$pesquisa." GROUP BY pasta3"); $quantidade =  mysqli_num_rows($select_pastas);
			if($quantidade >  1) {$order = "GROUP by pasta3 ASC";} else {$order = "ORDER by descricao ASC"; }?> 
			
			<button  class="btn btn-default" onClick="verPasta('', '', '', '')"><?php echo "Raiz"; ?></button> > <button  class="btn btn-default" onClick="verPasta('<?php echo $pasta1; ?>', '', '', '')"><?php echo $pasta1; ?></button> > <button onClick="verPasta('<?php echo $pasta2; ?>', '', '', '')"  class="btn btn-default "><?php echo $pasta2; ?></button> <?php  }			
			else {
			$pesquisa = ""; 
			$select_pastas = mysqli_query($conecta, "Select id from arquivos_listar where id <> 0 ".$pesquisa." GROUP BY pasta2"); $quantidade =  mysqli_num_rows($select_pastas);
			$medida = "pasta1"; $order = "GROUP by pasta1 ASC";  }			
			
	?></legend>
 	
<table style="width:100%">
					<thead>
					  <tr>
						<th scope="col">Descri&ccedil;&atilde;o</th>
						<th scope="col">Pasta Origem</th>
						<th scope="col">Situa&ccedil;&atilde;o</th>						
						<th scope="col">Ver</th>
					 </tr>
					</thead>
				<tbody>	
<?php 		
			

			$select = mysqli_query($conecta, "Select * from arquivos_listar where id <> 0 ".$pesquisa." ".$order);
			
			while($array = mysqli_fetch_array($select)){
			$pasta1 = $array['pasta1'];
			$pasta2 = $array['pasta2'];
			$pasta3 = $array['pasta3'];	
			if($_POST['pasta1']==""){$pasta2 = ""; $pasta3 = "";}
			
   			$path = "http://www.glasscolor.com.br/nav/admin/arquivos_new/".$array['link'];
			if($quantidade > 1){
			 $controle = ""; $escrita = "Avan&ccedil;ar";
			 
			}else{
			 $controle = $path;	$escrita = "Ver";
			}
?>
				  	 	
					  <tr>
						<td  data-label="Descri&ccedil;&atilde;o"><?php if($quantidade < 2) echo $array['descricao']; elseif($quantidade >= 2) echo $array[$medida];  ?></td>
						<td  data-label="Pasta Origem"><?php if(utf8_encode($array[$medida]) != "") echo $array[$medida]; else echo "Raiz"; ?></td>
						<td  data-label="Situa&ccedil;&atilde;o"><?php echo $array['situacao']; ?></td>						
						<td  data-label="Ver">
						<input type="button" class="btn btn-primary" onClick="verPasta('<?php echo $pasta1 ?>', '<?php echo $pasta2 ?>', '<?php echo $pasta3 ?>', '<?php echo $controle ?>')" value="<?php echo $escrita ?>"></td>
					  </tr>
<?php $registros++;} ?>	
							  
					</tbody>
				  </table>


<?php } elseif($pagina=="cadastra_arquivos"){ $path = "../arquivos_new/";?>

	            <div class="main col-12">

              <h1 class="page-title" id="tituloPagina">Arquivos</h1>
              <div class="space-bottom"></div>
              <fieldset>
                <legend id="legenda">Cadastro de Arquivos</legend>
                <form class="form-horizontal" id="form-arquivo" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title">Local das Pastas</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Pasta 1<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <select name="pasta1"  class="form-control"  id="pasta1" onChange="buscaPasta('pasta2', this.id)">
                          <option value="">Selecione uma pasta</option>
<?php  						$select = mysqli_query($conecta, "Select pasta1 from arquivos_listar where id <> 0 Group By Pasta1" );
							while($array_pasta = mysqli_fetch_array($select)){?>
 							<option value="<?php echo $array_pasta['pasta1']; ?>"><?php echo  $array_pasta['pasta1']; ?></option>										  
<?php 	} ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingLastName" class="col-lg-2 control-label text-lg-right col-form-label">Pasta 2<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                           <select name="pasta2"  class="form-control"  id="pasta2" onChange="buscaPasta('pasta3', this.id)">
                          <option value="">Selecione uma pasta</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Pasta 3<small class="text-default">*</small></label>
                        <div class="col-lg-10">
							<select name="pasta3"  class="form-control"  id="pasta3" >
                          <option value="">Selecione uma pasta</option>
                          </select>                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="space"></div>
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title mt-5 mt-lg-0">Arquivo</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                  
                      <div class="form-group row">
                        <label class="col-lg-2 control-label text-lg-right col-form-label">N&iacute;vel<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="file" required name="arquivo" id="arquivo" placeholder="">
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="space"></div>
                  	<input type="hidden" name="pagina" value="cadastrar_arquivos">
					<input type="submit" onClick="CadastraArquivo()" class="btn btn-group btn-success" value="Cadastrar" >
                </form>
              </fieldset>
              <div class="text-right" >  
                <a onClick="clique('lista_administar')" class="btn btn-group btn-default">Voltar para Listagem</a>
              </div>

            </div>


<?php } elseif($pagina=="pesquisaPasta"){ 
		
		if($_POST['pasta1'] != "") {$path .= " && pasta1 = '".$_POST['pasta1']."'"; $pasta = 'pasta2';}
		if($_POST['pasta2'] != "") {$path .=  " && pasta2 = '".$_POST['pasta2']."'"; $pasta = 'pasta3';}
		
		?>
		 <option value="">Selecione uma pasta</option>
<?php  	$select = mysqli_query($conecta, "Select ".$pasta." from arquivos_listar where id <> 0 && ".$pasta." <> '' ".$path ." GROUP BY ".$pasta );
		while($array_pasta = mysqli_fetch_array($select)){?>
 			<option value="<?php echo $array_pasta[0]; ?>"><?php echo $array_pasta[0]; ?> </option>										  
			<?php 	 
					}
			?>
			<option value="vazio">Na pasta acima</option>
	



<?php } elseif($pagina=="cadastrar_arquivos"){ 
			if($_FILES['arquivo']['type'] != "application/pdf"){
			echo "Somente arquivos PDF s&aatilde;o permitidos.";
			}else{
			$select = mysqli_query($conecta, "Select id from arquivos_listar where descricao = '".$_FILES['arquivo']['name']."' and pasta1 = '".str_replace("vazio", "", $_POST['pasta1'])."' and pasta2 = '".str_replace("vazio", "", $_POST['pasta2'])."' and pasta3 = '".str_replace("vazio", "", $_POST['pasta3'])."'");
				if(mysqli_num_rows($select) > 0){
				 echo "O Arquivo {$_FILES['arquivo']['name']} já existe!!";
				}
				else{
			$path = "../arquivos_new";
						
			if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $path."/".$_FILES['arquivo']['name'])) {
				
				$insert = mysqli_query($conecta, "Insert into arquivos_listar (descricao, data, link, pasta1, pasta2, pasta3, situacao)  VALUES ('".$_FILES['arquivo']['name']."', '".date('Y-m-d')."', '".$_FILES['arquivo']['name']."', '".str_replace("vazio", "", $_POST['pasta1'])."', '".str_replace("vazio", "", $_POST['pasta2'])."', '".str_replace("vazio", "", $_POST['pasta3'])."', 'Ativo')");
				if($insert) {echo "Arquivo {$_FILES['arquivo']['name']} recebido com sucesso!!";}
				
				 else {
				echo "Falha ao fazer upload!";
					}
				}
			}
	}
 } elseif($pagina=="remove_arquivos"){ 
			$path = "../arquivos_new";
			$select_atual = mysqli_query($conecta, "select pasta1, pasta2, pasta3, link from arquivos_listar where id =".$_POST['id']);
			$array_atual = mysqli_fetch_array($select_atual);

			$deleta = unlink($path."/".$array_atual['link']);
			
				
				$excluir = mysqli_query($conecta, "delete from arquivos_listar where id = ".$_POST['id']);
			if($excluir) {echo "Arquivo {$array_atual['link']} deletado com sucesso!!";
				}
				else{
			echo "Erro ao deletar o arquivo ".$path."/".$array_atual['link'].". Tente novamente.";
				}

			
 } elseif($pagina=="lista_administar"){ ?>
 
 <table style="width:100%">
					<thead>
					  <tr>
						<th scope="col">Descri&ccedil;&atilde;o</th>
						<th scope="col">Pasta 1</th>
						<th scope="col">Pasta 2</th>
						<th scope="col">Pasta 3</th>
						<th scope="col">Siua&ccedil;&atilde;o</th>						
						<th scope="col">Remover</th>
					 </tr>
					</thead>
				<tbody>	
<?php 		
			$select = mysqli_query($conecta, "Select * from arquivos_listar where id <> 0 ".$pesquisa." order by link, pasta1, pasta2, pasta3 ASC");
			while($array = mysqli_fetch_array($select)){
			$pasta1 = $array['pasta1'];
			$pasta2 = $array['pasta2'];
			$pasta3 = $array['pasta3'];	
	
   			$path = "../arquivos_new/". utf8_encode($array['link']);
			
			$controle = $path;	$escrita = "Ver";
					
?>
					  <tr>
						<td data-label="Descri&ccedil;&atilde;o"><?php if($array['descricao'] != "") echo $array['descricao']; else echo "&nbsp"; ?></td>
						<td data-label="Pasta 1"><?php if($array['pasta1']!="") echo $array['pasta1']; else echo "Vazia"; ?></td>
						<td data-label="Pasta 2"><?php if($array['pasta2']!="") echo $array['pasta2']; else echo "Vazia"; ?></td>
						<td data-label="Pasta 3"><?php if($array['pasta3']!="") echo $array['pasta3']; else echo "Vazia"; ?></td>
						<td data-label="Situa&ccedil;&atilde;o"><?php echo $array['situacao']; ?></td>						
						<td data-label="Remover">
						<input type="button" class="btn btn-primary" onClick="remove_arquivos('<?php echo $array['id']; ?>')" value="Remover">
						</td>						
					  </tr>
<?php $registros++;} ?>	
							  
					</tbody>
				  </table>




<?php } elseif($pagina=="verifica_admin"){
			echo $administrador;
			

} elseif($pagina=="logout"){

	setcookie('id_sessao');
	setcookie('nome');
	echo "Logout efetuado com sucesso!";

} elseif($pagina=="remove_usuarios"){
			$delete = mysqli_query($conecta, "DELETE from usuarios where id_usuario = ".$_POST['id_usuario']);
			if($delete){
				echo "Usuário removido com sucesso!";
			}else{
				echo "Falha ao remover, tente novamente por favor!";
			}
			
		}




?>


<?php   header('Content-Type: text/html; charset=utf-8');
	    
		function Data($data){
			$explode = explode("-", $data);
			$dia = $explode[2];
			$mes = $explode[1];
			$ano = $explode[0];
			switch ($mes){

			case 1: $mes = "Janeiro"; break;
			case 2: $mes = "Fevereiro"; break;
			case 3: $mes = "Mar&ccedil;o"; break;
			case 4: $mes = "Abril"; break;
			case 5: $mes = "Maio"; break;
			case 6: $mes = "Junho"; break;
			case 7: $mes = "Julho"; break;
			case 8: $mes = "Agosto"; break;
			case 9: $mes = "Setembro"; break;
			case 10: $mes = "Outubro"; break;
			case 11: $mes = "Novembro"; break;
			case 12: $mes = "Dezembro"; break;

			}
 			return $dia." de ".$mes." de ".$ano;
		}

		$pagina = $_POST['pagina']; include "conexao.php";
		
		if($pagina=="blog-justa.html"){ 
		if($_POST['filtro']!=""){
			$pesquisa_filtro = "&& conteudo.filtro = '".utf8_decode($_POST['filtro'])."'"; $limit = "";
		}else{
			$pesquisa_filtro = ""; $limit = "Limit 10 OFFSET 0";
		}
		$sql = mysqli_query($conecta, "SELECT conteudo.id as id_conteudo, conteudo.*, tconteudo.tipo from TB_conteudo as conteudo 
										INNER JOIN TB_tipos_conteudo as tconteudo ON conteudo.id_tipo_conteudo = tconteudo.id
										INNER JOIN TB_vinculo as vinculo ON vinculo.id_conteudo = conteudo.id
										INNER JOIN TB_pagina as pagina on pagina.id = vinculo.id_pagina
										INNER JOIN TB_append_conteudo ON TB_append_conteudo.vinculo_conteudo = conteudo.id
										WHERE conteudo.situacao = 1 && pagina.link = '".$_POST['pagina']."' ".$pesquisa_filtro."  GROUP BY TB_append_conteudo.vinculo_conteudo  order by conteudo.data_cadastro DESC ".$limit);
			
		while($array = mysqli_fetch_array($sql)){
		if($array['tipo']=="imagem"){
?>
			
	<div class="post2">
		<div class="link-block-3 w-inline-block">
			<!--srcset="images/foto6-p-500.jpeg 500w, images/foto6-p-1080.jpeg 1080w, images/foto6.jpg 1280w" -->
			<img src="https://site-staging.justa.com.vc/images/<?php echo $array['conteudo']; ?>" sizes="(max-width: 479px) 100vw, (max-width: 767px) 82vw, (max-width: 991px) 84vw, (max-width: 3657px) 35vw, 1280px" alt="">
			<p class="paragraph-6">postado • <?php echo Data($array['data_cadastro']); ?></p>	
<?php 
		$sql_append = mysqli_query($conecta, "SELECT descricao from TB_append_conteudo WHERE vinculo_conteudo = ".$array['id_conteudo']."  order by posicao ASC limit 2 offset 0");	
		$i = 0;
		while($array_append = mysqli_fetch_array($sql_append)){	
		if($i == 0) {?>
		<a href="conteudo.html?id=<?php echo $array['id_conteudo']; ?>">	
		<h1 class="heading-8"><?php echo utf8_encode($array_append['descricao']); ?></h1>
		</a>	
		
<?php 		}else{ ?>
		<p><?php if(strlen(utf8_encode($array_append['descricao']) )> 120) {echo substr(utf8_encode($array_append['descricao']), 0, 180)."...";} else{echo utf8_encode($array_append['descricao']);} ?></p>			
<?php		}
			
		$i++;}?>
		</div>
	</div>	
			
			
<?php			}//IF IMAGEM
			elseif($array['tipo']=="video"){ ?>
    <div class="post3">
      <div class="link-block-3 w-inline-block">
        <div style="padding-top:56.17021276595745%" class="w-embed-youtubevideo">
			<iframe src="<?php echo $array['conteudo']; ?>" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
		<p class="paragraph-6">postado • <?php echo Data($array['data_cadastro']); ?></p>				  
<?php 
		$sql_append = mysqli_query($conecta, "SELECT descricao from TB_append_conteudo WHERE vinculo_conteudo = ".$array['id_conteudo']." order by posicao ASC");	
		$i = 0;
		while($array_append = mysqli_fetch_array($sql_append)){
		if($i == 0) {?>
		<a href="conteudo.html?id=<?php echo $array['id_conteudo']; ?>" >  
		<h1 class="heading-8"><?php echo utf8_encode($array_append['descricao']); ?></h1>
		</a>	
		
<?php 		}else{ ?>
		<p><?php if(strlen(utf8_encode($array_append['descricao']) )> 120) {echo substr(utf8_encode($array_append['descricao']), 0, 180)."...";} else{echo utf8_encode($array_append['descricao']);} ?></p>			
<?php		}
			
		$i++;}?>
      </div>
    </div>				
<?php				}
			} //FECHA WHILE PRINCIPAL

		} //FECHA IF PAGINA BLOG

		if($pagina=="pesquisa-like"){ 
		if($_POST['filtro']!=""){
			$pesquisa_filtro = "&& TB_append_conteudo.descricao like '%".$_POST['filtro']."%'";
		}
		$sql = mysqli_query($conecta, "SELECT conteudo.id as id_conteudo, conteudo.*, tconteudo.tipo from TB_conteudo as conteudo 
										INNER JOIN TB_tipos_conteudo as tconteudo ON conteudo.id_tipo_conteudo = tconteudo.id
										INNER JOIN TB_vinculo as vinculo ON vinculo.id_conteudo = conteudo.id
										INNER JOIN TB_pagina as pagina on pagina.id = vinculo.id_pagina
										INNER JOIN TB_append_conteudo ON TB_append_conteudo.vinculo_conteudo = conteudo.id
										WHERE conteudo.situacao = 1 && pagina.link = 'blog-justa.html' ".$pesquisa_filtro." GROUP BY TB_append_conteudo.vinculo_conteudo  order by conteudo.data_cadastro DESC");
		
		while($array = mysqli_fetch_array($sql)){
		if($array['tipo']=="imagem"){
?>
			
	<div class="post2">
		<div class="link-block-3 w-inline-block">
			<!--srcset="images/foto6-p-500.jpeg 500w, images/foto6-p-1080.jpeg 1080w, images/foto6.jpg 1280w" -->
			<img src="https://site-staging.justa.com.vc/images/<?php echo $array['conteudo']; ?>" sizes="(max-width: 479px) 100vw, (max-width: 767px) 82vw, (max-width: 991px) 84vw, (max-width: 3657px) 35vw, 1280px" alt="">
			<p class="paragraph-6">postado • <?php echo Data($array['data_cadastro']); ?></p>	
<?php 
		$sql_append = mysqli_query($conecta, "SELECT descricao from TB_append_conteudo WHERE vinculo_conteudo = ".$array['id_conteudo']." order by posicao ASC");	
		$i = 0;
		while($array_append = mysqli_fetch_array($sql_append)){	
		if($i == 0) {?>
		<a href="conteudo.html?id=<?php echo $array['id_conteudo']; ?>" >	
		<h1 class="heading-8"><?php echo utf8_encode($array_append['descricao']); ?></h1>	
		</a>	
		
<?php 		}else{ ?>
		<p><?php if(strlen(utf8_encode($array_append['descricao']) )> 120) {echo substr(utf8_encode($array_append['descricao']), 0, 180)."...";} else{echo utf8_encode($array_append['descricao']);} ?></p>			
<?php		}
			
		$i++;}?>
		</div>
	</div>	
			
			
<?php			}//IF IMAGEM
			elseif($array['tipo']=="video"){ ?>
    <div class="post3">
      <div class="link-block-3 w-inline-block">
        <div style="padding-top:56.17021276595745%" class="w-embed-youtubevideo">
			<iframe src="<?php echo $array['conteudo']; ?>" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
		<p class="paragraph-6">postado • <?php echo Data($array['data_cadastro']); ?></p>				  
<?php 
		$sql_append = mysqli_query($conecta, "SELECT descricao from TB_append_conteudo WHERE vinculo_conteudo = ".$array['id_conteudo']." order by posicao ASC");	
		$i = 0;
		while($array_append = mysqli_fetch_array($sql_append)){
		if($i == 0) {?>
		<a href="conteudo.html?id=<?php echo $array['id_conteudo']; ?>">
		<h1 class="heading-8"><?php echo utf8_encode($array_append['descricao']); ?></h1>	
		</a>  
		
<?php 		}else{ ?>
		<p><?php if(strlen(utf8_encode($array_append['descricao']) )> 120) {echo substr(utf8_encode($array_append['descricao']), 0, 180)."...";} else{echo utf8_encode($array_append['descricao']);} ?></p>			
<?php		}
			
		$i++;}?>
      </div>
    </div>				
<?php				}
			} //FECHA WHILE PRINCIPAL

		} //FECHA IF PESQUISA LIKE

		elseif($pagina=="pesquisa-conteudo"){ 
		
			$pesquisa_filtro = "&& conteudo.id = ".$_POST['id_conteudo']."";
		
		$sql = mysqli_query($conecta, "SELECT conteudo.id as id_conteudo, conteudo.*, tconteudo.tipo from TB_conteudo as conteudo 
										INNER JOIN TB_tipos_conteudo as tconteudo ON conteudo.id_tipo_conteudo = tconteudo.id
										INNER JOIN TB_vinculo as vinculo ON vinculo.id_conteudo = conteudo.id
										INNER JOIN TB_pagina as pagina on pagina.id = vinculo.id_pagina
										INNER JOIN TB_append_conteudo ON TB_append_conteudo.vinculo_conteudo = conteudo.id
										WHERE conteudo.situacao = 1 && pagina.link = 'blog-justa.html' ".$pesquisa_filtro." ");
		
		$array = mysqli_fetch_array($sql);
		if($array['tipo']=="imagem"){
?>
			
	<div class="post2">
		<div class="columns-7">
			<!--srcset="images/foto6-p-500.jpeg 500w, images/foto6-p-1080.jpeg 1080w, images/foto6.jpg 1280w" 
		sizes="(max-width: 479px) 100vw, (max-width: 767px) 82vw, (max-width: 991px) 84vw, (max-width: 3657px) 35vw, 1280px"-->
			
			<img src="https://site-staging.justa.com.vc/images/<?php echo $array['conteudo']; ?>" style="min-height: 100%; width: 100%">
			<p class="paragraph-6">postado • <?php echo Data($array['data_cadastro']); ?></p>	
<?php 
		$sql_append = mysqli_query($conecta, "SELECT descricao from TB_append_conteudo WHERE vinculo_conteudo = ".$array['id_conteudo']." order by posicao ASC");	
		$i = 0;
		while($array_append = mysqli_fetch_array($sql_append)){	
		if($i == 0) {?>
		
		<h1 class="heading-8" style="color: #1d6d8a !important; font-size: 3vw; font-weight: bold"><?php echo utf8_encode($array_append['descricao']); ?></h1>	
		<p><img src="https://uploaddeimagens.com.br/images/002/459/058/full/cbc%CC%A7blog_%281%29.png?1572298443" alt="" width="100%" /></p>
<?php 		}else{ ?>
		<div class="w-row">   
		<div class="texto-conteudo"><?php echo utf8_encode($array_append['descricao']); ?></div>
		</div>			
<?php		}
			
		$i++;}?>
			
		</div>
	</div>	
			
			
<?php			}//IF IMAGEM
			elseif($array['tipo']=="video"){ ?>
    <div class="post3">
      <div class="columns-7">
        <div style="padding-top:56.17021276595745%" class="w-embed-youtubevideo">
			<iframe src="<?php echo $array['conteudo']; ?>" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
		<p class="paragraph-6">postado • <?php echo Data($array['data_cadastro']); ?></p>				  
<?php 
		$sql_append = mysqli_query($conecta, "SELECT descricao from TB_append_conteudo WHERE vinculo_conteudo = ".$array['id_conteudo']." order by posicao ASC");	
		$i = 0;
		while($array_append = mysqli_fetch_array($sql_append)){
		if($i == 0) {?>
		 
		<h1 class="heading-8" style="color: #1d6d8a !important; font-size: 3vw; font-weight: bold"><?php echo utf8_encode($array_append['descricao']); ?></h1>	
		<p><img src="https://uploaddeimagens.com.br/images/002/459/058/full/cbc%CC%A7blog_%281%29.png?1572298443" alt="" width="100%" /></p>
<?php 		}else{ ?>
		<div class="w-row">   
		<div class="texto-conteudo"><?php echo utf8_encode($array_append['descricao']); ?></div>
		</div>		
<?php		}
			
		$i++;}?>
			
      </div>
    </div>				
<?php				}
		

		} //FECHA IF EXIBE CONTEUDO




		if($pagina=="cadastro-email"){
			$sql = mysqli_query($conecta, "SELECT id from TB_cadastros_adquiridos WHERE nome = '".$_POST['nome']."' and email = '".$_POST['email']."'");
			if(mysqli_num_rows($sql)>0){echo trim("Esse e-mail já existe em nossa base de dados. Obrigado");} 
			else{
				$sql = mysqli_query($conecta, "INSERT into TB_cadastros_adquiridos (nome, email, celular, data_cadastro, vinculo_site) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".$_POST['celular']."', '".date('Y-m-d')."', 0)");
				if($sql){
			    echo trim("Cadastro inserido com sucesso! Obrigado.");
				}
			}
		}

		if($pagina=="carrega-materias-blog"){
			$sql = mysqli_query($conecta, "SELECT distinct filtro from TB_conteudo where situacao = 1 order by filtro ASC"); ?>
			<div class="div-block-9" id="filtros">
			<a class="button-7 w-button" onClick="Pesquisa('');">Mais Recentes</a>
<?php		while($array = mysqli_fetch_array($sql)){ ?>
			<a class="button-7 w-button" onClick="Pesquisa('<?php echo utf8_encode(ucwords($array[0])); ?>');"><?php echo utf8_encode(ucwords($array[0])); ?></a>	
<?php		} ?>
			</div>	
<?php		}


		if($pagina=="conteudo"){ ?>
			
			
			
<?php		} 
	if($pagina == "envia-contato"){
		
	$nome_contato = utf8_decode($_POST['nome_contato']);
	$email_contato = utf8_decode($_POST['email_contato']);	
	$fone_contato = $_POST['fone_contato'];	
	$estado_contato = utf8_decode($_POST['estado_contato']);
	$cidade_contato = utf8_decode($_POST['cidade_contato']);		
	//$emailenviar = "brugazzo@hotmail.com";
	$emailenviar = "contato@justa.com.vc";
	$destino = $emailenviar;
	$assunto = "Contato JUSTA!";
	$mensagem = "Houve uma solicita&ccedil;&atilde;o de contato vindo do site.<br>Abaixo, dados informados no formul&aacute;rio:
	<br><br>Nome: ".$nome_contato.";<br>
			E-mail: ".$email_contato.";<br> 
			Telefone: ".$fone_contato.";<br>
			Estado: ".$estado_contato.";<br>
			Cidade:  ".$cidade_contato;
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-Utf-8' . "\r\n";
	$headers .= 'From: '.$nome_contato.' <'.$email_contato.'>';
	$enviaremail = mail( $destino, $assunto, $mensagem, $headers );
	if ( $enviaremail ) {
		echo "E-mail enviado com sucesso!. Aguarde nosso contato.";
	} else {
		echo "Falha ao enviar o e-mail, tente novamente";
	}
	
			
		}


	if($pagina=="cadastro-interesse"){
			$sql = mysqli_query($conecta, "SELECT id from TB_cadastros_interesse WHERE nome = '".$_POST['nome']."' and email = '".$_POST['email']."'");
			if(mysqli_num_rows($sql)>0){echo trim("Esse e-mail já existe em nossa base de dados. Obrigado");} 
			else{
				$sql = mysqli_query($conecta, "INSERT into TB_cadastros_interesse (nome, email, telefone, cidade, estado, obs, data_cadastro) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".$_POST['telefone']."', '".$_POST['cidade']."', '".$_POST['estado']."', '".$_POST['obs']."', '".date('Y-m-d')."')");
				if($sql){
					$nome_contato = utf8_decode($_POST['nome']);
					$email_contato = utf8_decode($_POST['email']);	
					$fone_contato = $_POST['telefone'];	
					$estado_contato = utf8_decode($_POST['estado']);
					$cidade_contato = utf8_decode($_POST['cidade']);		
					//$emailenviar = "brugazzo@hotmail.com";
					$emailenviar = "contato@justa.com.vc";
					$destino = $emailenviar;
					$assunto = "Contato Interesse JUSTA!";
					$mensagem = "Um usu&aacute;rio se cadastrou para obter a maquininha JUSTA!.<br>Abaixo, dados informados no formul&aacute;rio:
					<br><br>Nome: ".$nome_contato.";<br>
							E-mail: ".$email_contato.";<br> 
							Telefone: ".$fone_contato.";<br>
							Estado: ".$estado_contato.";<br>
							Cidade:  ".$cidade_contato;
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-Utf-8' . "\r\n";
					$headers .= 'From: '.$nome_contato.' <'.$email_contato.'>';
					$enviaremail = mail( $destino, $assunto, $mensagem, $headers );
					if ( $enviaremail ) {
						echo "E-mail enviado com sucesso!. Aguarde nosso contato.";
					} else {
						echo "Falha ao enviar o e-mail, tente novamente";
					}					
				}
			}
}//FECHA INTERESSE
	
?>	

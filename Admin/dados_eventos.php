<?php
include "cabecalho.php";


if ( $_GET[ 'id' ] == "cadastro") {
	$delete = mysqli_query( conexao(), "Delete from TB_conteudo where situacao = 2 and data_cadastro <= '".date('Y-m-d')."'");
	$sql = mysqli_query( conexao(), "INSERT into TB_conteudo (id_tipo_conteudo, conteudo, data_cadastro, posicao, filtro, situacao) VALUES (0, '', '".date('Y-m-d')."', 1, 'Novo', 2)" ) or die( mysqli_error() );

	$selExistente = mysqli_query( conexao(), "Select * from TB_conteudo WHERE situacao = 2 and data_cadastro = '".date('Y-m-d')."' ORDER BY ID DESC") or die( mysqli_error() );
	$array = mysqli_fetch_array( $selExistente );
	$id = $array['id'];
	$insert = mysqli_query(conexao(), "INSERT into TB_append_conteudo (id_tipo_conteudo, vinculo_conteudo, descricao, posicao, situacao, data_cadastro) VALUES (2, ".$id.", '".utf8_decode("Título novo artigo")."', 1, 1, '".date('Y-m-d')."')");
	$insert2 = mysqli_query(conexao(), "INSERT into TB_append_conteudo (id_tipo_conteudo, vinculo_conteudo, descricao, posicao, situacao, data_cadastro) VALUES (2, ".$id.", '".utf8_decode("Novo artigo...")."', 2, 1, '".date('Y-m-d')."')");
	$insert3 = mysqli_query(conexao(), "INSERT into TB_vinculo (id_conteudo, id_pagina) VALUES (".$id.", 1)");	
	

} //FECHA POST

elseif ( $_GET[ 'id' ] != "") {
	$selExistente = mysqli_query( conexao(), "Select * from TB_conteudo WHERE id = " . $_GET[ 'id' ] )or die( mysqli_error() );
	$array = mysqli_fetch_array( $selExistente );
	$id = $array['id'];
}
	

?>


<div class="span9">

		<div class="row-fluid pull">
		<br><br>
				<h2 class="page-header" style="text-align: left">Manuten&ccedil;&atilde;o de Conte&uacute;do</h2>
				<div class="row">
					<div class="span6">
						<!--Coluna Direita -->
						<div class="form-group" id="form-imagem">
								<label for="arquivo" required>Inserir uma Imagem</label>
								<input type="text" class="form-control"  placeholder="Nome da imagem" onblur="alteraDados('TB_conteudo', this.id, this.value, 'id')" maxlength="300" id="conteudo" style="min-width: 300px;" name="Image" value="<?php if($array['id_tipo_conteudo'] == 1) { echo $array['conteudo']; } ?>">
						</div>


							<div class="form-group" id="form-video">
								<label>V&iacute;deo </label>
								<input type="text" class="form-control"  placeholder="Url" onblur="alteraDados('TB_conteudo', this.id, this.value, 'id')" maxlength="300" id="conteudo-video" style="min-width: 300px;" name="Video" value="<?php if($array['id_tipo_conteudo'] == 3) { echo $array['conteudo']; } ?>">
							</div><br><br>
							<div id="visualizar">
								<h3>Imagem:</h3>
								<?php if($array['id_tipo_conteudo'] == 1) { ?>
								<img src="<?php echo "https://site-staging.justa.com.vc/images/".$array['conteudo']; ?>" id="imagem" alt="existente">
								<?php } else { ?>
								<iframe src="<?php echo $array['conteudo']; ?>" frameborder="0" style="position:relative;left:0;top:0;width:100%;height:50%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
								<?php 											} ?>
							</div>
					</div>

					<div class="span6">
						<div class="form-group">
							<label>Tipo</label>
							<select id="selectTipo" onchange="SelecionaTipo(this.value); " >
								<option <?php if($array[ 'id_tipo_conteudo']=="") {echo "selected";} ?> value="0">Selecione o tipo</option>
								<option <?php if($array[ 'id_tipo_conteudo']==1) {echo "selected";} ?> value="1">Imagem</option>
								<option <?php if($array[ 'id_tipo_conteudo']==3) {echo "selected";} ?> value="3">Vídeo</option>
							</select>
						</div>
						<div class="form-group">
							<label>Data do Evento</label>
							<input type="text" placeholder="Data Evento" readonly maxlength="50" width="100" size="100" name="data_evento" value="<?php echo date('d/m/Y', strtotime($array['data_cadastro'])); ?>">
						</div>
						<div class="form-group">
							<label>Filtro</label>
							<input type="text" placeholder="Filtro" class="form-control"  onBlur="alteraDados('TB_conteudo', this.id, this.value, 'id')" maxlength="50" width="100" size="100" name="filtro" id="filtro" value="<?php echo utf8_encode($array['filtro']); ?>">
						</div>				
						<div class="form-group">
							<label>Situa&ccedil;&atilde;o</label>
							<select name="situacao" id="situacao" class="form-control" onChange="alteraDados('TB_conteudo', this.id, this.value, 'id')">
								<option <?php if($array[ 'situacao']==1) {echo "selected";} ?> value="1">Ativo</option>
								<option <?php if($array[ 'situacao']==0) {echo "selected";} ?> value="0">Inativo</option>
								<option <?php if($array[ 'situacao']==2) {echo "selected";} ?> value="2">Nunca Publicado</option>
								<option <?php if($array[ 'situacao']==3) {echo "selected";} ?> value="3">Publicado em Homolog</option>
							</select>
						</div>
						<div class="form-group">
							<label>Título e texto</label>
							<button type="button" id="1" class="btn btn-success append" style="min-width: 40%">Título</button>
						</div>
						<br>
						<div class="form-group">
							<button type="button" id="2" class="btn btn-success append" style="min-width: 40%">Texto</button>
						</div>						

					</div>


				</div> 
				<div class="row">
					
				</div>
				<div class="row">
					<div class="span12" id="resposta">
						<!--Coluna Direita -->

					</div>
				</div>
		</div>


	</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade modal-lg"  id="modalLogin" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="titulo-modal"></h4>
			</div>
			<div class="modal-body">
				<div class="w-form-done" id="form-acessos">
				<textarea id="tinymce_full" name="conteudo"></textarea>
				<br>
				<button type="button" onClick="CadastroTexto()" class="btn btn-success">Cadastrar</button>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<script src="assets/jquery.min.js"></script>
<script src="assets/jquery.form.js"></script>

<script src="assets/scripts.js"></script>
<script src="assets/bootstrap.min.js"></script>
<!--<script src="vendors/jquery-1.9.1.min.js"></script>-->
<script src="vendors/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
	
    
		// Tiny MCE
        tinymce.init({
		    selector: "#tinymce_full",
		    plugins: [
		        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		        "searchreplace wordcount visualblocks visualchars code fullscreen",
		        "insertdatetime media nonbreaking save table contextmenu directionality",
		        "emoticons template paste textcolor"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    toolbar2: "print preview media | forecolor backcolor emoticons",
		    image_advtab: true,
		    templates: [
		        {title: 'Test template 1', content: 'Test 1'},
		        {title: 'Test template 2', content: 'Test 2'}
			
		    ]
		});	
	var posicao = "";
	$( document ).ready( function () {
		SelecionaTipo( <?php echo $array['id_tipo_conteudo'] ?> );
		
	} )

	function mascaraData( val ) {
		var pass = val.value;
		var expr = /[0123456789]/;

		for ( i = 0; i < pass.length; i++ ) {
			// charAt -> retorna o caractere posicionado no índice especificado
			var lchar = val.value.charAt( i );
			var nchar = val.value.charAt( i + 1 );

			if ( i == 0 ) {
				// search -> retorna um valor inteiro, indicando a posição do inicio da primeira
				// ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
				// instStr.search(expReg);
				if ( ( lchar.search( expr ) != 0 ) || ( lchar > 3 ) ) {
					val.value = "";
				}

			} else if ( i == 1 ) {

				if ( lchar.search( expr ) != 0 ) {
					// substring(indice1,indice2)
					// indice1, indice2 -> será usado para delimitar a string
					var tst1 = val.value.substring( 0, ( i ) );
					val.value = tst1;
					continue;
				}

				if ( ( nchar != '/' ) && ( nchar != '' ) ) {
					var tst1 = val.value.substring( 0, ( i ) + 1 );

					if ( nchar.search( expr ) != 0 )
						var tst2 = val.value.substring( i + 2, pass.length );
					else
						var tst2 = val.value.substring( i + 1, pass.length );

					val.value = tst1 + '/' + tst2;
				}

			} else if ( i == 4 ) {

				if ( lchar.search( expr ) != 0 ) {
					var tst1 = val.value.substring( 0, ( i ) );
					val.value = tst1;
					continue;
				}

				if ( ( nchar != '/' ) && ( nchar != '' ) ) {
					var tst1 = val.value.substring( 0, ( i ) + 1 );

					if ( nchar.search( expr ) != 0 )
						var tst2 = val.value.substring( i + 2, pass.length );
					else
						var tst2 = val.value.substring( i + 1, pass.length );

					val.value = tst1 + '/' + tst2;
				}
			}

			if ( i >= 6 ) {
				if ( lchar.search( expr ) != 0 ) {
					var tst1 = val.value.substring( 0, ( i ) );
					val.value = tst1;
				}
			}
		}

		if ( pass.length > 10 )
			val.value = val.value.substring( 0, 10 );
		return true;
	}


	jQuery(document).ready( function () {


		$('#formulario').submit( function(e) {
			$("#arquivo").css("display", "none");
			$('#visualizar').html( 'Enviando imagem...' );
			e.preventDefault();
			$.ajax( {
				url: "ajax/upload_eventos.php",
				type: "POST",
				data: new FormData(this),
				contentType: false,
				processData: false,
				success: function ( responseText ) {

					$("#arquivo").css("display", "block");
					$("#arquivo").val("");
					$('#visualizar').html( '<img src="'+responseText+'" id="imagem" alt="existente">' );
					


				},
				error: function (erro) { //$('#visualizar').html(responseText);
					$( '#visualizar' ).html("Erro ao se comunicar com o servidor, tente novamente."+erro.status);
					$("#arquivo").css("display", "block");
				}
			} );

		} );

	} );

	
	$(".append").click(function(){
		posicao = $(this).prop("id");
		EncontraConteudoAppend();
		$('#modalLogin').modal();
	})
	
	function EncontraConteudoAppend(){
		var id_conteudo = <?php echo $id; ?>;
		$.ajax( {
			url: "ajax/upload_eventos.php",
			type: "POST",
			data: {
				id_conteudo: id_conteudo,
				acao: 'encontra_conteudo_existente',
				posicao : posicao
			},
			success: function ( resposta ) {
				resposta = resposta.trim();
				$("#tinymce_full").val(resposta);
				tinyMCE.activeEditor.setContent(resposta);

			}

		} )
	}
	
	function CadastroTexto(){
		var id_conteudo = <?php echo $id; ?>;
		var descricao = tinyMCE.activeEditor.getContent();
		
		$.ajax( {
			url: "ajax/upload_eventos.php",
			type: "POST",
			data: {
				id_conteudo: id_conteudo,
				acao: 'cadastra_append_conteudo',
				posicao : posicao,
				descricao : descricao
			},
			success: function ( resposta ) {
				alert(resposta);
				$('#modalLogin').modal("hide");

			}

		} )
	}	
	
	function SelecionaTipo( tipo ) {
		if ( tipo == 1 ) var tipo = "imagem";
		if ( tipo == 3 ) var tipo = "video";
		$("#form-imagem").css("display", "none");
		$("#form-video").css("display", "none");
		$("#form-" + tipo ).slideDown("slow");
	}

	function CarregaImagens(id) {
		$.ajax( {
			url: "ajax/upload_eventos.php",
			type: "POST",
			data: {
				id: id,
				acao: 'carrega'
			},
			success: function ( resposta ) {
				resposta = resposta.trim();
				$("#resposta").html(resposta);

			}

		} )

		//$("#visualizar").html("");
	}


	function SobeVideo(){
		var video = $("#conteudo-video").val(); console.log("conteudo "+video);
		$("#visualizar").html('<iframe src="'+video+'" frameborder="0" style="position:relative;left:0;top:0;width:100%;height:50%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>');
		alteraDados('TB_conteudo', 'id_tipo_conteudo', 3, 'id');
	}
	
	function SobeImagem(){
		var imagem = $("#conteudo").val();
		$("#visualizar").html('<img src="../images/'+imagem+'" id="imagem" alt="existente">');
		alteraDados('TB_conteudo', 'id_tipo_conteudo', 1, 'id');
	}	



	
		function alteraDados(tabela, campo, novo_valor, condicao){
			var confirmar = confirm('Confirma a alteração?');
			var campoAlterar = campo.replace("-video", "");
			var valor_condicao = <?php echo $id ?>;
			var acao = 'alterar_dados';
			var tipo = $("#"+campo).attr("name");console.log(tipo);
			if(confirmar){
					
					$.ajax({
					url : 'ajax/upload_eventos.php',
					type : 'POST',
					data : {valor_condicao : valor_condicao, acao : acao, campo : campoAlterar, tabela : tabela, novo_valor : novo_valor, condicao : condicao },
					success : function(recebido){
						recebido = recebido.replace('<meta charset="utf-8">','');
						if(recebido.trim() == 1){
							$("#"+campo).css("background-color", "#6495ED");
							if(campo=="conteudo" || campo == "conteudo-video"){
								if(tipo == "Video"){
									SobeVideo();	
								}else{
									SobeImagem();
								}
								
							}
						}else{
							document.getElementById(campo).style.backgroundColor = "#CD5C5C";
						}
						//confirmarValores(id_fornecedor, vinculo_franquia, descricao);
						
						
					},
					error : function(){
					alert('Algo deu errado, tente novamente por favor!');
						}
				})
			}
		}
	
		
</script>
<style>.modal-lg{width:60%;} .modal{left: 35%;}</style>
    </body>
</html>
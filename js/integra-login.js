	function Login(){
		var login = $("#login").val();
		//$("#button-entrar").val('Carregando...');
		if(login == ""){alert('Login nulo ou vazio'); $("#login").focus();  return false;}
					$.ajax( {
						url: 'https://portal.justa.com.vc/api/auth/roles',
						type: 'GET',
						data: {login : login},
						success: function ( response ) {
							//$("#button-entrar").val('Redirecionando...');
							
							var response_code = response.code;
							if(response_code != 0){
								var response_message = response.message;
								
								$("#login").focus();
								//$("#button-entrar").val('Entrar');
									}
								else{
									var reponse_roles = response.roles;
									if(reponse_roles == "role.seller"){
										window.location = 'https://sualoja.justa.com.vc/?user='+login;
									}else if(reponse_roles == "role.reseller"){
										window.location = 'https://justo.justa.com.vc/?user='+login;
									}else{
										$('#modalLogin').modal();
										$('#seller-modal').attr('href', 'https://sualoja.justa.com.vc?user='+login);
										$('#reseller-modal').attr('href', 'https://justo.justa.com.vc?user='+login);
									}
								}
							},
							error: function (response) {
								var response_code = response.code;
								alert( "Não há usuários ativos para o login passado" );
								$("#login").focus();
								//$("#button-entrar").val('Entrar');								
							}
						} );
					
	}
		function Voltar(){
 			$('#modalLogin').modal('hide');
			//$("#button-entrar").val('Entrar');
			$("#login").val(""); 
			$("#login").focus(); 
		}

	$(document).ready(function(){
		$("#login").attr("title", "Para fazer login, digite seu e-mail e selecione seu portal.");
	})


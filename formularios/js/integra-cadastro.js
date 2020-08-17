// JavaScript Document



$(document).ready(function () {
    $(":input[data-watermark]").each(function () {
        $(this).val($(this).attr("data-watermark"));
        $(this).css("color","#a8a8a8");
        $(this).bind("focus", function () {
            if ($(this).val() == $(this).attr("data-watermark")) $(this).val('');
            $(this).css("color","#000000");
        });
        $(this).bind("blur", function () {
            if ($(this).val() == '') 
            {
                $(this).val($(this).attr("data-watermark"));
                $(this).css("color","#a8a8a8");
            }
            else
            {
                $(this).css("color","#000000");
            }
        });
    });
});

function ModalContato(){
	$("#modalContato").modal();
}


function mascaraTel(componente){
	var texto = $("#"+componente).val();
	texto = texto.replace(/\D/g,"");//Remove tudo o que não é dígito

	texto = texto.replace(/^(\d\d)(\d)/g,"($1) $2");//Coloca parênteses em volta dos dois primeiros dígitos

	if(texto.length < 14) texto = texto.replace(/(\d{4})(\d)/,"$1-$2");//Número com 8 dígitos. Formato: (99) 9999-9999
	else texto = texto.replace(/(\d{5})(\d)/,"$1-$2");//Número com 9 dígitos. Formato: (99) 99999-9999

	$("#"+componente).val(texto); 
}

	function EnviaContato(pagina_origem = ""){
		if($("#nome-contato").val()==""){alert('Por favor informe seu nome!'); return false;}
		if($("#email-contato").val()==""){alert('Por favor informe seu e-mail!'); return false;}
		if($("#fone-contato").val()==""){alert('Por favor informe seu telefone!'); return false;}
		if($("#estado-contato").val()==""){alert('Por favor informe seu estado!'); return false;}
		if($("#cidade-contato").val()==""){alert('Por favor informe sua cidade!'); return false;}
		//$("#button-entrar").val('Carregando...');

		//Integração com funil de vendas

		let nome = $("#nome-contato").val();
		let telefone = $("#fone-contato").val();
		let cidade = $("#cidade-contato").val();
		let estado = $("#estado-contato").val();
		let email = $("#email-contato").val();

		let integradoFunil = registra_dados_funil(nome, email, telefone, cidade, estado);
		
		var pagina = 'envia-contato';
		$.ajax({
		url: 'ws/comunicacao.php',
		type: 'POST',
		data: {pagina : pagina, pagina_origem: pagina_origem,nome_contato : $("#nome-contato").val(), email_contato : $("#email-contato").val(), fone_contato : $("#fone-contato").val(), estado_contato : $("#estado-contato").val(), cidade_contato : $("#cidade-contato").val() },
		success: function(response){
			alert(response);
			$("#modalContato").modal("hide");
		
			
		},
		error: function(){
		alert('Erro ao se conectar com o servidor, tente novamente ou contacte o administrador do site.');
		}
		});
					
	}

	function EnviaInteresse(pagina_origem = "", has_canal = false, has_ref = false){
        
            if($("#nome-interesse").val()==""){alert('Por favor informe seu nome!'); return false;}
            if($("#email-interesse").val()==""){alert('Por favor informe seu e-mail!'); return false;}
            if($("#fone-interesse").val()==""){alert('Por favor informe seu telefone!'); return false;}
            if($("#estado-interesse").val()==""){alert('Por favor informe seu estado!'); return false;}
            if($("#cidade-interesse").val()==""){alert('Por favor informe sua cidade!'); return false;}
            
            if(has_canal)
            {
                if($("#canal-interesse").val() ==""){alert('Por favor informe de onde ouviu falar da gente!'); return false;}
            }

            let referral = "";
            // if(has_ref)
            // {
                referral = location.search.split("ref=")[1];			
                console.log(`Temos o referral: ${referral}`);
            // }

            

            //$("#button-entrar").val('Carregando...');
            let pagina = 'cadastro-interesse';
            
            let data_json = {pagina : pagina, pagina_origem: pagina_origem, 
                nome : $("#nome-interesse").val(), 
                email : $("#email-interesse").val(), 
                telefone : $("#fone-interesse").val(), 
                estado : $("#estado-interesse").val(), 
                cidade : $("#cidade-interesse").val(),  
                obs : $("#obs-interesse").val(),
                canal: has_canal ? $("#canal-interesse").val() : 'Nenhum canal especificado',
                referral: has_ref ? referral : ''
            };

            $.ajax({
            url: 'ws/comunicacao.php',
            type: 'POST',
            data: data_json,
            success: function(response){
                
                obj = JSON.parse(response);
                
                alert(obj.message);

                console.log(obj);

                if(!obj.error)
                 {	
                    let canal_value =  $("#canal-interesse").val();
                let canal_chooser = '';
                
                        
                    if(canal_value === 'Facebook') { canal_chooser = 49324; }
                    else if(canal_value === 'Feiras de Eventos') { canal_chooser = 49238; }
                    else if(canal_value === 'Google') { canal_chooser = 49240; }
                    else if(canal_value === 'Indicação') { canal_chooser = 49239; }
                    else if(canal_value === 'Instagram') { canal_chooser = 49327; }
                    else if(canal_value === 'Linkedin') { canal_chooser = 49326; }
                    else if(canal_value === 'Prospecção Externa') { canal_chooser = 53543; }
                    else { canal_chooser = 49323; }

                    let sent = registra_dados_funil_maquininhas(
                        $("#nome-interesse").val(),
                        $("#email-interesse").val(),
                        $("#fone-interesse").val(),
                        $("#cidade-interesse").val(),
                        $("#estado-interesse").val(),
                        referral,
                        has_canal ? canal_chooser : '',
                        canal_value
                    );

                    console.log(`${canal_value}, ${canal_chooser}`);		
                    console.log(sent ? `Enviado` :  `Não enviado`);
                    }else{
                        console.log("Nao pode enviar o funil de vendas");
                    }
                    $("#modalInteresse").modal("hide");
            },
            error: function(){
            alert('Erro ao se conectar com o servidor, tente novamente ou contate o administrador do site.');
            }
            });
        // }else{
        //     alert("Aguarde a finalização do envio");
        // }
					
    }
    
    function EnviaContatoFunilVendas()
    {
            let canal_value =  $("#canal-interesse").val();
            let canal_chooser = '';
            
            		
                if(canal_value === 'Facebook') { canal_chooser = 49324; }
                else if(canal_value === 'Feiras de Eventos') { canal_chooser = 49238; }
                else if(canal_value === 'Google') { canal_chooser = 49240; }
                else if(canal_value === 'Indicação') { canal_chooser = 49239; }
                else if(canal_value === 'Instagram') { canal_chooser = 49327; }
                else if(canal_value === 'Linkedin') { canal_chooser = 49326; }
                else if(canal_value === 'Prospecção Externa') { canal_chooser = 53543; }
                else { canal_chooser = 49323; }

                let sent = registra_dados_funil_maquininhas(
                    $("#nome-interesse").val(),
                    $("#email-interesse").val(),
                    $("#fone-interesse").val(),
                    $("#cidade-interesse").val(),
                    $("#estado-interesse").val(),
                    referral,
                    has_canal ? canal_chooser : '',
                    canal_value
                );

                console.log(`${canal_value}, ${canal_chooser}`);		
                console.log(sent ? `Enviado` :  `Não enviado`);
    }


	function ModalTef(){
	$("#modaltef").modal();
}
	

	function ModalInteresse(){
	$("#modalInteresse").modal();
}

 

function ModalTrabalhe(){
	$("#modalTrabalhe").modal();
}

	// Get the modal
var modal = document.getElementById("modalInteresse");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
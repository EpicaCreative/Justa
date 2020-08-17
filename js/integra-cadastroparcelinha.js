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

    

     function EnviaParcelinha(pagina_origem = ""){
        if($("#nome-cartao").val()==""){alert('Por favor informe seu nome!'); return false;}
        if($("#email-cartao").val()==""){alert('Por favor informe seu e-mail!'); return false;}
        if($("#fone-cartao").val()==""){alert('Por favor informe seu telefone!'); return false;}
        if($("#estado-cartao").val()==""){alert('Por favor informe seu estado!'); return false;}
        if($("#cidade-cartao").val()==""){alert('Por favor informe sua cidade!'); return false;}
        if($("#origem-cartao").val()==""){alert('Por favor informe sua cidade!'); return false;}

        //$("#button-entrar").val('Carregando...');

        //Integração com funil de vendas

        let nome = $("#nome-cartao").val();
        let telefone = $("#fone-cartao").val();
        let cidade = $("#cidade-cartao").val();
        let estado = $("#estado-cartao").val();
        let email = $("#email-cartao").val();
        let origem = $("#origem-cartao").val();

        let integradoFunilCartao = registra_dados_funil_parcelinha(nome, email, telefone, cidade, estado, origem);
        
        var pagina = 'cadastro-parcelinha';
        $.ajax({
        url: 'ws/comunicacao.php',
        type: 'POST',
        data: {pagina : pagina, pagina_origem: pagina_origem,origem_contato : $("#origem-cartao").val(),nome_contato : $("#nome-cartao").val(), email_contato : $("#email-cartao").val(), fone_contato : $("#fone-cartao").val(), estado_contato : $("#estado-cartao").val(), cidade_contato : $("#cidade-cartao").val(), obs_contato : $("#obs-cartao").val(),  },
        success: function(response){
            alert(response);
            $("#modalInteresse").modal("hide");
        
            
        },
        error: function(){
        alert('Erro ao se conectar com o servidor, tente novamente ou contacte o administrador do site.');
        }
        });
                    
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
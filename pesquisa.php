<?php 

header("Location: https://justa.com.vc/pesquisa-encerrada");

$email_user = $_GET['email'];




 ?>


<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="pesquisa/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="pesquisa/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="pesquisa/css/justa-lppesquisa.webflow.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
	$(document).ready(function() {
  $('#seoutrobanco').hide();
  $('#banco').change(function() {
    if ($('#banco').val() == 'outros') {
      $('#seoutrobanco').show();
    } else {
      $('#seoutrobanco').hide();
    }
  });
});


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

function yesnoCheck() {
    if (document.getElementById('susatoud').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}

	function yesnoCheckEmissao() {
    if (document.getElementById('sEmissao').checked) {
        document.getElementById('ifYesEmissao').style.visibility = 'visible';
    }
    else document.getElementById('ifYesEmissao').style.visibility = 'hidden';

}

	function yesnoCheckCredito() {
    if (document.getElementById('sccreditocorp').checked) {
        document.getElementById('ifYesCusto').style.visibility = 'visible';
    }
    else document.getElementById('ifYesCusto').style.visibility = 'hidden';

}

$(this).prev('email').val("hello world");
</script>
<style>
* {
  box-sizing: border-box;
}


@media (max-width: 27.9cm){
#regForm {
  background-color: #ffffff;
  
  font-family: Raleway;
  padding: 40px 10px;
  width: 100%;
  min-width: 300px;
}

#EnviarBTN { margin-top: 40px; }

body {

  background-color: #ffffff;
}
}

@media (min-width: 28cm){
#regForm {
  background-color: #ffffff;
  margin: 30px auto;
  font-family: Raleway;
  padding: 40px;
  width: 50%;
  min-width: 300px;
}

body {
  background-color: #f1f1f1;
}
}



select{
  background-color: #ffffff;
  margin: 10px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

h1 {
  text-align: center;  
}

input[type=text] {
    position: static;
    width: 100%;
    margin-top: 20px;
    border-radius: 20px;
        display: block;
    width: 100%;
    height: 38px;
    padding: 8px 12px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333333;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;
}



/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

input[type=submit]:hover{ background-color: #007eae; }

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  background-color: #007eae;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
  background-color: #1d6d8a;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #007eae;
}




</style>
<body>

<form id="regForm" action="pesquisa/processa.php" method="POST">

  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  <div class="" style="width: 100%;">
    <div class="" style="width: 100%;"><img src="pesquisa/images/1-4.png" srcset="pesquisa/images/1-4.png 500w, pesquisa/images/1-4.png 800w, pesquisa/images/1-4.png 1080w" sizes="(max-width: 767px) 95vw, (max-width: 991px) 691.59375px, 940px" alt="" class="image-52">
      <h1 class="heading-4-copy5" style="">O que acha de um cartão da Justa?</h1>
      <h1 class="heading-18-copy-copy" style="width: 100%;">Para te entregarmos a melhor experiência</h1>
      <h1 class="heading-18-copy">nos ajude respondendo essa pesquisa.</h1></div>
  </div>
</div>
  <div class="tab">Informações pessoais
    <p><input placeholder="Nome..." class="text-field-3 w-input" oninput="this.className = ''" style="position: static;
    width: 100%;
    margin-top: 20px;
    border-radius: 20px;
        display: block;
    width: 100%;
    height: 38px;
    padding: 8px 12px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333333;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;" name="nome"></p>
    <p><input placeholder="Sobrenome..." class="text-field-3 w-input" oninput="this.className = ''" style="position: static;
    width: 100%;
    margin-top: 20px;
    border-radius: 20px;
        display: block;
    width: 100%;
    height: 38px;
    padding: 8px 12px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333333;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;" name="sobre"></p>
  </div>
  <div class="tab">Contato:
    <p><input placeholder="E-mail..." class="text-field-3 w-input" oninput="this.className = ''" style="position: static;
    pointer-events: none;
    width: 100%;
    margin-top: 20px;
    border-radius: 20px;
        display: block;
    width: 100%;
    height: 38px;
    padding: 8px 12px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333333;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;" name="email" value="<?php echo $email_user ?>"></p>
    <p><input placeholder="DDD + Telefone..." style="position: static;
    width: 100%;
    margin-top: 20px;
    border-radius: 20px;
        display: block;
    width: 100%;
    height: 38px;
    padding: 8px 12px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333333;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #cccccc;" class="text-field-3 w-input" oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Vamos começar a pesquisa!
    <p><select id="banco" style="border-radius: 50px;" name="banco" data-name="banco" class="select-field w-select" required=""><option value="" style="border-radius: 20px;" disabled selected hidden="">Qual banco usa atualmente?</option><option value="itau">Itaú</option><option value="bradesco">Bradesco</option><option value="santander">Santander</option><option value="BB">Banco do Brasil</option><option value="Caixa">Caixa Federal</option><option value="outros">Outros</option></select></p>
          <p><input type="text" class="text-field-6 w-input" maxlength="256" name="seoutrobanco" data-name="seoutrobanco" placeholder="Qual outro banco?" id="seoutrobanco"></p>
  </div>
  <div class="tab">Faz uso de TED ou DOC?:
               <p>
         
            <div class="w-row" style="width: 20%;">
              <div class="w-col w-col-6"><label   class="w-checkbox checkbox-field"><input  type="radio" onclick="javascript:yesnoCheck();"  id="susatoud" name="usatoud" data-name="usatoud" class="w-checkbox-input" value="sim"><span for="usatoud" class="checkbox-label w-form-label">Sim<br>‍</span></label></div>
              <div class="w-col w-col-6"><label class="w-checkbox" ><input  type="radio" id="nusatoud" onclick="javascript:yesnoCheck();"  value="nao" name="usatoud" data-name="usatoud" class="w-checkbox-input"><span for="usatoud" class="w-form-label">Não</span></label></div>
            </div>
          </p>
          <p id="ifYes" style="visibility:hidden"><select id="valortoud" name="valortoud" data-name="valortoud" class="select-field-copy w-select"><option value="">Qual valor da TED ou Doc?</option><option value="acima de R$6,00">acima de R$6,00</option><option value="acima de R$4,00">acima de R$4,00</option><option value="acima de R$2,00">acima de R$2,00</option><option value="Nao ha custo">Não há custo</option></select></p>

  </div>
    <div class="tab">Faz uso de emissão de Boleto para algum tipo de recebimento?
              <p> 
            <div class="w-row" style="width: 20%;">
              <div class="w-col w-col-6"><label class="w-checkbox checkbox-field"><input type="radio" id="sEmissao" name="emissao" data-name="emissao" class="w-checkbox-input" onclick="javascript:yesnoCheckEmissao();" value="Sim"><span for="Emissao" class="checkbox-label w-form-label">Sim<br>‍</span></label></div>
              <div class="w-col w-col-6"><label class="w-checkbox"><input type="radio" id="nEmissao" name="emissao" data-name="emissao" class="w-checkbox-input" onclick="javascript:yesnoCheckEmissao();" value="Nao"><span for="Emissao" class="w-form-label">Não</span></label></div>
            </div>
          </p>
          
          <p id="ifYesEmissao" style="visibility:hidden"><select id="custopemissao" name="custopemissao" data-name="custopemissao" class="select-field-copy w-select"><option value="">Qual custo para emissão destes boletos?</option><option value="acima de R$5,00">acima de R$5,00</option><option value="acima de R$3,00">acima de R$3,00</option><option value="abaixo de R$3,00">abaixo de R$3,00</option><option value="outro valor">Outro valor</option></select></div></p>
        
  </div>
      <div class="tab">Possui cartão de crédito corporativo?
         <p>
            <div class="w-row" style="width: 20%;">
              <div class="w-col w-col-6"><label class="w-checkbox checkbox-field"><input type="radio" id="sccreditocorp" name="ccreditocorp" data-name="ccreditocorp" class="w-checkbox-input" onclick="javascript:yesnoCheckCredito();" value="Sim"><span for="ccreditocorp" class="checkbox-label w-form-label">Sim<br>‍</span></label></div>
              <div class="w-col w-col-6"><label class="w-checkbox"><input type="radio" id="nccreditocorp" name="ccreditocorp" data-name="ccreditocorp" class="w-checkbox-input" onclick="javascript:yesnoCheckCredito();" value="Nao"><span for="ccreditocorp" class="w-form-label">Não</span></label></div>
            </div>
          </p>
          <p id="ifYesCusto" style="visibility:hidden"><select id="custopsaque" name="custopsaque" data-name="custopsaque" class="select-field-copy-copy w-select"><option value="">Qual o custo para saques?</option><option value="acima de R$8,00">acima de R$8,00</option><option value="acima de R$6,00">acima de R$6,00</option><option value="acima de R$4,00">acima de R$4,00</option><option value="outro valor">Outro valor</option></select></p>
        
        
  </div>
        <div class="tab">Possui crédito disponível nesta conta corrente?
            <p>
            <div class="w-row" style="width: 20%;">
              <div class="w-col w-col-6"><label class="w-checkbox checkbox-field"><input type="radio" value="Sim" id="creditodispcc" name="creditodispcc" data-name="creditodispcc" class="w-checkbox-input"><span for="creditodispcc" class="checkbox-label w-form-label">Sim<br>‍</span></label></div>
              <div class="w-col w-col-6"><label class="w-checkbox"><input type="radio" value="Nao" id="creditodispcc" name="creditodispcc" data-name="creditodispcc" class="w-checkbox-input"><span for="creditodispcc" class="w-form-label">Não</span></label></div>
            </div>
          </p>

        	Ajudaria ter crédito adicional para uso do estabelecimento?
         <p>
                        <div class="w-row" style="width: 20%;">
              <div class="w-col w-col-6"><label class="w-checkbox checkbox-field"><input type="radio" value="Sim" id="Ajudariacapue" name="ajudariacapue" data-name="ajudariacapue" class="w-checkbox-input"><span for="Ajudariacapue" class="checkbox-label w-form-label">Sim<br>‍</span></label></div>
              <div class="w-col w-col-6"><label class="w-checkbox"><input type="radio" value="Nao" id="Ajudariacapue" name="ajudariacapue" data-name="ajudariacapue" class="w-checkbox-input"><span for="Ajudariacapue" class="w-form-label">Não</span></label></div>
            </div>
         </p><p>
         	 Já conhece o crédito Justo?
        <div class="w-row" style=" width: 20%;">
         
           
            <div class="w-row">
              <div class="w-col w-col-6"><label class="w-checkbox checkbox-field"><input type="radio" value="Sim" id="conhececj" name="conhececj" data-name="conhececj" class="w-checkbox-input"><span for="conhececj" class="checkbox-label w-form-label">Sim<br>‍</span></label></div>
              <div class="w-col w-col-6"><label class="w-checkbox"><input type="radio" value="Nao" id="conhececj" name="conhececj" data-name="conhececj" class="w-checkbox-input"><span for="conhececj" class="w-form-label">Não</span></label></div>
            </div>
          </div>
          
        </p><p>
        	Quer receber um contato da equipe?
        <div class="w-row" style=" width: 20%;">
        	
          
            
            <div class="w-row">
              <div class="w-col w-col-6"><label class="w-checkbox checkbox-field"><input type="radio" value="Sim" id="contatar" name="contatar" data-name="contatar" class="w-checkbox-input"><span for="contatar" class="checkbox-label w-form-label">Sim<br>‍</span></label></div>
              <div class="w-col w-col-6"><label class="w-checkbox"><input type="radio" value="Nao" id="contatar" name="contatar" data-name="contatar" class="w-checkbox-input"><span for="contatar" class="w-form-label">Não</span></label></div>
            </div>
          </div>
          <center><input type="submit" value="Enviar" id="EnviarBTN" style="display: block;
    width: 33vh;
    
    border-radius: 10px;
    background-color: #1d6d8a;
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    color: white;
    border: none;
    cursor: grab;
    padding: 8.5px 10px;"></center>
     <center><button type="button" onclick="nextPrev(-1)" style="display: block;
    width: 33vh;
    margin-top: 15px;
    border-radius: 10px;
    background-color: #1d6d8a;
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;">Voltar</button></center>
        </div>
</p>
        <br>
        
  </div>
  <div style="overflow:auto;">
    <center><div style="float:center;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="display: block;
    width: 33vh;
    border-radius: 10px;
    background-color: #1d6d8a;
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;">Voltar</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)" style="display: block;
    width: 33vh;
    margin-top: 15px;
    border-radius: 10px;
    background-color: #1d6d8a;
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;">Continuar</button>
    </div><center>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
  <center><img src="pesquisa/images/logo_azul1.png" style="margin-bottom: 10px; margin-top: 20px;width: 100px;"></center>
</form>



<script>

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("prevBtn").style.display = "none";
    

    
  } else {
    document.getElementById("nextBtn").innerHTML = "Continuar";
    document.getElementById("nextBtn").style.display = "block";
    
     

  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>

</body>
</html>
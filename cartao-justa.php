<?php
    require_once('vendor/autoload.php');
    $publickey = "6Lcg5cgUAAAAAAXBdML5XyjgLpWLypN18DRceYG-";
    $recaptcha = new \ReCaptcha\ReCaptcha($publickey);
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Jul 19 2019 11:12:07 GMT+0000 (UTC)  -->
<html data-wf-page="5d1e96a90663cd10d61e5619" data-wf-site="5cd4a4856c861f4662cebcb7">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148482305-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148482305-1');
</script>

  <!-- Facebook Pixel Code -->
<script>
!funcfbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.tion(f,b,e,v,n,t,s)
{if(f.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '410924269608452');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=410924269608452&ev=PageView(44 B)
https://www.facebook.com/tr?id=410924269608452&ev=PageView

&noscript=1"/>
</noscript>
  <meta charset="utf-8">
  <title>Cartão Justo</title>
      <meta name="author" content="Justa Pagamentos">
  <meta property="og:image" itemprop="image" content="/images/justa-com-vc.jpg">

  <!-- No need to change anything here -->
  <meta property="og:type" content="website" />
  <meta property="og:image:type" content="image/jpeg">

  <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
  <meta property="og:image:width" content="300">
  <meta property="og:image:height" content="300">
  <meta name="keywords" content="cartão, justo, maquininha, cartao, digital, elo, justa, pagamentos, justapagamentos, justacomvc, com, vc, pagamento, debito, credito, crédito, débito, justos, transferir, dinheiro, disponivel, vendas, controlar, negócio, sem, consulta, conta, bancária, digital, gestão, fácil, transparente"/>
  <meta name="description" content="A Justa criou mais uma forma para você controlar o seu negócio. Em breve você poderá transferir o dinheiro disponível de suas vendas para o seu cartão Justo. Isso sem precisar de uma conta bancária e sem consulta de crédito. Tudo para uma gestão fácil e transparente.">
  <meta name="copyright" content="2020 - Todos os Direitos Reservados" />
  <meta property="og:url" content="https://justa.com.vc/cartao-justa.php">
  <meta content="Crédito Justo" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/include-css.css">
  <link href="css/justa-cartao.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Montserrat Alternates:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
   <link href="images/logo.png" rel="shortcut icon" type="image/x-icon">
   <link href="images/logo.png" rel="apple-touch-icon">
  
  <style>.w-container {max-width: 1170px;} @media(max-width:480px) { #noformob {display: none;}}

@media(min-width: 900px) {
h2#opcao {
    position: absolute;
    width: 23vw;
    color: #fff8dc00;
    height: 60px;
}}

@media(max-width: 900px) {
h2#opcao {
    position: absolute;
    width: 90vw;
    color: #fff8dc00;
    height: 60px;
}}

@media screen and (max-width: 479px) {
.image-64 {
    width: 85%;
}
}
</style>



  <!-- Integração com o Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnload&render=explicit" async defer></script>

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script>
$( "h2#opcao" ).click(function() {
  var text = $( this ).text();
  $( "input#result" ).val( text );
});
</script>
</head>
<body class="body">
    <div class="section-copy1-copy-copy">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-copy w-nav">
      <div class="w-container"><a href="index.html" class="brand-7 w-nav-brand"><img src="images/logo_azul1.png" alt="" class="image-5"></a>
        <nav role="navigation" class="nav-menu w-nav-menu"><a href="index.php" class="nav-link w-nav-link">Somos a Justa</a>
          <div data-delay="0" class="w-dropdown">
            <div class="nav-link-copy-copy w-dropdown-toggle">
              <div class="icon w-icon-dropdown-toggle"></div>
              <div>Produtos</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list"><a href="maquininhas.php" class="dropdown-link-3-copy4 w-dropdown-link w--current">Maquininhas</a><a href="credito-justo.php" class="dropdown-link-3-copy4 w-dropdown-link">Crédito Justo</a><a href="parcelinha-justa.html" class="dropdown-link-3-copy4 w-dropdown-link">Parcelinha Justa</a><a href="linkou.php" class="dropdown-link-3-copy4 w-dropdown-link">Linkou</a><a href="justa-mais-tef.php" class="dropdown-link-4 w-dropdown-link">Justa Mais (TEF)</a><a href="cartao-justa.php" class="dropdown-link-3-copy4 w-dropdown-link">Cartão Justo</a><a href="qr-code.html" class="dropdown-link-4 w-dropdown-link">QR Code</a></nav>
          </div><a href="sobre-a-justa.html" class="nav-link w-nav-link">Sobre a Justa</a><a href="seja-um-justo.php" class="nav-link w-nav-link">Seja um representante</a><a href="blog-justa.html" class="nav-link w-nav-link">Papo Justo</a><span  style="position: relative;"><span  style="margin-right: 10px;">Login:</span><input type="text" style="padding-left: 10px !important; color: #FFF; !important;" placeholder="E-mail" id="login" class="button"><img src="images/bt-acesso.png" class="botlog" onClick="Login()" alt="Conecte-se ao portal" ></span></nav></nav>
        <div class="menu-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div><a href="#pedir"><img src="images/cartao-justa-desktop.png" srcset="images/cartao-justa-desktop.png 500w, images/cartao-justa-desktop.png 1080w, images/cartao-justa-desktop.png 1600w, images/cartao-justa-desktop.png 1920w" sizes="100vw" alt="" class="image-57"><img src="images/cartao-justa-mobile.jpg" srcset="images/cartao-justa-mobile.jpg 500w, images/cartao-justa-mobile.jpg 800w" sizes="100vw" alt="" style="width: 100% !important;" class="image-63"></a>
  <div class="section-23">
    <div class="columns-40 w-row">
      <div class="column-63 w-col w-col-5 w-col-small-6"><img src="images/pedir-cartao-de-credito.jpg" srcset="images/pedir-cartao-de-credito.jpg 500w, images/pedir-cartao-de-credito.jpg 800w, images/pedir-cartao-de-credito.jpg 841w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 48vw, (max-width: 991px) 41vw, 100vw" alt="" class="image-60"></div>
      <div class="column-65 w-col w-col-7 w-col-small-6">
        <p class="paragraph-15">E se suas vendas através da maquininha Justa fossem diretamente para um cartão?</p><p class="paragraph-15">A Justa está criando mais uma forma para você controlar o seu negócio. Em breve você poderá transferir o dinheiro disponível de suas vendas para o seu Cartão Justo. Isso sem precisar de uma conta bancária e sem consulta de crédito. Tudo para uma gestão fácil e transparente.</p>
        <div class="columns-43 w-row">
          <div class="w-col w-col-6"><a href="#pedir"><h2 id="opcao">Não tenho a maquininha</h2></a><img src="images/melhor-cartao-de-credito-para-autonomos.png" alt="" class="image-64"></div>
          <div class="w-col w-col-6"><a href="#pedir"><h2 id="opcao">Já tenho a maquininha</h2></a><img src="images/cartao-de-credito-maquininha-justa.png" alt="" class="image-64"></div>
        </div>
      </div>
      <div class="columns-44 w-row">
    <div class="column-66 w-col w-col-6 w-col-small-6"><a href="#pedir"><h2 id="opcao">Não tenho a maquininha</h2></a><img src="images/melhor-cartao-de-credito-para-autonomos.png" alt="" class="image-64"></div>
    <div class="column-67 w-col w-col-6 w-col-small-6"><a href="#pedir"><h2 id="opcao">Já tenho a maquininha</h2></a><img src="images/cartao-de-credito-maquininha-justa.png" alt="" class="image-64"></div>
  </div>
    </div>

  </div>
  
  <div class="section-26">
    <div class="w-row">
      <div class="column-68 w-col w-col-5"><img src="images/pedir-cartao-de-credito.jpg" srcset="images/pedir-cartao-de-credito.jpg 500w, images/pedir-cartao-de-credito.jpg 800w, images/pedir-cartao-de-credito.jpg 841w" sizes="(max-width: 991px) 100vw, 42vw" alt="" class="image-65"></div>
      <div class="column-69 w-col w-col-7" style="padding-top: 7vh;">
         <p class="paragraph-abc" style="font-size: 1.55vw; font-weight: 600; color: white !important; margin-left: 20px;">E se suas vendas através da maquininha Justa fossem diretamente para um cartão?</p>
        <p class="paragraph-15" style="font-size: 1.15vw; font-weight: 300; color: white !important; margin-left: 20px;">A Justa está criando mais uma forma para você controlar o seu negócio. Em breve você poderá transferir o dinheiro disponível de suas vendas para o seu cartão Justo. Isso sem precisar de uma conta bancária e sem consulta de crédito. Tudo para uma gestão fácil e transparente.</p>
        <div class="columns-45 w-row">
          <div class="w-col w-col-6"><a href="#pedir"><h2 id="opcao">Não tenho a maquininha</h2></a><img src="images/melhor-cartao-de-credito-para-autonomos.png" alt="" class="image-66"></div>
          <div class="w-col w-col-6"><a href="#pedir"><h2 id="opcao">Já tenho a maquininha</h2></a><img src="images/cartao-de-credito-maquininha-justa.png" alt="" class="image-67"></div>
        </div>
      </div>
    </div>
  </div><img src="images/pedir-cartao-de-credito.jpg" srcset="images/pedir-cartao-de-credito-p-500.jpeg 500w, images/pedir-cartao-de-credito-p-800.jpeg 800w, images/pedir-cartao-de-credito.jpg 841w" sizes="100vw" alt="" class="image-60-copy">
  <div class="section-24">
    <div class="columns-41 w-row">
      <div class="column-63-copy w-col w-col-6 w-col-small-6"><img src="images/controle-seu-dinheiro-com-facilidade.png" alt="" class="image-61">
        <p class="paragraph-16">Seu dinheiro sob controle e sem análise de crédito.</p>
      </div>
      <div class="column-64-copy w-col w-col-6 w-col-small-6"><img src="images/cartao-de-credito-sem-banco.png" alt="" class="image-61">
        <p class="paragraph-16">Não precisa de conta bancária.</p>
      </div>
    </div>
    <div class="columns-42 w-row">
      <div class="column-63-copy w-col w-col-6 w-col-small-6"><img src="images/maquininha-da-justa-com-cartao.png" alt="" class="image-61">
        <p class="paragraph-16">Dinheiro direto da maquininha para seu cartão.</p>
      </div>
      <div class="column-64-copy w-col w-col-6 w-col-small-6"><img src="images/cartao-de-credito-para-autonomos.png" alt="" class="image-61">
        <p class="paragraph-16">Um cartão de crédito em função do seu negócio.</p>
      </div>
    </div>
    <div class="columns-2 w-row">
      <div class="column-9 w-clearfix w-col w-col-7" data-ix="new-interaction-5">
        <h1 class="heading-3">De que vale uma<br>maquininha de cartões<br>se ela não for <strong>JUSTA?</strong></h1>
        <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões e aí que entramos em cena, com taxas JUSTAS, crédito fácil, rápido e sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p>
      </div>
      <div class="column-6-copy w-col w-col-5">
        <div class="columns-25 w-row">
          <div data-w-id="502e947a-3426-8493-ca8d-f085264b1073" class="column-3 w-col w-col-4"><img src="images/icone_5icone_1.png" alt="" class="image-3">
            <h1 class="heading-2-copy1">Sem pegadinhas</h1>
            <p class="_8">Meias verdades não devem se disfarçar de letras miúdas em nenhum contrato.</p>
          </div>
          <div data-w-id="502e947a-3426-8493-ca8d-f085264b1079" class="column-4-copy5 w-col w-col-4"><img src="images/icone_6icone_2.png" alt="" class="image-3">
            <h1 class="_2">Sem asterisco</h1>
            <p class="_9">Não precisamos de sinais gráficos. JUSTO é ser transparente com você.</p>
          </div>
          <div class="column-5 w-col w-col-4"><img src="images/icone_4icone_3.png" alt="" class="image-3">
            <h1 class="_4">Segurança</h1>
            <p class="_10">Total controle e segurança com seu sistema e ferramentas.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/maquininha-da-justa-com-cartao.png" alt="" class="image-3"></div>
          <div class="w-col w-col-9 w-col-tiny-9">
            <p class="_8">Dinheiro direto da maquininha para seu cartão;</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/cartao-de-credito-sem-banco.png" alt="" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <p class="_9">Não precisa de conta bancária;</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/cartao-de-credito-para-autonomos.png" alt="" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <p class="_10">Um cartão de crédito em função do seu negócio;</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/controle-seu-dinheiro-com-facilidade.png" alt="" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <p class="_11">Seu dinheiro sob controle e sem análise de crédito;</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-2">
    <h1 class="heading">Começamos nossa jornada<br><strong class="bold-text-10">com o apoio de gente grande</strong></h1>
    <div class="columns-29 w-row">
      <div class="w-clearfix w-col w-col-4 w-col-small-4"><img src="images/adiq.png" alt="" class="image-2" data-ix="new-interaction-4"></div>
      <div class="column-50 w-col w-col-4 w-col-small-4"><a href="https://www.a5.com.br" class="w-inline-block"><img src="images/A5-2.png" alt="" class="image" data-ix="new-interaction-4"></a>
        <div class="columns-30 w-row">
          <div class="w-col w-col-4 w-col-tiny-4"><img src="images/adiq.png" alt="" class="image-2-copy" data-ix="new-interaction-4"></div>
          <div class="column-49 w-col w-col-4 w-col-tiny-4"><img src="images/A5-2.png" alt="" class="image-copy" data-ix="new-interaction-4"></div>
          <div class="w-col w-col-4 w-col-tiny-4"><img src="images/5d1f4d07719f58e40fff7682_rede.png" alt="" class="image-copy-rede-copy" data-ix="new-interaction-4"></div>
        </div>
      </div>
      <div class="w-clearfix w-col w-col-4 w-col-small-4"><img src="images/5d1f4d07719f58e40fff7682_rede.png" alt="" class="image-copy-rede" data-ix="new-interaction-4"></div>
    </div>
  </div>
 
  <div class="section-25"><img src="images/quero-minha-maquininha-que-paga-boleto.png" srcset="images/quero-minha-maquininha-que-paga-boleto-p-500.png 500w, images/quero-minha-maquininha-que-paga-boleto.png 592w" sizes="100vw" alt="" class="image-62"></div>
  <div class="section-27" id="pedir">
    <h1 class="heading-20">Mais liberdade para movimentar seu dinheiro<br>e fazer crescer seu negócio.</h1>
    <p class="paragraph-17">Complete abaixo para pedir seu Cartão Justo.</p>
    <div class="w-form">
      <iframe name="contato" style="display:none" src="abc.php"></iframe>
      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-3" method="POST" action="ws/send_email/email_exemplo.php" target="contato"><input type="text" class="text-field-8 w-input" maxlength="256" name="name" data-name="Nome 2" placeholder="Nome" id="nome-cartao" required=""><input type="email" class="text-field-8 w-input" maxlength="256" name="mail" data-name="Email 5" style="text-transform: lowercase;" placeholder="Email" id="email-cartao" required=""><input type="text" class="text-field-8 w-input" maxlength="256" name="Telefone-2" data-name="Telefone 2" onBlur="mascaraTel(this.id)" onKeyUp="mascaraTel(this.id)" placeholder="WhatsApp" id="fone-cartao" required=""><input type="text" name="product" id="email-interesse" class="input-contato" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 35px; margin-top: 10px; display:none;" placeholder="o Cartão Justo" data-watermark="o Cartão Justo"><input type="text" class="text-field-8 w-input" maxlength="256" list="estados" name="Estado-2" data-name="Estado 2" placeholder="Estado" id="estado-cartao" required=""><input type="text" class="text-field-8 w-input" maxlength="256" name="Cidade-2" data-name="Cidade 2" placeholder="Cidade" id="cidade-cartao" required=""><script>
$( "h2#opcao" ).click(function() {
  var text = $( this ).text();
  $( "input#obs-cartao" ).val( text );
});
</script>
<input type="text" class="text-field-8 w-input" maxlength="256" name="maquininha" data-name="maquininha" placeholder="Você já tem a maquininha?" id="obs-cartao" list="simornot" required="">      <div class="row">
     <div class="col-md-12">
        <center><div class="g-recaptcha"  id="recaptcha" data-sitekey="6Lcg5cgUAAAAAAXBdML5XyjgLpWLypN18DRceYG-" data-callback="recaptcha_callback" data-expired-callback="disableSendBtn"></div></center>
        </div>
      </div>
      </div><center><div class="col-md-12 com-sm-12">
            <input type="submit" class="button w-button"  id="btnEnviaInteresse" style="display: none; width: 100px; text-align: center;"  onClick="EnviaCartao('cartao-justa.html', true, true)" value="Enviar">
            <a class="button w-button" style="background-color: #DDD;  width: 100px; display: block;";  id="btnEnviaInteresseDisabled" >Enviar</a>
            
            
            </div></center></form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  <div id="Contatos" class="contatos">
    <div class="columns-13 w-row">
      <div class="w-col w-col-6"><img src="images/textos_contato.png" alt="" class="image-23" id="noformob" ></div>
      <div class="column-51 w-col w-col-6">
        <div class="w-row">
          <div data-w-id="a3983a1b-f87b-d494-859e-dda5459ad6b9" class="column-32 w-col w-col-6" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><a href="tel:08008788307" target="_blank" class="link-block-4 w-inline-block w-clearfix"><img src="images/icone_1_contato.png" alt="" class="image-22"><h1 class="contato_1">0800 87 88 307</h1></a></div>
          <div data-w-id="a3983a1b-f87b-d494-859e-dda5459ad6b9" class="column-32 w-col w-col-6"><a href="mailto:ajuda@justa.com.vc" target="_blank" class="link-block-5 w-inline-block w-clearfix"><img src="images/icone_2_contato.png" alt="" class="image-22"><h1 class="contato_1">ajuda@justa.com.vc</h1></a></div>
        </div>
        <div class="columns-14 w-row">
          <div data-w-id="a3983a1b-f87b-d494-859e-dda5459ad6b9" class="column-34 w-clearfix w-col w-col-6"><img src="images/icone_3_contato.png" alt="" class="image-22">
            <h1 class="contato_1">Chat</h1>
          </div>
          <div data-w-id="a3983a1b-f87b-d494-859e-dda5459ad6b9" class="column-33 w-col w-col-6"><a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=5501149496347" target="_blank" class="link-block-6 w-inline-block w-clearfix"><img src="images/icone_4_contato.png" alt="" class="image-22"><h1 class="contato_1">+55 11 4949-6347</h1></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="columns-31 w-row" style="margin: 40px 5px;"><img src="images/textos_contato.png" alt="" class="image-23" id="23mobile">
    <div class="w-clearfix w-col w-col-6 w-col-tiny-6"><img src="images/icone_1_contato.png" alt="" class="image-22">
      <h1 class="contato_1">0800 87 88 307</h1>
    </div>
    <div class="w-col w-col-6 w-col-tiny-6"><a href="mailto:ajuda@justa.com.vc" target="_blank" class="link-block-5 w-inline-block w-clearfix"><img src="images/icone_2_contato.png" alt="" class="image-22"><h1 class="contato_1">ajuda@justa.com.vc</h1></a></div>
  </div>
  <div class="columns-32 w-row" style="padding-bottom: 7px; margin: 40px 5px;">
    <div class="w-clearfix w-col w-col-6 w-col-tiny-6"><img src="images/icone_3_contato.png" alt="" class="image-22">
      <h1 class="contato_1">Chat</h1>
    </div>
    <div class="w-col w-col-6 w-col-tiny-6"><a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=5501149496347" target="_blank" class="link-block-6 w-inline-block w-clearfix"><img src="images/icone_4_contato.png" alt="" class="image-22"><h1 class="contato_1">+55 11 4949-6347</h1></a></div>
  </div>
   <div class="section-6">
    <h1 class="heading-4-copy-copy1">Receba novidades e <strong>conteúdos da JUSTA</strong></h1>
    <div class="w-form">
      <div id="email-form" name="email-form" data-name="Email Form" class="form">
      <input type="email" class="text-field w-input" maxlength="256" name="email"  data-name="Name" placeholder="E-mail" id="email">
      <input type="button" onClick="Cadastro_email()" value="CADASTRAR" data-wait="Please wait..." class="submit-button-copy3 w-button"></div>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  <div class="section-7">
    <div class="text-block-2">Venha nos visitar, tomar um café e comer uma paçoca!</div>
    <div class="columns-4 w-row">
      <div class="column-10 w-col w-col-2"><img src="images/logo_azul1.png" alt="" class="image-5"></div>
      <div class="w-col w-col-3">
        <p class="paragraph-4"><a href="https://www.google.com/maps/place/JUSTA+COM+VC/@-23.4977729,-46.8307726,21z/data=!4m5!3m4!1s0x0:0xdb55bd5c09eb9664!8m2!3d-23.5049645!4d-46.849015" target="_blank" class="link-4"><strong class="bold-text-4">São Paulo<br>‍</strong><span style="font-size: 8pt;">Alameda Xingu, 350 – 23º andar – Conjunto 2302 Alphaville Centro Industrial e Empresarial, Barueri / SP – CEP 06.455-911</span></a><br></p>
      </div>
      <div class="w-col w-col-3">
        <p class="paragraph-4"><a href="https://goo.gl/maps/aEujw84xMokDW5Vv7" target="_blank" class="link-5"><strong class="bold-text-5">Recife<br>‍</strong><span style="font-size: 8pt;">Av. Engenheiro Antônio de Góes, 742 – sala 401, Edifício JOPIN, Bairro Pina – Recife/PE – CEP 51110-000</span></a></p>
      </div>
      <div class="w-col w-col-4">
        <p class="paragraph-4" ><strong class="bold-text">Contato<br></strong><span style="font-size: 8pt;"><strong>Para telefone fixo:</strong>  <strong style="font-weight: 800;">0800</strong> 87 88 307<br><strong>Para telefone móvel:</strong> (11) 4000-1688<br><strong>Whatsapp:</strong> (11) 4949-6347<br><strong>E-mail:</strong>  ajuda@justa.com.vc<br>‍</p></span>
       
        
        
        
      </div>
    </div><img src="images/linha.png" alt="" class="image-8">
    <p class="paragraph-4-copy1">2019 - Todos os Direitos Reservados | Desenvolvido por <a href="https://epicacreative.com.br" target="_blank" class="link-3">ÉPICA CREATIVE</a></p>
    <div class="div-block-4" data-ix="new-interaction-3" style="transform: translateX(0px) translateY(0px) translateZ(0px); transition: transform 1550ms ease 0s; margin-top: 3vw;"><a href="https://www.facebook.com/justa.com.vc/" target="_blank" class="link-block-2 w-inline-block"><img src="images/facebook.png" alt="" class="image-6"></a><a href="https://www.instagram.com/justacomvc/" target="_blank" class="link-block w-inline-block"><img src="images/instagram.png" alt="" class="image-7"></a><a href="https://www.youtube.com/channel/UCfBLpdZGlzkNHQ6rlQq_eJw" target="_blank" class="link-block w-inline-block"><img src="images/youtube.png" alt="" class="image-7"></a><a href="https://www.linkedin.com/company/justa-pagamentos/" target="_blank" class="link-block-2 w-inline-block"><img src="images/linkedin.png" alt="" class="image-6"></a><center style="
    top: 20px;
    position: relative;
"><a href="sobre-a-justa.html#trabalheconosco" class="trabalheconosco w-button"  style="line-height: 25px; font-size: 14px; width: 200px;">Trabalhe Conosco</a></center></div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
  <!-- Modal LOGIN-->
  <div class="modal fade" id="modalLogin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">Escolha um portal</h4>
        </div>
        <div class="modal-body">
        <div class="w-form-done" style="display: block !important;">
          <div><a href="https://sualoja.justa.com.vc/#/login" class="button w-button" target="_blank">Login LOJISTA</a>&nbsp;<a href="https://justo.justa.com.vc/" target="_blank" class="button w-button">Login JUSTO</a>
        <br>
        <a onClick="Voltar()" class="button w-button" target="_blank">Voltar</a>
      </div>
        </div>
        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      
    </div>
  </div>  

  <!-- Modal CONTATO-->
  <div class="modal fade" id="modalcartao" role="dialog">
    <div class="modal-dialog modal-lg">

    
      <!-- Modal content-->
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body"  id="corpo-modal">

 <div class="row">
        <div class="col-12"><center><h3 style="color: rgb(0, 105, 145);">Peça sua maquininha!</h3><h5 style="color: rgb(0, 105, 145);">Comece a vender com as taxas mais JUSTAS do mercado.</h5></center></div>
        <iframe name="contato" style="display:none" src="abc.php"></iframe>
        <form method="POST" action="ws/send_email/email_exemplo.php" target="contato">
        <div class="desktop">
        <div class="row" style="margin-top: 35px">
        <div class="col-md-12 col-sm-12"><input data-watermark="Nome" name="name" type="text" id="nome-cartao" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 95.5%; height: 35px; margin-top: 10px;"  class="input-contato col-12"></div>
        </div>  
        
        
        
        <div class="row" style="z-index: 10000000">
          
            <div class="col-md-6 col-sm-12"><input type="text" name="mail" id="email-cartao" class="input-cartao" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 35px; margin-top: 10px;" data-watermark="Email"></div>
        
        
          <div class="col-md-6 com-sm-12"><input type="text" id="fone-cartao" onBlur="mascaraTel(this.id)" onKeyUp="mascaraTel(this.id)" data-watermark="DDD + Telefone" class="input-cartao" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 35px; margin-top: 10px;" ></div>
        
        </div>  
        <div class="row"> 
        <div class="col-md-6 com-sm-12"><input type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 35px; width: 90%; margin-top: 10px;"  id="estado-cartao" list="estados" data-watermark="Estado" class="input-cartao"></div>
        <div class="col-md-6 com-sm-12"><input data-watermark="Cidade" type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc;  width: 90%; height: 35px; margin-top: 10px;"  id="cidade-cartao" class="input-cartao"></div>
        </div>

        <div class="row">
          <div class="col-md-12 com-sm-12">
          <input type="text" name="product" id="email-interesse" class="input-contato" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 35px; margin-top: 10px; display:none;" placeholder="o Cartão Justo" data-watermark="o Cartão Justo">

            <!-- <p>Como descobriu a Justa?:</p> -->

            <input data-watermark="Como você descobriu a Justa?" list="how_did_you_meet_us" type="text" id="canal-cartao" class="input-cartao" 
            style="border: 1px solid rgb(204, 204, 204); height: 35px; border-radius: 15px; padding: 10px 15px; width: 95.5%; margin-top: 10px; resize: none; color: rgb(168, 168, 168);">
            
            <datalist id="how_did_you_meet_us">
                <option value="Facebook">Facebook</option>
                <option value="Instagram">Instagram</option>
                <option value="Google">Google</option>
                <option value="Linkedin">Linkedin</option>
                <option value="Indicação">Indicação</option>
                <option value="Feiras">Feiras de Eventos</option>
                <option value="Prospecção">Prospecção Externa</option>
            </datalist>
          </div>
        </div>
        
        <div class="row"> 
        <div class="col-md-12 col-sm-12"><textarea style="border: 1px solid black; border-radius: 15px; padding: 10px 15px;border-color: #ccc; width: 95.5%;  margin-top: 10px; resize: none;"  type="text" cols="40" rows="5" id="obs-cartao" data-watermark="Mensagem" class="input-contato col-12"></textarea></div>
      </div>

      

      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="g-recaptcha"  id="recaptcha" data-sitekey="6Lcg5cgUAAAAAAXBdML5XyjgLpWLypN18DRceYG-" data-callback="recaptcha_callback" data-expired-callback="disableSendBtn"></div>
        </div>
      </div>
      <div class="row" style="text-align: center">  
                <center><div class="col-md-12 com-sm-12">
            <input type="submit" class="button w-button"  id="btnEnviaInteresse" style="display: none; width: 100px; text-align: center;"  onClick="EnviaInteresse('cartao', true, true)" value="Enviar">
            <a class="button w-button" style="background-color: #DDD;  width: 100px; display: block;";  id="btnEnviaInteresseDisabled" >Enviar</a>
            
            </div></center>
        </div> 
        </form>        
        <div class="row" style="text-align: center"><img src="images/imagem_modal.png" class="imagem-modal" alt="modal"></div>
      </div>


        </div>
      
    </div>
  </div>  
  </div> 
 
 <!-- Modal CONTATO-->
  <div class="modal fade" id="modalTrabalhe" role="dialog">
    <div class="modal-dialog modal-lg">

    
      <!-- Modal content-->
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body"  id="corpo-modal">

      <div class="row">
        <div class="col-12"><h3 style="color: rgb(0, 105, 145);">Entre para o time</h3><h5 style="color:rgb(0, 105, 145);">Coloque os seus dados abaixo, venha fazer parte do time!</h5></div>
     
        <form method="POST" action="trabalhe-conosco/processa.php" enctype="multipart/form-data" >
        <div class="row" style="margin-top: 30px;">
          
            <div class="col-md-6 col-sm-12"><input type="text" data-watermark="Nome" name="nome" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" class="input-cartao"></div>
        
        
          <div class="col-md-6 com-sm-12"><input type="text" data-watermark="Sobrenome" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" name="inputsobrenome" class="input-cartao"></div>
        
        </div>  

        <div class="row" style="margin-bottom: 10px;">
          
            <div class="col-md-6 com-sm-12"><input list="Escolaridade" data-watermark="Escolaridade" class="oneperline" name="inputescolaridade" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;">
              <datalist id="Escolaridade">
               
               <option value="Fundamental">Ensino Fundamental</option>
               <option value="Médio">Ensino Médio</option>
               <option value="Superior">Ensino Superior</option>
            </datalist></div>
        
        
          <div class="col-md-6 com-sm-12"><input list="area" data-watermark="Área de atuação" class="oneperline" name="inputarea" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;">
            <datalist id="area">
               
               <option value="Comercial">Comercial</option>
               <option value="Financeiro">Financeiro</option>
               <option value="Desenvolvimento de Software">Desenvolvimento de Software</option>
               <option value="QA">QA</option>
               <option value="Atendimento ou Suporte Técnico">Atendimento ou Suporte Técnico</option>
               <option value="Pessoas e Recursos Humanos">Pessoas e Recursos Humanos</option>
               <option value="Processos e Projetos">Processos e Projetos</option>
               <option value="Comunicação e Marketing">Comunicação e Marketing</option>
               <option value="Logística">Logística</option>
            </datalist></div>
        
        </div>  
        
        
        
        <div class="row" style="z-index: 10000000">
          
          <div class="col-md-6 com-sm-12"><input type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" name="inputmail" class="input-cartao" data-watermark="Email" ></div>
        
        
          <div class="col-md-6 com-sm-12"><input type="text" id="fone-cartao" name="inputtel" onBlur="mascaraTel(this.id)" onKeyUp="mascaraTel(this.id)" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" data-watermark="DDD + Telefone" class="input-cartao"></div>
        
        </div>  
        <div class="row"> 
        <div class="col-md-6 com-sm-12"><input type="text" list="estados" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" name="inputestado" data-watermark="Estado" class="input-cartao"></div>
        <div class="col-md-6 com-sm-12"><input type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" data-watermark="Cidade" name="inputcidade" class="input-cartao"></div>
        </div>
        <div class="row"> 
        <div class="col-md-12 col-sm-12" style="margin-top: 10px; "><textarea style="height: 150px; resize: none; width:100%; border: 1px solid black; border-radius: 15px; border-color: #ccc; padding: 10px 15px;" data-watermark="Carta de apresentação" type="text" cols="40" rows="5" name="inputcarta" maxlength="300" style="" class="input-contato col-12"></textarea></div></div>
        <div class="col-md-12 col-sm-12" style="margin-top: 30px;"><p >Seu currículo:</p><input type="file" name="Arquivo" id="Arquivo" style="margin-top: 15px;" accept="image/*,.pdf,.docx" required><br></div>
      </div>
        <div class="row" style="text-align: center">  
        <div class="col-md-12 com-sm-12"><input class="enviar" type="submit" name="botao" value="enviar"></a></div>
        </form>

        </div>        
        <div class="row" style="text-align: center; margin-top: 30px;"><img src="images/imagem_modal.png" class="imagem-modal" alt="modal"></div>
      </div>


        </div>
      
    </div>
  </div>  
  </div> 

  <script>
      function Cadastro_email(){
      var pagina = 'cadastro-email';
      if($("#email").val()==""){alert('Por favor informe um e-mail válido!'); return false;}
      var email = $("#email").val();
      $.ajax({
      url: 'ws/comunicacao.php',
      type: 'POST',
      data: {pagina : pagina, email : email},
      success: function(response){
        $("#email").val("");
        alert(response.trim());
      //  $("#resposta").html(response.trim());

      },
      error: function(){
      alert('Erro ao se conectar com o servidor, tente novamente ou contacte o administrador do site.');
      }
      });   
    }
    
    function AbreModal(){
      $('#modalLogin').modal();
    }

        function recaptcha_callback(){
            $('#btnEnviaInteresse').css('display', 'block');
        }

        function disableSendBtn(){
            $('#btnEnviaInteresse').css('display', 'none');
        }

        let _captchaTries = 0;
        function recaptchaOnload() {
            _captchaTries++;
            if (_captchaTries > 9)
                return;
            if ($('.g-recaptcha').length > 0) {
                grecaptcha.render("recaptcha", {
                    sitekey: '6Lcg5cgUAAAAAAXBdML5XyjgLpWLypN18DRceYG-',
                    callback: function() {
                        $('#btnEnviaInteresse').css('display', 'block');
                        $('#btnEnviaInteresseDisabled').css('display', 'none');
                    }
                });
                return;
            }
            window.setTimeout(recaptchaOnload, 1000);
        }

  </script> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/include-css.css">
  
  <!-- Integração com funil de vendas -->
  <script src="js/funil.js"></script>
  
  <script src="tracking.js"></script>
  <script>
    add_url_to_tracking(true, 'maquininhas.html');
    </script>
    
    <script src="js/integra-login.js" ></script>  
    <script src="js/integra-cadastro.js" ></script> 

  <!-- Chat do Movidesk -->
  <script type="text/javascript">var mdChatClient="F414C454C77942F0BC1F835ACFFC60C8";</script>
  <script src="https://chat.movidesk.com/Scripts/chat-widget.min.js"></script>
  <!-- Chat do Movidesk fim -->
 
<!--FIM INTERGRACAO BRUNO --> 
</html>
<datalist id="estados">
                                            <option value="Acre"></option>
                                            <option value="Alagoas">Alagoas</option>
                                            <option value="Amapá">Amapá</option>
                                            <option value="Amazonas">Amazonas</option>
                                            <option value="Bahia">Bahia</option>
                                            <option value="Ceará">Ceará</option>
                                            <option value="Distrito Federal">Distrito Federal</option>
                                            <option value="Espirito Santo"></option>
                                            <option value="Goiás">Goiás</option>
                                            <option value="Maranhão">Maranhão</option>
                                            <option value="Mato Grosso">Mato Grosso</option>
                                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                            <option value="Minas Gerais">Minas Gerais</option>
                                            <option value="Pará">Pará</option>
                                            <option value="Paraiba"></option>
                                            <option value="Paraná">Paraná</option>
                                            <option value="Pernambuco">Pernambuco</option>
                                            <option value="Piauí">Piauí</option>
                                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                            <option value="Rondônia">Rondônia</option>
                                            <option value="Roraima">Roraima</option>
                                            <option value="Santa Catarina">Santa Catarina</option>
                                            <option value="São Paulo">São Paulo</option>
                                            <option value="Sergipe">Sergipe</option>
                                            <option value="Tocantins">Tocantins</option>
                                          </select></datalist>
                                          <datalist id="simornot">
                                            <option value="Tenho maquininha">Sim</option>
                                            <option value="Nao tenho maquininha">Não</option>
                              
                                          </select></datalist>

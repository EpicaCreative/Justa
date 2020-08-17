<?php
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

    require 'Admin/funcoes/funcoes.php';

    $sql_command = "SELECT * FROM tb_banners WHERE ativo=1 AND pagina='index.html';";
    $results_mobile = mysqli_query(conexao(), $sql_command);
    $results_desktop = mysqli_query(conexao(), $sql_command);

?>


<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Jul 19 2019 11:12:07 GMT+0000 (UTC)  -->
<html data-wf-page="5cd4a4856c861fcc2ecebcb8" data-wf-site="5cd4a4856c861f4662cebcb7">
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
<!-- End Facebook Pixel Code -->
  <meta charset="utf-8">
  <title>Justa Com Vc</title>
  <meta name="author" content="Justa Pagamentos">
  <!-- Replace   «example.com/image01.jpg» with your own -->
  <meta property="og:image" itemprop="image" content="https://site-staging.justa.com.vc/images/justa-com-vc.jpg">

  <!-- No need to change anything here -->
  <meta property="og:type" content="website" />
  <meta property="og:image:type" content="image/jpeg">

  <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
  <meta property="og:image:width" content="300">
  <meta property="og:image:height" content="300">
  <meta name="keywords" content="Pagamentos, Justa, Justa Com Vc, maquininha, mauininha justa, tecnologia, soluções, sistemas de pagamento, maquina de cartao, maquininha de cartao, cartão de crédito, maquininha cartão, cartão, elo, rede, adiq, a5, crédito, link, link de pagamentos, pagamento, pague, pequeno empreendedor, empresario, pequeno empresario, taxas justas, melhores taxas, melhores, taxas, tef, qr code, qr, code, mercado livre, mercado, justo, franquia, parceria, seja, um, justo, ganhar dinheiro, internet"/>
  <meta property="og:url" content="https://justa.com.vc">
  <meta name="copyright" content="2020 - Todos os Direitos Reservados" />
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/justa-home-webflow.css" rel="stylesheet" type="text/css">
  <link href="css/justa-home.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Montserrat Alternates:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/logo.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/logo.png" rel="apple-touch-icon">
  <style>.w-container {max-width: 1301px;} 
   .imgicone {
 
  margin-right: auto;
  margin-left: auto;
}



@media (min-width:800px;){
	#mobile-only{ display: none;}

}



.imgicone:hover {
  -webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-360DEG) rotateZ(0) skew(0, 0); transition: all 1s ease-in-out 0.5s;
} 



.hideonmob {
    display: none !important;
}
</style>

<meta name="description" content="Mais que uma maquininha de cartão, somos uma máquina de crédito para seu negócio. Sem asteriscos e letras miúdas, de maneira fácil, rápida e JUSTA.">
</head>
<body class="body">
  <div class="section">
    <div data-animation="slide" data-disable-swipe="1" data-duration="500" data-infinite="1" class="slider w-slider">
      <div class="mask w-slider-mask">
        <div class="slide w-slide"></div>
        <div class="w-slide"></div>
      </div>
      <div class="left-arrow w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="right-arrow w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="slide-nav w-slider-nav"></div>
    </div>
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-copy w-nav">
      <div class="w-container"><a href="index.html" class="brand-7 w-nav-brand w--current"><img src="images/logo_azul1.png" alt="Melhores taxas maquininha de cartão" class="image-5"></a>
        <nav role="navigation" class="nav-menu w-nav-menu"><a href="index.php" class="nav-link w-nav-link">Somos a Justa</a>
          <div data-delay="0" class="w-dropdown">
            <div class="nav-link-copy-copy w-dropdown-toggle">
              <div class="icon w-icon-dropdown-toggle"></div>
              <div>Produtos</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list"><a href="maquininhas.php" class="dropdown-link-3-copy4 w-dropdown-link w--current">Maquininhas</a><a href="credito-justo.php" class="dropdown-link-3-copy4 w-dropdown-link">Crédito Justo</a><a href="parcelinha-justa.html" class="dropdown-link-3-copy4 w-dropdown-link">Parcelinha Justa</a><a href="linkou.php" class="dropdown-link-3-copy4 w-dropdown-link">Linkou</a><a href="justa-mais-tef.php" class="dropdown-link-4 w-dropdown-link">Justa Mais (TEF)</a><a href="cartao-justa.php" class="dropdown-link-3-copy4 w-dropdown-link">Cartão Justo</a><a href="qr-code.html" class="dropdown-link-4 w-dropdown-link">QR Code</a></nav>
          </div><a href="sobre-a-justa.html" class="nav-link w-nav-link">Sobre a Justa</a><a href="seja-um-justo.php" class="nav-link w-nav-link">Seja um Representante</a><a href="blog-justa.html" class="nav-link w-nav-link">Papo Justo</a><span  style="position: relative;"><span  style="margin-right: 10px;">Login:</span><input type="text" style="padding-left: 10px !important; color: #FFF; !important;" placeholder="E-mail" id="login" class="button"><img src="images/bt-acesso.png" class="botlog" alt="Conecte-se ao portal" onClick="Login()" ></span></nav></nav>
        <div class="menu-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    
    <!-- MOBILE BANNER -->
    <div data-delay="9000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" data-duration="9000" class="slider-4 w-slider">
    <div class="w-slider-mask">
     <?php while($array = mysqli_fetch_array($results_mobile)){ ?>
        <div class="w-slide">
        <a target="_blank" href="<?php print($array['url']); ?>">
            <img src="<?php print('_images/'.$array['imagem_low']) ?>" srcset="<?php print('_images/'.$array['imagem_low']) ?> 500w, <?php print('_images/'.$array['imagem_low']) ?> 800w" sizes="100vw"  alt="">
        </a>
        </div>
        
     <?php } ?>
    </div>
    <div class="w-slider-arrow-left"></div>
    <div class="w-slider-arrow-right"></div>
    <div class="w-slider-nav w-round"></div>
  </div>

    <!-- DESKTOP BANNER -->
  <div data-delay="9000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" data-duration="2000" class="slider-3 w-slider">
    <div class="w-slider-mask">
    <?php while($array = mysqli_fetch_array($results_desktop)){ ?>

        <div class="slide-3 w-slide">
        <a target="_blank" href="<?php print($array['url']); ?>">
            <img src="<?php print('_images/'.$array['imagem_high']) ?>" srcset="<?php print('_images/'.$array['imagem_high']) ?> 500w, <?php print('_images/'.$array['imagem_high']) ?> 800w, <?php print('_images/'.$array['imagem_high']) ?> 1080w, <?php print('_images/'.$array['imagem_high']) ?> 1920w" style="width:100%;" sizes="(max-width: 1920px) 100vw, 1920px" alt="Trabalho autônomo que da dinheiro">
        </a>
        </div>
      
      <?php } ?>
    </div>
    <div class="w-slider-arrow-left"></div>
    <div class="w-slider-arrow-right"></div>
    <div class="w-slider-nav w-slider-nav-invert w-round"></div>
  </div>
  
   

  </div>
  <div class="icones">
    <div class="columns-16 w-row">
      <div class="w-col w-col-4"><a href="maquininhas.html" class="w-inline-block"><img src="images/maquininha.png" alt="Maquininha de cartão com as melhores taxas" class="imgicone"></a></div>
      <div class="w-col w-col-4"><a href="justa-mais-tef.html" class="w-inline-block"><img src="images/Justa-Mais.png" alt="Tef maquina de cartão" class="imgicone"></a></div>
      <div class="w-col w-col-4"><a href="credito-justo.html" class="w-inline-block"><img src="images/Credito-Justo.png" alt="Credito para micro empresas" class="imgicone"></a></div>
    </div>
  </div>
  <div class="icones-mobile">
    <div class="w-row">
      <div class="column-52 w-col w-col-4 w-col-small-4 w-col-tiny-4"><a href="maquininhas.html" class="w-inline-block"><img src="images/maquininha.png" alt="Qual a melhor maquina de cartão com menor taxa" class="image-39"></a></div>
      <div class="column-53 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/Justa-Mais.png" alt="sistema tef"></div>
      <div class="column-54 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/Credito-Justo.png" alt="Crédito para empresas"></div>
    </div>
  </div>
  <div class="section-2">
    <h1 class="heading">Contamos <strong class="bold-text-10">com o<br> apoio de gente grande</strong></h1>
    <div class="columns-29 w-row" style="">
      <div class="w-clearfix w-col w-col-3 w-col-small-3"><img src="images/bs2.png" alt="Qual a melhor maquininha de cartão" class="image-2" data-ix="new-interaction-4"></div>
      <div class="column-50 w-col w-col-3 w-col-small-3"><a href="https://www.a5.com.br" class="w-inline-block"><img src="images/A5-2.png" alt="Qual é a melhor maquininha de cartão" class="image" data-ix="new-interaction-4"></a>
      	<div class="hideonmob" >

        <div class="columns-30 w-row" >
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/bs2.png" alt="Maquininha de cartão com as melhores taxas" class="image-2-copy" data-ix="new-interaction-4"></div>
          <div class="column-49 w-col w-col-3 w-col-tiny-3"><img src="images/A5-2.png" alt="Qual máquina de cartão usar" class="image-copy" data-ix="new-interaction-4"></div>
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/5d1f4d07719f58e40fff7682_rede.png" alt="Qual a melhor maquina de cartão com menor taxa" class="image-copy-rede-copy" data-ix="new-interaction-4" ></div>
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/logobtg.png" alt="Qual a melhor maquina de cartão com menor taxa" class="image-copy-rede-copy" data-ix="new-interaction-4" ></div>
        </div></div>
        <div id="mobile-only">
        <div class="columns-30 w-row">
          <div class="w-col w-col-6 w-col-tiny-6"><img src="images/bs2-home.png" style="float: initial;     width: inherit;
    padding-right: 0;" alt="Maquininha de cartão com as melhores taxas" class="image-2-copy" data-ix="new-interaction-4"></div>
          <div class="column-49 w-col w-col-6 w-col-tiny-6"><img src="images/A5-2.png" alt="Qual máquina de cartão usar" class="image-copy" data-ix="new-interaction-4"></div></div>
          <div class="columns-30 w-row">
          <div class="w-col w-col-6 w-col-tiny-6"><img src="images/rede-home.png" style="    float: initial;" alt="Qual a melhor maquina de cartão com menor taxa" class="image-copy-rede-copy" data-ix="new-interaction-4" ></div>
          <div class="w-col w-col-6 w-col-tiny-6"><img src="images/btg-home.png" style="    float: initial;"  alt="Qual a melhor maquina de cartão com menor taxa" class="image-copy-rede-copy" data-ix="new-interaction-4" ></div></div></div>
      </div>
      <div class="w-clearfix w-col w-col-3 w-col-small-3"><img src="images/5d1f4d07719f58e40fff7682_rede.png" alt="Qual a melhor maquininha de cartão para MEI" class="image-copy-rede" data-ix="new-interaction-4" style="margin-top: 25px;"></div>
      <div class="w-clearfix w-col w-col-3 w-col-small-3"><img src="images/logobtg.png" alt="Qual a melhor maquininha de cartão para MEI" class="image-copy-rede" data-ix="new-interaction-4" style="margin-top: 25px;"></div>
    </div>
  </div>
  <div id="sobre" class="section-3-copy1">
    <div data-animation="outin" data-duration="500" data-infinite="1" class="slider-5 w-slider">
      <div class="w-slider-mask">
        <div class="slide-4 w-slide">
          <h1 class="heading-3">De que vale uma<br>maquininha de cartões<br>se ela não for <strong>JUSTA?</strong></h1><img src="images/SABERMAIS.png" srcset="images/SABERMAIS-p-500.png 500w, images/SABERMAIS.png 507w" sizes="100vw" alt="Melhores taxas maquininha de cartao" class="image-38"></div>
        <div class="w-clearfix w-slide">
          <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões e aí que entramos em cena, com taxas JUSTAS, crédito fácil, rápido e sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p><img src="images/1.png" srcset="images/1-p-500.png 500w, images/1-p-800.png 800w, images/1.png 1030w" sizes="100vw" alt="Melhores taxas maquina de cartao" class="image-46"></div>
      </div>
      <div class="left-arrow-3 w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="right-arrow-3 w-slider-arrow-right"></div>
      <div class="slide-nav-3 w-slider-nav"></div>
    </div>
    <div class="columns-2 w-row">
      <div class="column-9 w-clearfix w-col w-col-7" data-ix="new-interaction-5">
        <h1 class="heading-3">De que vale uma<br>maquininha de cartões<br>se ela não for <strong>JUSTA?</strong></h1>
        <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões, é ai que entramos em cena, com taxas JUSTAS, Crédito fácil e Rápido. Sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p>
      </div>
      <div class="column-6-copy w-col w-col-5">
        <div class="columns-25 w-row">
          <div data-w-id="afc33bb2-4672-a793-0244-745ee6f9665f" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_1.png" alt="Taxas maquinas de cartao de crédito" class="image-3">
            <h1 class="heading-2-copy1">Sem pegadinhas</h1>
            <p class="_8">Meias verdades não devem se disfarçar de letras miúdas em nenhum contrato.</p>
          </div>
          <div data-w-id="afc33bb2-4672-a793-0244-745ee6f96660" class="column-4-copy5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_2.png" alt="Maquininha de cartão com as melhores taxas" class="image-3">
            <h1 class="_2">Sem asterisco</h1>
            <p class="_9">Não precisamos de sinais gráficos. JUSTO é ser transparente com você.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_3.png" alt="sistema tef" class="image-3">
            <h1 class="_4">Segurança</h1>
            <p class="_10">Total controle e segurança com seu sistema e ferramentas.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/icone_1.png" alt="Qual máquina de cartão usar" class="image-3"></div>
          <div class="w-col w-col-9 w-col-tiny-9">
            <h1 class="heading-2-copy1">Sem pegadinhas</h1>
            <p class="_8">Meias verdades não devem se disfarçar de letras miúdas em nenhum contrato.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/icone_2.png" alt="Taxas maquinas de cartao de crédito" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_2">Sem asterisco</h1>
            <p class="_9">Não precisamos de sinais gráficos. JUSTO é ser transparente com você.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/icone_3.png" alt="Segurança em primeiro lugar" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_4">Segurança</h1>
            <p class="_10">Total controle e segurança com seu sistema e ferramentas.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/icone_4.png" alt="Elo, Visa, Mastercard, Hipercard e mais 250 bandeiras de cartão" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_5">Principais bandeiras</h1>
            <p class="_11">Seus clientes merecem mais comodidade e você merece vender mais.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/icone_5.png" alt="Pós venda da Justa pronto para te ajudar diante de qualquer problema ou dúvida com sua maquininha." class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_6">Um justo sempre por perto</h1>
            <p class="_12">Nosso atendimento não é robotizado. Somos pessoas atendendo pessoas da melhor forma possível.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="images/icone_6.png" alt="linhas de crédito para empresas" class="image-3-copy2"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_7">Rápido, Fácil e Justo</h1>
            <p class="_13">Mais que uma maquininha de cartão, somos uma máquina de crédito para seu negócio.</p>
          </div>
        </div>
        <div class="columns-12 w-row">
          <div data-w-id="d97bc8ae-0dec-43fb-fd34-399e0ca09bf8" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_4.png" alt="Elo, Visa, Mastercard e Hipercard" class="image-3">
            <h1 class="_5">Principais bandeiras</h1>
            <p class="_11">Seus clientes merecem mais comodidade e você merece vender mais.</p>
          </div>
          <div data-w-id="d97bc8ae-0dec-43fb-fd34-399e0ca09bfc" class="column-4-copy6 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_5.png" alt="Equipe disponível para atendimento a qualquer hora em qualquer lugar." class="image-3">
            <h1 class="_6">Um justo sempre<br>por perto</h1>
            <p class="_12">Nosso atendimento não é robotizado. Somos pessoas atendendo pessoas da melhor forma possível.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_6.png" alt="Credito para micro empresas" class="image-3-copy2">
            <h1 class="_7">Rápido, Fácil e Justo</h1>
            <p class="_13">Mais que uma maquininha de cartão, somos uma máquina de crédito para seu negócio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sobre" class="section-3">
    <div class="columns-2-copy w-row">
      <div class="column-9 w-clearfix w-col w-col-7" data-ix="new-interaction-5">
        <h1 class="heading-3">De que vale uma<br>maquininha de cartões<br>se ela não for <strong>JUSTA?</strong></h1>
        <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões e aí que entramos em cena, com taxas JUSTAS, crédito fácil, rápido e sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p>
      </div>
      <div class="column-6-copy w-col w-col-5">
        <div class="w-row">
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022f9d" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_1.png" alt="" class="image-3">
            <h1 class="heading-2">Sem pegadinhas</h1>
            <p class="paragraph-3-copy">Meias verdades não devem se disfarçar de letras miúdas em nenhum contrato.</p>
          </div>
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022fa3" class="column-4-copy5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_2.png" alt="" class="image-3">
            <h1 class="heading-2">Sem asterisco</h1>
            <p class="paragraph-3-copy">Não precisamos de sinais gráficos. JUSTO é ser transparente com você.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_3.png" alt="" class="image-3">
            <h1 class="heading-2">Segurança</h1>
            <p class="paragraph-3-copy">Total controle e segurança com seu sistema e ferramentas.</p>
          </div>
        </div>
        <div class="columns-12 w-row">
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022fb0" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_4.png" alt="" class="image-3">
            <h1 class="heading-2">Principais bandeiras</h1>
            <p class="paragraph-3-copy">Seus clientes merecem mais comodidade e você merece vender mais.</p>
          </div>
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022fb6" class="column-4-copy6 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_5.png" alt="" class="image-3">
            <h1 class="heading-2">Um justo sempre<br>por perto</h1>
            <p class="paragraph-3-copy">Nosso atendimento não é robotizado. Somos pessoas atendendo pessoas da melhor forma possível.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="images/icone_6.png" alt="" class="image-3-copy2">
            <h1 class="heading-2">Rápido, Fácil e Justo</h1>
            <p class="paragraph-3-copy">Mais que uma maquininha de cartão, somos uma máquina de crédito para seu negócio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-16">
    <div data-animation="outin" data-duration="500" data-infinite="1" class="slider-5 w-slider">
      <div class="mask-2 w-slider-mask">
        <div class="slide-4-tablet w-slide">
          <h1 class="heading-3">De que vale uma<br>maquininha de cartões<br>se ela não for <strong>JUSTA?</strong></h1>
        </div>
        <div class="w-clearfix w-slide"><img src="images/SABERMAIS.png" srcset="images/SABERMAIS-p-500.png 500w, images/SABERMAIS.png 507w" sizes="(max-width: 479px) 100vw, (max-width: 991px) 300px, 100vw" alt="" class="image-38">
          <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões e aí que entramos em cena, com taxas JUSTAS, crédito fácil, rápido e sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p>
        </div>
      </div>
      <div class="left-arrow-3 w-slider-arrow-left"></div>
      <div class="right-arrow-3 w-slider-arrow-right"></div>
      <div class="slide-nav-3 w-slider-nav"></div>
    </div>
  </div>
  <div id="justos" class="section-4">
    <div class="columns-7 w-row">
      <div class="column-15 w-col w-col-5"></div>
      <div class="column-16 w-col w-col-7"><img src="images/liga-Justa.png" srcset="images/liga-Justa-p-500.png 500w, images/liga-Justa-p-800.png 800w, images/liga-Justa.png 979w" sizes="(max-width: 479px) 67vw, (max-width: 767px) 54vw, (max-width: 991px) 31vw, 33vw" alt="" class="image-20">
        <p class="paragraph-2-copy">A nossa liga é um conjunto de JUSTOS. Pessoas que estão focadas em tornar o mercado de pagamentos e de crédito mais justo.<br><br>Na JUSTA os clientes são chamados de HERÓIS, são eles que fazem a economia rodar, gerando empregos e incentivando mais e mais pessoas a empreender!</p>
        <div class="columns-9 w-row">
          <div data-w-id="935422a4-65cd-3f31-ceb4-8dd382b89570" class="column-14 w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="images/icone_1_justos.png" alt="crédito para empresas iniciantes" class="image-10">
            <p class="paragraph-2-copy-copy-copy">Especialistas</p>
          </div>
          <div data-w-id="935422a4-65cd-3f31-ceb4-8dd382b89571" class="column-12 w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="images/icone_2_justoss.png" alt="Trabalho como autônomo" class="image-10">
            <p class="paragraph-2-copy-copy-copy2">Disponíveis</p>
          </div>
          <div data-w-id="7cb3eb40-b018-a33e-305e-f906335c14cb" class="column-13 w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="images/icone_3_justos.png" alt="Trabalho autonomo exemplos" class="image-10">
            <p class="paragraph-2-copy-copy-copy3">Rápidos</p>
          </div>
          <div data-w-id="6949e5c2-acef-0552-f1ee-14c1625959c0" class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="images/icone_4_justos.png" alt="Disponiveis em todo o país" class="image-10">
            <p class="paragraph-2-copy-copy-copy3">Em todo Brasil</p>
          </div>
        </div><img src="images/ligajusta_1.png" srcset="images/ligajusta_1-p-500.png 500w, images/ligajusta_1-p-800.png 800w, images/ligajusta_1-p-1080.png 1080w, images/ligajusta_1.png 1368w" sizes="(max-width: 479px) 96vw, 100vw" alt="Autonomo safrapay" class="image-47"></div>
    </div>
  </div>
  <div id="Contatos" class="contatos">
    <div class="columns-13 w-row">
      <div class="w-col w-col-6"><img src="images/textos_contato.png" alt="" class="image-23"></div>
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
  <div class="columns-31 w-row">
    <div class="w-clearfix w-col w-col-6 w-col-tiny-6"><img src="images/icone_1_contato.png" alt="" class="image-22">
      <h1 class="contato_1">0800 87 88 307</h1>
    </div>
    <div class="w-col w-col-6 w-col-tiny-6"><a href="mailto:ajuda@justa.com.vc" target="_blank" class="link-block-5 w-inline-block w-clearfix"><img src="images/icone_2_contato.png" alt="" class="image-22"><h1 class="contato_1">ajuda@justa.com.vc</h1></a></div>
  </div>
  <div class="columns-32 w-row" style="padding-bottom: 7px;">
    <div class="w-clearfix w-col w-col-6 w-col-tiny-6"><img src="images/icone_3_contato.png" alt="" class="image-22">
      <h1 class="contato_1">Chat</h1>
    </div>
    <div class="w-col w-col-6 w-col-tiny-6"><a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=5501149496347" target="_blank" class="link-block-6 w-inline-block w-clearfix"><img src="images/icone_4_contato.png" alt="" class="image-22"><h1 class="contato_1">+55 11 4949-6347</h1></a></div>
  </div>
  <div class="section-5"><div class="formobile">
        <div><img src="images/logo_elo.png" alt="" class="image-4-elo-grande" style="width:80%; margin-bottom: 30px;"></div>
         <img src="images/logo_1.png" alt="" class="image-4" style="width: 15%;"><img src="images/logo_2.png" alt="" class="image-4" style="width: 15%;"><img src="images/logo_5.png" alt="" class="image-4" style="width: 15%;"><img src="images/amex.jpg" alt="" class="image-4" style="width: 15%;">
        <center><h1 class="texto-mobile" style="color: #1d6d8a; font-size: 18pt; margin-top:50px;">E mais 250 bandeiras</h1></center>
        <center><div class=""><center><img src="imgaes/justamaislogo.png" srcset="images/justamaislogo.png 500w, images/justamaislogo.png 800w, images/justamaislogo.png 855w" sizes="(max-width: 767px) 27vw, (max-width: 991px) 11vw, 12vw" alt="" class="" style="width:25%;"></center></div></center>
      </div>
      <div class="fordesktop"><div><img src="images/logo_elo.png" alt="" class="image-4" style="width:20%; margin-bottom: 70px;"></div>
  <img src="images/logo_1.png" alt="" class="image-4" style="width: 7%;"><img src="images/logo_2.png" alt="" class="image-4" style="width: 7%;"><img src="images/logo_5.png" alt="" class="image-4" style="width: 7%;"><img src="images/amex.jpg" alt="" class="image-4" style="width: 4%;">
    <div class="w-row" >

      
      <div class="column-40 w-clearfix w-col w-col-7">

        <h1 class="heading-4-copy8"  >E mais 250 bandeiras</h1>
      </div>
      <div class="w-clearfix w-col w-col-5"><img src="imgaes/justamaislogo.png" srcset="images/justamaislogo.png 500w, images/justamaislogo.png 800w, images/justamaislogo.png 855w" sizes="(max-width: 767px) 27vw, (max-width: 991px) 11vw, 12vw" alt="" class="image-37" ></div>
    </div>
  </div>
</div>
  <div class="section-6">
    <h1 class="heading-4-copy-copy1">Receba novidades e <strong>conteúdos da  JUSTA</strong></h1>
    <div class="w-form">
      <div id="email-form" name="email-form" data-name="Email Form" class="form">
      <input type="email" class="text-field w-input" maxlength="256" name="email"  style="text-transform: lowercase;" data-name="Name" placeholder="E-mail" id="email">
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
        <p class="paragraph-4"><a href="https://www.google.com/maps/place/JUSTA+COM+VC/@-23.4977729,-46.8307726,21z/data=!4m5!3m4!1s0x0:0xdb55bd5c09eb9664!8m2!3d-23.5049645!4d-46.849015" target="_blank" class="link-4"><strong class="bold-text-4">São Paulo<br>‍</strong><span style="font-size: 8pt;">Alameda Xingu, 350 – 23º andar – Conjunto 2302 Alphaville Centro Industrial e Empresarial, Barueri / SP – CEP 06455-911</span></a><br></p>
      </div>
      <div class="w-col w-col-3">
        <p class="paragraph-4"><a href="https://goo.gl/maps/aEujw84xMokDW5Vv7" target="_blank" class="link-5"><strong class="bold-text-5">Recife<br>‍</strong><span style="font-size: 8pt;">Av. Engenheiro Antônio de Góes, 742 – sala 401, Edifício JOPIN, Bairro Pina – Recife/PE – CEP 51110-000</span></a></p>
      </div>
      <div class="w-col w-col-4">
        <p class="paragraph-4" ><strong class="bold-text">Contato<br></strong><span style="font-size: 8pt;"><strong>Para telefone fixo:</strong>  <strong style="font-weight: 800;">0800</strong> 87 88 307<br><strong>Para telefone móvel:</strong> (11) 4000-1688<br><strong>Whatsapp:</strong> (11) 4949-6347<br><strong>E-mail:</strong>  ajuda@justa.com.vc<br>‍</p></span>
        
        
        
        
      </div>
    </div><img src="images/linha.png" alt="" class="image-8">
    
    <div class="div-block-4" data-ix="new-interaction-3" style="transform: translateX(0px) translateY(0px) translateZ(0px); transition: transform 1550ms ease 0s; margin-top: 1vw;"><a href="https://www.facebook.com/justa.com.vc/" target="_blank" class="link-block-2 w-inline-block"><img src="images/facebook.png" alt="" class="image-6"></a><a href="https://www.instagram.com/justacomvc/" target="_blank" class="link-block w-inline-block"><img src="images/instagram.png" alt="" class="image-7"></a><a href="https://www.youtube.com/channel/UCfBLpdZGlzkNHQ6rlQq_eJw" target="_blank" class="link-block w-inline-block"><img src="images/youtube.png" alt="" class="image-7"></a><a href="https://www.linkedin.com/company/justa-pagamentos/" target="_blank" class="link-block-2 w-inline-block"><img src="images/linkedin.png" alt="" class="image-6"></a><center style="
    top: 20px;
    position: relative;
"><a href="sobre-a-justa.html#trabalheconosco" class="trabalheconosco w-button"  style="display: block;
    width: 200px;
    border-radius: 10px;
    background-color: #1d6d8a;
    font-size: 12px !important;
    line-height: 20px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    margin-top: 20px;">Trabalhe Conosco</a></center></div><br><br><br>
    <p class="paragraph-4-copy1">2020 - Todos os Direitos Reservados | Desenvolvido por <a href="https://epicacreative.com.br" target="_blank" class="link-3">ÉPICA CREATIVE</a></p></div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
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
          
            <div class="col-md-6 col-sm-12"><input type="text" data-watermark="Nome" name="nome" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" class="input-contato"></div>
        
        
          <div class="col-md-6 com-sm-12"><input type="text" data-watermark="Sobrenome" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" name="inputsobrenome" class="input-contato"></div>
        
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
          
          <div class="col-md-6 com-sm-12"><input type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" name="inputmail" class="input-contato" data-watermark="Email" ></div>
        
        
          <div class="col-md-6 com-sm-12"><input type="text" id="fone-interesse" name="inputtel" onBlur="mascaraTel(this.id)" onKeyUp="mascaraTel(this.id)" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" data-watermark="DDD + Telefone" class="input-contato"></div>
        
        </div>  
        <div class="row"> 
        <div class="col-md-6 com-sm-12"><input type="text" list="estados" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" name="inputestado" data-watermark="Estado" class="input-contato"></div>
        <div class="col-md-6 com-sm-12"><input type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 90%; height: 30px; margin-top: 10px;" data-watermark="Cidade" name="inputcidade" class="input-contato"></div>
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
          <div><a href="https://sualoja.justa.com.vc/" class="button w-button" id="seller-modal" target="_blank">Login LOJISTA</a>&nbsp;<a href="https://justo.justa.com.vc/" id="reseller-modal" target="_blank" class="button w-button">Login JUSTO</a>
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

  </script> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/include-css.css">
  <script src="js/integra-login.js" ></script>  
  <script src="js/integra-cadastro.js" ></script>   
  <!-- Chat do Movidesk -->
  <script type="text/javascript">var mdChatClient="F414C454C77942F0BC1F835ACFFC60C8";</script>
  <script src="https://chat.movidesk.com/Scripts/chat-widget.min.js"></script>
  <!-- Chat do Movidesk fim -->
 
  <script src="tracking.js" type="text/javascript"></script>
  <script>add_url_to_tracking(true);</script>
  
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
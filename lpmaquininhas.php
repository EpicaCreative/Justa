<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Dec 03 2019 21:23:31 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5de674ab2c4230bb8f1be2bb" data-wf-site="5de674ab2c4230df7b1be2b8">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148482305-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148482305-2');
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
    <style>@media (min-width: 992px) {#t{ margin-top: 75px}}</style>
  <title>Justa Com</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="lpmaquininhascss/normalize.css" rel="stylesheet" type="text/css">
  <link href="lpmaquininhascss/webflow.css" rel="stylesheet" type="text/css">
  <link href="lpmaquininhascss/justa-lpmaquininhas.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Montserrat Alternates:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
     <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        

        let get_parameter = link => 
        {
            let url = new URL(link);
            return url.searchParams.get("ref");
        }

        let register_access = () => 
        {
            $.ajax({
                url: 'ws/ws_qr_code.php',
                type: 'POST',
                data: {
                    ref: get_parameter(window.location.href)
                },
                success: response => console.log(response),
                error: response =>  console.log(response)
            });
        }

        register_access();
        
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
</html>
  <link href="lpmaquininhas/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="lpmaquininhas/webclip.png" rel="apple-touch-icon">
  <style>.w-container {max-width: 1170px;}</style>
   <script src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnload&render=explicit" async defer></script>
</head>
<body class="body">
  <div></div>
  <div class="section">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-copy w-nav">
      <div class="columns-36 w-row">
        <div class="column-61 w-col w-col-7 w-col-medium-6 w-col-small-6 w-col-tiny-6"><img src="lpmaquininhas/logo_azul1.png" alt="" class="image-5"></div>
        <div class="column-60 w-col w-col-5 w-col-medium-6 w-col-small-6 w-col-tiny-6">
          <div class="columns-37 w-row">
            <div class="column-62 w-col w-col-9 w-col-small-9 w-col-tiny-9">
              <div class="columns-38 w-row">
                <div class="w-col w-col-4"></div>
                <div class="column-63 w-col w-col-8">
                  <h1 class="heading-20">0800 87 88307</h1>
                </div>
              </div><a href="https://api.whatsapp.com/send?phone=551149496347&text=Ol%C3%A1%20Justa!%20Estou%20interessado(a)%20na%20maquininha%20de%20voc%C3%AAs%2C"><img src="lpmaquininhas/wpplpmaquininhas.png" alt="" class="image-51-copy"></a></div>
            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="tel:(11) 4000-1688"><img src="lpmaquininhas/liguelpmaquininhas.png" alt="" class="image-51"><a href="https://api.whatsapp.com/send?phone=551149496347&text=Ol%C3%A1%20Justa!%20Estou%20interessado(a)%20na%20maquininha%20de%20voc%C3%AAs%2C"><img src="lpmaquininhas/wpplpmaquininhas.png" alt="" class="image-51-copy-copy"></a></div>
          </div>
        </div>
      </div>
    </div>
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-copy-copy w-nav">
      <div class="columns-36 w-row">
        <div class="column-61 w-col w-col-7 w-col-medium-6 w-col-small-6 w-col-tiny-6"><img src="lpmaquininhas/logo_azul1.png" alt="" class="image-5-copy"></div>
        <div class="column-60 w-col w-col-5 w-col-medium-6 w-col-small-6 w-col-tiny-6">
          <div class="columns-37 w-row">
            <div class="column-62 w-col w-col-9 w-col-small-9 w-col-tiny-9">
              <div class="columns-38 w-row">
                <div class="w-col w-col-4"></div>
                <div class="column-63 w-col w-col-8">
                  <h1 class="heading-20-copy">0800 87 88307</h1>
                </div>
              </div><a href="https://api.whatsapp.com/send?phone=551149496347&text=Ol%C3%A1%20Justa!%20Estou%20interessado(a)%20na%20maquininha%20de%20voc%C3%AAs%2C"><img src="lpmaquininhas/wpplpmaquininhas.png" alt="" class="image-51-copy"></a></div>
            <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="tel:(11) 4000-1688"><img src="lpmaquininhas/liguelpmaquininhas.png" alt="" class="image-51"></a><a href="tel:(11) 4000-1688"><a href="https://api.whatsapp.com/send?phone=551149496347&text=Ol%C3%A1%20Justa!%20Estou%20interessado(a)%20na%20maquininha%20de%20voc%C3%AAs%2C"><img src="lpmaquininhas/wpplpmaquininhas.png" alt="" class="image-51-copy-copy-copy"></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-21">
    <div class="container-11 w-container"><img src="lpmaquininhas/lpmaquininhastop.png" srcset="lpmaquininhas/lpmaquininhastop-p-500.png 500w, lpmaquininhas/lpmaquininhastop-p-800.png 800w, lpmaquininhas/lpmaquininhastop-p-1080.png 1080w, lpmaquininhas/lpmaquininhastop.png 1113w" sizes="(max-width: 767px) 95vw, (max-width: 991px) 691.59375px, 940px" alt="" class="image-52">
      <h1 class="heading-4-copy5">Nossas máquinas tem tudo o que as </h1>
      <h1 class="heading-18-copy-copy">outras dizem ser “diferenciais”, </h1>
      <h1 class="heading-18-copy">mas para nós é apenas o básico.</h1><a href="#peca" class="button-4-copy-copy w-button">Peça a sua</a></div>
  </div>
  <div class="section-2">
    <h1 class="heading">Começamos nossa jornada<br><strong class="bold-text-10">com o apoio de gente grande</strong></h1>
    <div class="columns-29 w-row">
      <div class="w-clearfix w-col w-col-4 w-col-small-4"><img src="lpmaquininhas/adiq.png" alt="" class="image-2" data-ix="new-interaction-4"></div>
      <div class="column-50 w-col w-col-4 w-col-small-4"><a href="https://www.a5.com.br" class="w-inline-block"><img src="lpmaquininhas/A5-2.png" alt="" class="image" data-ix="new-interaction-4"></a>
        <div class="columns-30 w-row">
          <div class="w-col w-col-4 w-col-tiny-4"><img src="lpmaquininhas/adiq.png" alt="" class="image-2-copy" data-ix="new-interaction-4"></div>
          <div class="column-49 w-col w-col-4 w-col-tiny-4"><img src="lpmaquininhas/A5-2.png" alt="" class="image-copy" data-ix="new-interaction-4"></div>
          <div class="w-col w-col-4 w-col-tiny-4"><img src="lpmaquininhas/5d1f4d07719f58e40fff7682_rede.png" alt="" class="image-copy-rede-copy" data-ix="new-interaction-4"></div>
        </div>
      </div>
      <div class="w-clearfix w-col w-col-4 w-col-small-4"><img src="lpmaquininhas/5d1f4d07719f58e40fff7682_rede.png" alt="" class="image-copy-rede" data-ix="new-interaction-4"></div>
    </div>
  </div>
  <div id="sobre" class="section-3-copy1">
    <div data-animation="outin" data-disable-swipe="1" data-duration="500" data-infinite="1" class="slider-5 w-slider">
      <div class="w-slider-mask">
        <div class="slide-4 w-slide">
          <h1 class="heading-3">De que vale uma<br>maquininha de cartões<br>se ela não for <strong>JUSTA?</strong></h1><img src="lpmaquininhas/SABERMAIS.png" srcset="lpmaquininhas/SABERMAIS-p-500.png 500w, lpmaquininhas/SABERMAIS.png 507w" sizes="100vw" alt="" class="image-38"></div>
        <div class="w-clearfix w-slide">
          <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões e aí que entramos em cena, com taxas JUSTAS, crédito fácil, rápido e sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p><img src="lpmaquininhas/1.png" srcset="lpmaquininhas/1-p-500.png 500w, lpmaquininhas/1-p-800.png 800w, lpmaquininhas/1.png 1030w" sizes="100vw" alt="" class="image-46"></div>
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
        <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões e aí que entramos em cena, com taxas JUSTAS, crédito fácil, rápido e sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p>
      </div>
      <div class="column-6-copy w-col w-col-5">
        <div class="columns-25 w-row">
          <div data-w-id="afc33bb2-4672-a793-0244-745ee6f9665f" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_10icone_1.png" alt="" class="image-3">
            <h1 class="heading-2-copy1">Sem pegadinhas</h1>
            <p class="_8">Meias verdades não devem se disfarçar de letras miúdas em nenhum contrato.</p>
          </div>
          <div data-w-id="afc33bb2-4672-a793-0244-745ee6f96660" class="column-4-copy5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_12icone_2.png" alt="" class="image-3">
            <h1 class="_2">Sem asterisco</h1>
            <p class="_9">Não precisamos de sinais gráficos. JUSTO é ser transparente com você.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_11icone_3.png" alt="" class="image-3">
            <h1 class="_4">Segurança</h1>
            <p class="_10">Total controle e segurança com seu sistema e ferramentas.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="lpmaquininhas/icone_10icone_1.png" alt="" class="image-3"></div>
          <div class="column-59 w-col w-col-9 w-col-tiny-9">
            <h1 class="heading-2-copy1">Sem pegadinhas</h1>
            <p class="_8">Meias verdades não devem se disfarçar de letras miúdas em nenhum contrato.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="lpmaquininhas/icone_12icone_2.png" alt="" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_2">Sem asterisco</h1>
            <p class="_9">Não precisamos de sinais gráficos. JUSTO é ser transparente com você.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="lpmaquininhas/icone_11icone_3.png" alt="" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_4">Segurança</h1>
            <p class="_10">Total controle e segurança com seu sistema e ferramentas.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="lpmaquininhas/icone_7icone_4.png" alt="" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_5">Principais bandeiras</h1>
            <p class="_11">Seus clientes merecem mais comodidade e você merece vender mais.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="lpmaquininhas/icone_8icone_5.png" alt="" class="image-3"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_6">Um justo sempre por perto</h1>
            <p class="_12">Nosso atendimento não é robotizado. Somos pessoas atendendo pessoas da melhor forma possível.</p>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-3 w-col-tiny-3"><img src="lpmaquininhas/icone_9icone_6.png" alt="" class="image-3-copy2"></div>
          <div class="column-46 w-col w-col-9 w-col-tiny-9">
            <h1 class="_7">Rápido, Fácil e Justo</h1>
            <p class="_13">Mais que uma maquininha de cartão, somos uma máquina de crédito para seu negócio.</p>
          </div>
        </div>
        <div class="columns-12 w-row">
          <div data-w-id="d97bc8ae-0dec-43fb-fd34-399e0ca09bf8" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_7icone_4.png" alt="" class="image-3">
            <h1 class="_5">Principais bandeiras</h1>
            <p class="_11">Seus clientes merecem mais comodidade e você merece vender mais.</p>
          </div>
          <div data-w-id="d97bc8ae-0dec-43fb-fd34-399e0ca09bfc" class="column-4-copy6 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_8icone_5.png" alt="" class="image-3">
            <h1 class="_6">Um justo sempre<br>por perto</h1>
            <p class="_12">Nosso atendimento não é robotizado. Somos pessoas atendendo pessoas da melhor forma possível.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_9icone_6.png" alt="" class="image-3-copy2">
            <h1 class="_7">Rápido, Fácil e Justo</h1>
            <p class="_13">Mais que uma maquininha de cartão, somos uma máquina de crédito para seu negócio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-16">
    <div data-animation="outin" data-duration="500" data-infinite="1" class="slider-5 w-slider">
      <div class="mask-2 w-slider-mask">
        <div class="slide-4-tablet w-slide">
          <h1 class="heading-3">De que vale uma<br>maquininha de cartões<br>se ela não for <strong>JUSTA?</strong></h1><img src="lpmaquininhas/SABERMAIS.png" srcset="lpmaquininhas/SABERMAIS-p-500.png 500w, lpmaquininhas/SABERMAIS.png 507w" sizes="(max-width: 479px) 100vw, (max-width: 991px) 300px, 100vw" alt="" class="image-38"></div>
        <div class="w-clearfix w-slide">
          <p class="paragraph-2">Acreditamos que para tornar o mercado mais justo é preciso começar sendo transparente, não ter letras miúdas e nem asteriscos. Quanto mais exigirmos que isso aconteça, maior a nossa chance de termos uma nova realidade no mercado. Há muitas maneiras de aceitar cartões e aí que entramos em cena, com taxas JUSTAS, crédito fácil, rápido e sempre com um JUSTO de confiança perto de você. Muito prazer, somos a JUSTA!<br></p>
          <div class="container-10 w-container"><img src="lpmaquininhas/1.png" srcset="lpmaquininhas/1-p-500.png 500w, lpmaquininhas/1-p-800.png 800w, lpmaquininhas/1.png 1030w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 30vw, (max-width: 991px) 218.390625px, 100vw" alt="" class="image-46"></div>
        </div>
      </div>
      <div class="left-arrow-3 w-slider-arrow-left"></div>
      <div class="right-arrow-3 w-slider-arrow-right"></div>
      <div class="slide-nav-3 w-slider-nav"></div>
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
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022f9d" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_10icone_1.png" alt="" class="image-3">
            <h1 class="heading-2">Sem pegadinhas</h1>
            <p class="paragraph-3-copy">Meias verdades não devem se disfarçar de letras miúdas em nenhum contrato.</p>
          </div>
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022fa3" class="column-4-copy5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_12icone_2.png" alt="" class="image-3">
            <h1 class="heading-2">Sem asterisco</h1>
            <p class="paragraph-3-copy">Não precisamos de sinais gráficos. JUSTO é ser transparente com você.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_11icone_3.png" alt="" class="image-3">
            <h1 class="heading-2">Segurança</h1>
            <p class="paragraph-3-copy">Total controle e segurança com seu sistema e ferramentas.</p>
          </div>
        </div>
        <div class="columns-12 w-row">
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022fb0" class="column-3 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_7icone_4.png" alt="" class="image-3">
            <h1 class="heading-2">Principais bandeiras</h1>
            <p class="paragraph-3-copy">Seus clientes merecem mais comodidade e você merece vender mais.</p>
          </div>
          <div data-w-id="b17f9096-75b8-bd4c-217c-ad98c1022fb6" class="column-4-copy6 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_8icone_5.png" alt="" class="image-3">
            <h1 class="heading-2">Um justo sempre<br>por perto</h1>
            <p class="paragraph-3-copy">Nosso atendimento não é robotizado. Somos pessoas atendendo pessoas da melhor forma possível.</p>
          </div>
          <div class="column-5 w-col w-col-4 w-col-small-4 w-col-tiny-4"><img src="lpmaquininhas/icone_9icone_6.png" alt="" class="image-3-copy2">
            <h1 class="heading-2">Rápido, Fácil e Justo</h1>
            <p class="paragraph-3-copy">Mais que uma maquininha de cartão, somos uma máquina de crédito para seu negócio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-5 w-clearfix">
    <h1 class="heading-4-copy8">As principais bandeiras</h1>
    <div class="w-container"><img src="lpmaquininhas/logo_elo_1.png" srcset="lpmaquininhas/logo_elo_1-p-500.png 500w, lpmaquininhas/logo_elo_1-p-800.png 800w, lpmaquininhas/logo_elo_1-p-1080.png 1080w, lpmaquininhas/logo_elo_1-p-1600.png 1600w, lpmaquininhas/logo_elo_1.png 2338w" sizes="(max-width: 479px) 70vw, (max-width: 767px) 40vw, 100vw" alt="" class="image-4-copy32 image-45"></div>
    <div class="columns-28 w-row">
      <div class="column-48 w-col w-col-4 w-col-tiny-4 w-col-small-4"><img src="lpmaquininhas/logo_12logo_1.png" width="10" alt="" class="image-4-visa"></div>
      <div class="column-47 w-col w-col-4 w-col-tiny-4 w-col-small-4"><img src="lpmaquininhas/logo_3logo_2.png" alt="" class="image-4"></div>
      <div class="w-col w-col-4 w-col-tiny-4 w-col-small-4"><img src="lpmaquininhas/logo_9logo_5.png" alt="" class="image-4-hipercard"></div>
    </div>
  </div>
  <div class="section-5-copydeskortab">
    <h1 class="heading-22">As principais bandeiras</h1>
    <div class="w-container"><img src="lpmaquininhas/logo_elo_1.png" srcset="lpmaquininhas/logo_elo_1-p-500.png 500w, lpmaquininhas/logo_elo_1-p-800.png 800w, lpmaquininhas/logo_elo_1-p-1080.png 1080w, lpmaquininhas/logo_elo_1-p-1600.png 1600w, lpmaquininhas/logo_elo_1.png 2338w" sizes="(max-width: 767px) 100vw, (max-width: 991px) 291.1875px, 282px" alt="" class="image-4-copy32 image-45"></div>
    <div class="columns-28 w-row">
      <div class="column-48 w-col w-col-4 w-col-tiny-4 w-col-small-4"><img src="lpmaquininhas/logo_12logo_1.png" width="10" alt="" class="image-4-visa"></div>
      <div class="column-47-copykjk w-col w-col-4 w-col-tiny-4 w-col-small-4"><img src="lpmaquininhas/logo_3logo_2.png" alt="" class="image-4"></div>
      <div class="w-col w-col-4 w-col-tiny-4 w-col-small-4"><img src="lpmaquininhas/logo_9logo_5.png" alt="" class="image-4-hipercard"></div>
    </div>
  </div>
  <div id="justos" class="section-4">
    <div class="columns-7 w-row">
      <div class="column-15 w-col w-col-5"></div>
      <div class="column-16 w-col w-col-7"><img src="lpmaquininhas/liga-Justa.png" srcset="lpmaquininhas/liga-Justa-p-500.png 500w, lpmaquininhas/liga-Justa-p-800.png 800w, lpmaquininhas/liga-Justa.png 979w" sizes="100vw" alt="" class="image-20">
        <p class="paragraph-2-copy">A nossa liga é um conjunto de JUSTOS. Pessoas que estão focadas em tornar o mercado de pagamentos e de crédito mais justo.<br><br>Na JUSTA os clientes são chamados de HERÓIS, são eles que fazem a economia rodar, gerando empregos e incentivando mais e mais pessoas a empreender!</p>
        <div class="columns-9 w-row">
          <div data-w-id="935422a4-65cd-3f31-ceb4-8dd382b89570" class="column-14 w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="lpmaquininhas/icone_1_justos_1icone_1_justos.png" alt="" class="image-10">
            <p class="paragraph-2-copy-copy-copy">Especialistas</p>
          </div>
          <div data-w-id="935422a4-65cd-3f31-ceb4-8dd382b89571" class="column-12 w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="lpmaquininhas/icone_2_justos_1icone_2_justos.png" alt="" class="image-10">
            <p class="paragraph-2-copy-copy-copy2">Disponíveis</p>
          </div>
          <div data-w-id="7cb3eb40-b018-a33e-305e-f906335c14cb" class="column-13 w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="lpmaquininhas/icone_3_justos_2icone_3_justos.png" alt="" class="image-10">
            <p class="paragraph-2-copy-copy-copy3">Rápidos</p>
          </div>
          <div data-w-id="6949e5c2-acef-0552-f1ee-14c1625959c0" class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><img src="lpmaquininhas/icone_4_justos_1icone_4_justos.png" alt="" class="image-10">
            <p class="paragraph-2-copy-copy-copy3">Em todo Brasil</p>
          </div>
        </div><img src="lpmaquininhas/ligajusta_1.png" srcset="lpmaquininhas/ligajusta_1-p-500.png 500w, lpmaquininhas/ligajusta_1-p-800.png 800w, lpmaquininhas/ligajusta_1-p-1080.png 1080w, lpmaquininhas/ligajusta_1.png 1368w" sizes="100vw" alt="" class="image-47"></div>
    </div>
  </div>
  <div id="Contatos" class="contatos">
    <div class="columns-13 w-row">
      <div class="w-col w-col-6 w-col-stack"><img src="lpmaquininhas/textos_contato.png" alt="" class="image-23">
        <h1 class="heading-23">Contato</h1>
        <div class="w-row" id="t">
          <div data-w-id="19e2b681-5e62-dcb6-f612-8d758562e060" class="column-31 w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="tel:08008788307" target="_blank" class="link-block-4 w-inline-block w-clearfix"><img src="lpmaquininhas/icone_1_contato_1icone_1_contato.png" alt="" class="image-22"><h1 class="contato_1">0800 87 88 307</h1></a></div>
          <div data-w-id="19e2b681-5e62-dcb6-f612-8d758562e065" class="column-32 w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="mailto:ajuda@justa.com.vc" target="_blank" class="link-block-5 w-inline-block w-clearfix"><img src="lpmaquininhas/icone_2_contato_1icone_2_contato.png" alt="" class="image-22"><h1 class="contato_1">ajuda@justa.com.vc</h1></a></div>
        </div>
        <div class="columns-14 w-row" id="t">
          <div data-w-id="a772825f-1abe-2cb4-3b19-6679983b64ac" class="column-34 w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="#" target="_blank" class="link-block-4-copy-copy w-inline-block w-clearfix"><img src="lpmaquininhas/icone_3_contato_1icone_3_contato.png" alt="" class="image-22"><h1 class="contato_1">Chat</h1></a></div>
          <div data-w-id="a772825f-1abe-2cb4-3b19-6679983b64b0" class="column-33 w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=55011944478696" target="_blank" class="link-block-6 w-inline-block w-clearfix"><img src="lpmaquininhas/icone_4_contato_1icone_4_contato.png" alt="" class="image-22"><h1 class="contato_1">+55 (11) 4949-6347</h1></a></div>
        </div><img src="lpmaquininhas/justino.png" alt="" id="t" class="image-53" style="margin-bottom: 20px;"></div>
      <div class="column-51 w-col w-col-6 w-col-stack"><h1 id="peca" class="heading-23">Peça a sua maquininha</h1>
        <center><a id="pecasua"><div class="lead">
        <div class="desktop">
        <div class="row" style="margin-top: 35px">
        <div class="col-md-12 col-sm-12"><input data-watermark="Nome" type="text" id="nome-interesse" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 95.5%; height: 40px; margin-top: 10px;"  class="input-contato col-12"></div>
        </div>  
        
        
        
        <div class="row" style="z-index: 10000000">
          
            <div class="col-md-6 col-sm-12"><input type="text" id="email-interesse" class="input-contato" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 95.5%; height: 40px; margin-top: 10px;" data-watermark="Email"></div>
        
        
          <div class="col-md-6 com-sm-12"><input type="text" id="fone-interesse" onBlur="mascaraTel(this.id)" onKeyUp="mascaraTel(this.id)" data-watermark="DDD + Telefone" class="input-contato" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 95.5%; height: 40px; margin-top: 10px;" ></div>
        
        </div>  
        <div class="row"> 
        <div class="col-md-6 com-sm-12"><input type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 95.5%; height: 40px; margin-top: 10px;"  id="estado-interesse" list="estados" data-watermark="Estado" class="input-contato"></div>
        <div class="col-md-6 com-sm-12"><input data-watermark="Cidade" type="text" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 40px; width: 95.5%; height: 40px; margin-top: 10px;"  id="cidade-interesse" class="input-contato"></div>
         
        <div class="col-md-6 com-sm-12"><input type="text" list="how" style="border: 1px solid black; border-radius: 15px; padding-left: 15px; padding-right: 5px;border-color: #ccc; height: 30px; width: 95.5%; height: 40px; margin-top: 10px;"  id="canal-interesse" data-watermark="Como descobriu a Justa?" class="input-contato"></div>
                     <datalist id="how">
                <option value="Facebook">Facebook</option>
                <option value="Instagram">Instagram</option>
                <option value="Linkedin">LinkedIn</option>
                <option value="Google">Google</option>
                <option value="Feiras">Feiras de Eventos</option>
                <option value="Indicação">Indicação</option>
                <option value="Prospecção">Prospecção Externa</option>
                                          </datalist>
        </div>
        <div class="row"> 
        <div class="col-md-12 col-sm-12"><textarea style="border: 1px solid black; border-radius: 15px; padding: 10px 15px;border-color: #ccc; width: 95.5%;  margin-top: 10px; resize: none;"  type="text" cols="40" rows="5" id="obs-interesse" data-watermark="Mensagem" class="input-contato col-12"></textarea></div>
      </div>
      </div>
             <div class="row">
        <div class="col-md-12">
        <div class="g-recaptcha"  id="recaptcha" data-sitekey="6Lcg5cgUAAAAAAXBdML5XyjgLpWLypN18DRceYG-" data-callback="recaptcha_callback" data-expired-callback="disableSendBtn"></div>
        </div>
      </div>
      <div class="row" style="text-align: center">  
        <center><div class="col-md-12 com-sm-12">
            <a class="button w-button"  id="btnEnviaInteresse" style="display: none; width: 100px;"  onClick="EnviaInteresse('lpmaquininhas.html', true, true)">Enviar</a>
            <a class="button w-button" style="background-color: #DDD;  width: 100px; display: block;";  id="btnEnviaInteresseDisabled" >Enviar</a>
            
            </div></center>
        </div>              
            </div></a></center></div></div>
  <div class="section-18"><img src="lpmaquininhas/textos_contato.png" alt="" class="image-23">
    <div class="columns-31 w-row">
      <div class="w-clearfix w-col w-col-6 w-col-tiny-6"><img src="lpmaquininhas/icone_1_contato_1icone_1_contato.png" alt="" class="image-22">
        <h1 class="contato_1">0800 87 88 307</h1>
      </div>
      <div class="w-col w-col-6 w-col-tiny-6"><a href="mailto:ajuda@justa.com.vc" target="_blank" class="link-block-5 w-inline-block w-clearfix"><img src="lpmaquininhas/icone_2_contato_1icone_2_contato.png" alt="" class="image-22"><h1 class="contato_1">ajuda@justa.com.vc</h1></a></div>
    </div>
    <div class="columns-32 w-row">
      <div class="w-clearfix w-col w-col-6 w-col-tiny-6"><img src="lpmaquininhas/icone_3_contato_1icone_3_contato.png" alt="" class="image-22">
        <h1 class="contato_1">Chat</h1>
      </div>
      <div class="w-col w-col-6 w-col-tiny-6"><a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=55011944478696" target="_blank" class="link-block-6 w-inline-block w-clearfix"><img src="lpmaquininhas/icone_4_contato_1icone_4_contato.png" alt="" class="image-22"><h1 class="contato_1">+55 11 94447-8696</h1></a></div>
    </div>
  </div>
  <div class="section-6">
    <h1 class="heading-4-copy-copy1">Receba novidades e <strong>conteúdos da  JUSTA</strong></h1>
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" class="form"><input type="email" class="text-field w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="E-mail" id="name-2"><input type="submit" value="CADASTRAR" data-wait="Please wait..." class="submit-button-copy1 w-button"></form>
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
      <div class="column-10 w-col w-col-2"><img src="lpmaquininhas/logo_azul1.png" alt="" class="image-512" style="width: 100px; margin-bottom: 20px; margin-top: 20px;"></div>
      <div class="w-col w-col-3">
        <p class="paragraph-4"><a href="https://www.google.com/maps/place/JUSTA+COM+VC/@-23.4977729,-46.8307726,21z/data=!4m5!3m4!1s0x0:0xdb55bd5c09eb9664!8m2!3d-23.5049645!4d-46.849015" target="_blank" class="link-4"><strong class="bold-text-4">São Paulo<br>‍</strong><span style="font-size: 8pt;">Alameda Xingu, 350 – 23º andar – Conjunto 2302 Alphaville Centro Industrial e Empresarial, Barueri / SP – CEP 06.455-911</span></a><br></p>
      </div>
      <div class="w-col w-col-3">
        <p class="paragraph-4"><a href="https://goo.gl/maps/aEujw84xMokDW5Vv7" target="_blank" class="link-5"><strong class="bold-text-5">Recife<br>‍</strong><span style="font-size: 8pt;">Av. Engenheiro Antônio de Góes, 742 – sala 401, Edifício JOPIN, Bairro Pina – Recife/PE – CEP 51110-000</span></a></p>
      </div>
      <div class="w-col w-col-4">
        <p class="paragraph-4" ><strong class="bold-text">Contato<br></strong><span style="font-size: 8pt;"><strong>Para telefone fixo:</strong>  <strong style="font-weight: 800;">0800</strong> 87 88 307<br><strong>Para telefone móvel:</strong> (11) 4000-1688<br><strong>Whatsapp:</strong> (11) 4949-6347<br><strong>E-mail:</strong>  ajuda@justa.com.vc<br>‍</p></span>
      </div>
    </div><img src="lpmaquininhas/linha_1linha.png" alt="" class="image-8">
    <p class="paragraph-4-copy1">2019 - Todos os Direitos Reservados | Desenvolvido por <a href="https://epicacreative.com.br" target="_blank" class="link-3">ÉPICA CREATIVE</a></p>
    <div class="div-block-4" data-ix="new-interaction-3"><a href="https://www.facebook.com/justa.com.vc/" target="_blank" class="link-block-2 w-inline-block"><img src="lpmaquininhas/facebook_1facebook.png" alt="" class="image-6"></a><a href="https://www.instagram.com/justacomvc/" target="_blank" class="link-block w-inline-block"><img src="lpmaquininhas/instagram_1instagram.png" alt="" class="image-7"></a><a href="https://www.youtube.com/channel/UCfBLpdZGlzkNHQ6rlQq_eJw" target="_blank" class="link-block w-inline-block"><img src="lpmaquininhas/youtube_1youtube.png" alt="" class="image-7"></a><a href="https://www.linkedin.com/company/justa-pagamentos/" target="_blank" class="link-block-2 w-inline-block"><img src="lpmaquininhas/linkedin_1linkedin.png" alt="" class="image-6"></a></div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="lpmaquininhasjs/webflow.js" type="text/javascript"></script>
  <!-- Integração com funil de vendas -->
  <script src="js/funil.js"></script>
  
  <script src="tracking.js"></script>
  <script type="text/javascript">
    add_url_to_tracking(true,'lpmaquininhas.html');
  </script>
    
    <script src="js/integra-login.js" ></script>  
    <script src="js/integra-cadastro.js" ></script> 

  <!-- Chat do Movidesk -->
  <script type="text/javascript">var mdChatClient="F414C454C77942F0BC1F835ACFFC60C8";</script>
  <script src="https://chat.movidesk.com/Scripts/chat-widget.min.js"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
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
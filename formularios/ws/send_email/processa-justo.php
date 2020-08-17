<head>
<script type="text/javascript">
       window.open('https://jobs.kenoby.com/justo', '_blank');
    </script>
</head>


<div style="display:none;"><?php

$form = $_POST['form'];

 //header("Location: https://jobs.kenoby.com/justo"); 
    
$servidor = "18.229.51.254";
$usuario = "root";
$senha = "J7e%XFhuUQhGv8Kw6UZL";
$dbname = "empor274_painel_administrativo";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$conn->query('set character_set_client=utf8');
$conn->query('set character_set_connection=utf8');
$conn->query('set character_set_results=utf8');
$conn->query('set character_set_server=utf8');

 // Get the client ip address
$ipaddress = $_SERVER['REMOTE_ADDR'];

echo $ipaddress;



    
    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $email = strtolower($email);
    $telefone = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $pagina = filter_input(INPUT_POST, 'product', FILTER_SANITIZE_STRING);
    $utm = filter_input(INPUT_POST, 'origem', FILTER_SANITIZE_STRING);
    $server = filter_input(INPUT_POST, 'server', FILTER_SANITIZE_STRING);
    

    date_default_timezone_set('America/Sao_Paulo');
    $date = date('m/d/Y h:i:s a', time());
    echo $date;

    $result_aprov = "INSERT INTO log_cadastros (ip, nome, email, telefone, cidade, estado, origem, data, pagina, server) VALUES ('$ipaddress', '$nome', '$email','$telefone', '$cidade', '$estado', '$utm', '$date' ,'$pagina', '$server')";

    $resultado_aprov = mysqli_query($conn, $result_aprov);

     $corpo = "<table class='MsoNormalTable' border='0' cellspacing='0' bgcolor='#ffffff' cellpadding='0' width='100%' style='width:100%;'><tbody><tr><td style='background:#ffffff;padding:0cm 0cm 0cm 0cm'><meta charset='utf-8'><meta name='description' content='Olá $nome, logo mais entraremos em contato para falar sobre $produto!' /><link href='https://fonts.googleapis.com/css2?family=montserrat:wght@300;400;700&display=swap' rel='stylesheet'><title>Seja bem vindo a Justa!</title><style>.rodape {background-color: #007099;}table { background-color: white; }td.bd {background-color: #ffffff !important;}.corpo { padding: 0px 50px; }</style><div align='center'><table class='MsoNormalTable' bgcolor='#ffffff' border='0' cellspacing='0' cellpadding='0' width='600' style='background-color: #ffffff;width:450.0pt'><tbody bgcolor='#ffffff'><div style='background-color: black !important;' class='body'><tr><td style='padding:0cm 0cm 0cm 0cm'><p class='MsoNormal'><a href='https://justa.com.vc'><center><img alt='$nome lhe apresentamos o Justino' id='_x0000_i1025' src='https://i.ibb.co/3RL27Rn/justino-dando-joinha-email-automatico.gif' alt='topo_news.jpg' name='_x0000_i1025' /></center></a></p></td></tr><tr></tr><tr><td class='bd' style='background:#ffffff;padding:0cm 0cm 0cm 0cm'><br><div class='corpo'  style='width: 500px; padding: 0px 40px;'><p width='500'><center><span style='text-align: center; font-family: Arial; color: #0a7096; font-size: 14pt; font-weight: 700;'>Olá $nome,</span></center></p><p width='500'><center><span style='font-family: Arial; color: #0a7096; font-size: 14pt; font-weight: 400;'>Seja muito bem-vindo, estamos felizes em te ver por aqui.<br>Em breve nosso time de Gente Justa entrará em contato com você para falar sobre $produto.</span></center></p><br><center><a href='https://bit.ly/3c4h4yo'><img id='_x0000_i1025' src='https://i.ibb.co/z8ysH2x/justino-email-respostatamojusto-2.png' name='_x0000_i1025' /></a></center></div><br><div class='rodape' background='#076e95' style='background-color: #007099;'><a href='https://www.justa.com.vc'><img id='_x0000_i1025' src='https://i.ibb.co/rxQSHxn/justacomvc.jpg'name='_x0000_i1025'/></a><br><a href='https://www.justa.com.vc/blog-justa.html'><img id='_x0000_i1025' src='https://i.ibb.co/S5f7y3n/papojusto.jpg' name='_x0000_i1025' /></a><a href='https://www.facebook.com/justa.com.vc/'><img id='_x0000_i1025' src='https://i.ibb.co/nrKLtf5/facebook.jpg' name='_x0000_i1025' /></a><a href='https://www.instagram.com/justacomvc/'><img id='_x0000_i1025' src='https://i.ibb.co/1ZgJ60N/instagram.jpg' name='_x0000_i1025' /></a><a href='https://api.whatsapp.com/send?1=pt_BR&phone=5501149496347'><img id='_x0000_i1025' src='https://i.ibb.co/vLMhZtL/whatsapp.jpg' name='_x0000_i1025' /></a><a href='https://www.youtube.com/channel/UCfBLpdZGlzkNHQ6rlQq_eJw'><img id='_x0000_i1025' src='https://i.ibb.co/Wzd8JRY/youtube.jpg' name='_x0000_i1025' /></a><a href='https://br.linkedin.com/company/justa-pagamentos'><img id='_x0000_i1025' src='https://i.ibb.co/R7SsxpQ/linkedin.jpg' name='_x0000_i1025' /></a></div></td></tr><br /><br /><tr></tr><tr bgcolor='#ffffff' style='background:#ffffff;'><td bgcolor='#ffffff' style='background:#ffffff;padding:0cm 0cm 0cm 0cm'></td></tr><tr><td style='padding:0cm 0cm 0cm 0cm'></td></tr></div></tbody></table></div><p class='MsoNormal' align='center' style='text-align:center'></p></td></tr></tbody></table>";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    $mail = new PHPMailer(TRUE);

    try {
   
       $mail->setFrom('contato@justa.com.vc', 'Justa Com Vc');
       $mail->addAddress("$email", $nome);
       $mail->CharSet = 'UTF-8';
       $mail->Subject = 'Bem vindo a Justa';
       $mail->isHTML(true);
       $mail->Body = $corpo;
       $mail->isSMTP();
       $mail->Host = 'smtp-mail.outlook.com';
       $mail->SMTPAuth = TRUE;
       $mail->SMTPSecure = 'tls';
       $mail->Username = 'contato@justa.com.vc';
       $mail->Password = '1q@wsE3!@#3ewss';
       $mail->Port = 587;
   
       /* Enable SMTP debug output. */
       $mail->SMTPDebug = 4;
   
       $mail->send();

       echo '$nome email enviado com sucesso....';
    }
    catch (Exception $e)
    {
       echo $e->errorMessage();
    }
    catch (\Exception $e)
    {
       echo $e->getMessage();
    }

   

?></div>

<?php if($form == 'under'){

echo '<body class="body" style="width: 100%; overflow:hidden;">

  
   <center><img src="voce_sera_redirecionado.png"><br><span style="font-family: montserrat; color: white;font-size: 12pt;">Caso não tenha sido redirecionado automaticamente, <a style="font-family: montserrat; color: white;font-size: 12pt;" href="https://jobs.kenoby.com/justo">clique aqui!</a></span></center>
       
</body>'; }
if($form == 'float'){

echo '<body class="body" style="width: 320px; overflow:hidden;">

  
   <a target="_blank" href="https://jobs.kenoby.com/justo"><img src="cadastrado_como_um_justo_computador.jpg"></a>
       
</body>'; }


?>

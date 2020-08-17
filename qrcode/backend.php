<?php


if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 
$nome = $_POST['nome'];

$sobrenome = $_POST['sobre'];

$tel = $_POST['telefone']; 

$mail = $_POST['email'];

$szone = $_POST['sizeone'];

$sztwo = $_POST['sizetwo'];


 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "geradorqr@justa.com.vc"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "$mail"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "geradorqr@justa.com.vc"; 
 $email_assunto = "Novo QR Gerado;"; // Este será o assunto da empresa
 //====================================================
 
 //Monta o Corpo da Mensagem
 //====================================================

 $email_conteudo = "Nome = $nome $sobrenome \n"; 
 $email_conteudo .= "Email = $mail , $telefone \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
 $email_conteudo .= "Email = $email \n"; 
 $email_conteudo .= " \n"; 

 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "<center><img src='http://chart.googleapis.com/chart?chs=$szonex$sztwo&cht=qr&chl=BEGIN:VCARD%0aVERSION:2.1%0aFN:$nome%0aN:$sobrenome;$nome%0aTITLE:%0aTEL;CELL:+55$tel%0aTEL;WORK;VOICE:(11)+4000-1688%0aEMAIL;HOME;INTERNET:$mail%0aEMAIL;WORK;INTERNET:ajuda@justa.com.vc%0aURL:j'></center>"; 
 echo "<style> #formu { display: none; } </style>";
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 //====================================================
} 


//function forceDownloadQR($url, $width = 150, $height = 150) {
    //$url    = urlencode($url);
    //$image  = 'http://chart.googleapis.com/chart?chs=$szonex$sztwo&cht=qr&chl=BEGIN:VCARD%0aVERSION:2.1%0aFN:$nome%0aN:$sobrenome;$nome%0aTITLE:%0aTEL;CELL:+55$tel%0aTEL;WORK;VOICE:(11)+4000-1688%0aEMAIL;HOME;INTERNET:$mail%0aEMAIL;WORK;INTERNET:ajuda@justa.com.vc%0aURL:j'.$url;
    //$file = file_get_contents($image);
    //header("Content-type: application/octet-stream");
    //header("Content-Disposition: attachment; filename=qrcode.png");
    //header("Cache-Control: public");
    //header("Content-length: " . strlen($file)); // tells file size
    //header("Pragma: no-cache");
    //echo $file;
    //die;
//}

//forceDownloadQR('http://google.com');

//} 


?>


    </html>
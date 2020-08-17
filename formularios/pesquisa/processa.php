<?php

include_once("conexao.php");

 
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobre', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$usabanco = filter_input(INPUT_POST, 'banco', FILTER_SANITIZE_STRING);
$outrobanco = filter_input(INPUT_POST, 'seoutrobanco', FILTER_SANITIZE_STRING);
$usatoud = filter_input(INPUT_POST, 'usatoud', FILTER_SANITIZE_STRING);
$valortoud = filter_input(INPUT_POST, 'valortoud', FILTER_SANITIZE_STRING);
$emissao = filter_input(INPUT_POST, 'emissao', FILTER_SANITIZE_STRING);
$custoemissao = filter_input(INPUT_POST, 'custopemissao', FILTER_SANITIZE_STRING);
$possuiccc = filter_input(INPUT_POST, 'ccreditocorp', FILTER_SANITIZE_STRING);
$custosaque = filter_input(INPUT_POST, 'custopsaque', FILTER_SANITIZE_STRING);
$possuicredito = filter_input(INPUT_POST, 'creditodispcc', FILTER_SANITIZE_STRING);
$ajudariacredito = filter_input(INPUT_POST, 'ajudariacapue', FILTER_SANITIZE_STRING);
$conhececj = filter_input(INPUT_POST, 'conhececj', FILTER_SANITIZE_STRING);
$contatar = filter_input(INPUT_POST, 'contatar', FILTER_SANITIZE_STRING);

$result_pesq = "INSERT INTO pesquisa_cartao (nome, sobre, telefone, email, banco, seoutrobanco, usatoud, valortoud, emissao, custopemissao, creditocorp, custopsaque, creditodispcc, ajudariacapue, conhececj, contatar) VALUES ('$nome', '$sobrenome', '$tel', '$mail', '$usabanco', '$outrobanco', '$usatoud', '$valortoud', '$emissao', '$custoemissao', '$possuiccc', '$custosaque', '$possuicredito', '$ajudariacredito', '$conhececj', '$contatar')";

$resultado = mysqli_query($conn, $result_pesq);

if (mysqli_insert_id ($conn) ) {
  header("Location: ../index.php");
}else{
  header("Location: ../index.php");
}


?>
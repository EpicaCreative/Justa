<?php

require '../Admin/funcoes/funcoes.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $pagina = $_POST['pagina'];
    $source = $_POST['utmSource'];
    $sql_command = "INSERT INTO tb_rastreio (pagina, source) VALUES ('$pagina', '$source')";
    $registrado = mysqli_query(conexao(), $sql_command);

    echo $registrado ? "Acesso registrado com sucesso" : "Falha ao registrar acesso";
}else{
    echo "Erro 403 - Permissão negada";
}
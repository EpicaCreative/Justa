<?php

include "../sessao.php"; 
include "../funcoes/funcoes.php"; 
error_reporting(1);

$message = "Não foi possível excluir o banner";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = isset($_POST['id']) ? $_POST['id'] : 0;

    if($id > 0)
    {
        $sql_command_delete = "DELETE FROM tb_banners WHERE id=$id";
        $deleted  = mysqli_query( conexao(), $sql_command_delete);
        $message = $deleted ?  "Banner deletado com sucesso" : "Falha ao excluir banner";
    }
}

print($message);
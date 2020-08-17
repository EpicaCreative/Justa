<?php

//arquivo para fazer a conexão com o servidor
include_once("conexao.php");


//variaveis

                       //tipo      razao do input
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cv = $_FILES['Arquivo']['name'];
var_dump($_FILES['Arquivo']);


//Recuperar último ID inserido no banco de dados
        

        $diretorio = '../';



         if(move_uploaded_file($_FILES['Arquivo']['tmp_name'], $diretorio.$cv)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: ../../Admin/index.php");
        }
//$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
//$nome_real=$_FILES["Arquivo"]["name"];
//copy($nome_temporario,"imagens/$nome_real");



echo "$nome <br>";


//echo "cnpj DE VENDA: $cnpj <br>";
//echo "ie: $ie <br>";

//INSERT INTO para colocar as informações na tabela
// INSERT INTO --> (campos da tabela no banco de dados) VALUES --> (valores vindos do formulário)

//                                 user_parameters é o noma da tabela

$sql = "INSERT INTO TB_upbanners(nome, img)
VALUES ('$nome', '$cv')";

if ($conn->query($sql) === TRUE) {
    echo "CV enviado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//if (mysqli_insert_id ($conn) ) {
//	header("Location: index.php");
//}else{
//	header("Location: index.php");
//}

//?>
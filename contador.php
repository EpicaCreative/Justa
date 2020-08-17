<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">

<?php

header('Content-Type: text/html; charset=utf-8');

include_once("ws/conexao.php");

date_default_timezone_set('America/Sao_Paulo');

$originado = $_POST['originado'];


$date = date('Y-m-d h:i:sa', time());

echo $date;

$result_aprov = "INSERT INTO clicks_to_kenoby (origem, data) VALUES ('$originado', '$date')";

$resultado_aprov = mysqli_query($conecta, $result_aprov);

header('Location: https://bit.ly/2VvsfKN');


?>
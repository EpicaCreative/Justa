<?php

header("Content-Type: text/plain");

require '../funcoes/funcoes.php';

$flag = false;

$pagina_atual = isset($_GET['pagina']) ? $_GET['pagina'] : 0 ; 
if($pagina_atual=="") $pagina_atual = 1;

$offset = ($pagina_atual - 1) * 25; 

$month = isset($_GET['month']) ? $_GET['month'] : 0;
$year = isset($_GET['year']) ? $_GET['year'] : 0;

$query = isset($_GET['query']) ? $_GET['query'] : '';

$append = " WHERE (month(data_cadastro) = $month OR $month=0) AND (YEAR(data_cadastro) = $year OR $year = 0) ";
if(strlen($query) > 0)
{
    $append .= "AND (nome LIKE '%$query%' OR email LIKE '%$query%' OR telefone LIKE '%$query%' OR cidade LIKE '%$query%' OR estado LIKE '%$query%' OR teste LIKE '%$query%')" ;
}

$sql_command = "SELECT * FROM vw_leads $append ORDER BY id DESC LIMIT 25 OFFSET $offset";

$statement = mysqli_query(conexao(), $sql_command);

$sql_search_pages = "SELECT * FROM vw_leads";

//print_r($sql_command);

while($array = mysqli_fetch_array($statement)) {
    $array_temp = array();

    //$array_temp['index'] = utf8_decode($array['id']); 
    $array_temp['nome'] = utf8_encode($array['nome']); 
    $array_temp['telefone'] = utf8_encode($array['telefone']);
    $array_temp['email'] = utf8_encode($array['email']);
    $array_temp['cidade'] = utf8_encode($array['cidade']);
    $array_temp['estado'] = utf8_encode($array['estado']);
    $array_temp['obs'] = utf8_encode($array['obs']);
    $array_temp['pagina_origem'] = utf8_encode($array['pagina_origem']);
    $array_temp['link_origem'] = utf8_encode($array['link_origem']);

    $data[] = $array_temp;

}

//print_r($data);

 $filename = "website_data_" . date('Ymd') . ".xls";

 header("Content-Disposition: attachment; filename=\"$filename\"");
 header("Content-Type: application/vnd.ms-excel");

foreach($data as $row) {
     if(!$flag) {
      echo implode("\t", array_keys($row)) . "\r\n";
       $flag = true;
    }

 //array_walk($row, __NAMESPACE__ . '\cleanData');
 echo implode("\t", array_values($row)) . "\r\n";
}
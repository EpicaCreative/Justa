<?php
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));

$cidade = $query['city'];
$estado = $query['regionName'];
$zip = $query['zip'];
$ip = $query['query'];

echo "Usuário de $cidade - $estado, cep $zip, ip: $ip";

?>
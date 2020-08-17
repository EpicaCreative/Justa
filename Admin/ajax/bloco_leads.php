

<?php

require '../funcoes/funcoes.php';

header('Content-Type: application/json');

//if($_SERVER["REQUEST_METHOD"] == "POST")
//{

    $select_mode = isset($_REQUEST['filter']) ? $_REQUEST['filter'] : 'total';
    $append_interesse = '';
    $append_leads = '';
    $append_interesse_newsletter = '';

    if($select_mode === 'week')
    {
        // $append_interesse = ' AND MONTH(ci.data_cadastro) = MONTH(NOW()) AND YEAR(ci.data_cadastro) = YEAR(NOW()) AND DAY(ci.data_cadastro) > DAY(NOW()) - 7 ';
        // $append_interesse_newsletter = ' AND MONTH(r.data) = MONTH(NOW()) AND YEAR(r.data) = YEAR(NOW()) AND DAY(ci.data_cadastro) > DAY(NOW()) - 7 ';
        // $append_leads = 'WHERE MONTH(ci.data_cadastro) = MONTH(NOW()) AND YEAR(ci.data_cadastro) = YEAR(NOW()) AND DAY(ci.data_cadastro) > DAY(NOW()) - 7 ';

        $append_interesse = ' AND WEEK(ci.data_cadastro) = WEEK(NOW())';
        $append_interesse_newsletter = 'where  WEEK(ca.data_cadastro) = WEEK(NOW())';
        $append_leads = 'WHERE WEEK(ci.data_cadastro) = WEEK(NOW())';

    }else if($select_mode === 'month')
    {
        $append_interesse_newsletter = 'where MONTH(ca.data_cadastro) = MONTH(NOW()) AND YEAR(ca.data_cadastro) = YEAR(NOW())';
        $append_interesse = ' AND MONTH(ci.data_cadastro) = MONTH(NOW()) AND YEAR(ci.data_cadastro) = YEAR(NOW())';
        $append_leads = 'WHERE MONTH(ci.data_cadastro) = MONTH(NOW()) AND YEAR(ci.data_cadastro) = YEAR(NOW())';
    }else if($select_mode === 'year')
    {
        $append_interesse_newsletter = 'where YEAR(ca.data_cadastro) = YEAR(NOW())';
        $append_interesse = ' AND YEAR(ci.data_cadastro) = YEAR(NOW())';
        $append_leads = 'WHERE YEAR(ci.data_cadastro) = YEAR(NOW())';
    }


    $sql_command = "SELECT 
    (SELECT COUNT(*) AS maquininha FROM TB_cadastros_interesse ci WHERE ci.pagina_origem='maquininhas.html' $append_interesse) AS maquininhas,
    (SELECT COUNT(*) AS seja_um_justo FROM TB_cadastros_interesse ci WHERE ci.pagina_origem='seja-um-justo.html' $append_interesse) AS seja_um_justo,
    (SELECT COUNT(*) AS t_candidatos FROM candidatos c ) AS total_candidatos,
    (SELECT COUNT(*) AS credito_justo FROM TB_cadastros_interesse ci WHERE ci.pagina_origem='credito-justo.html' $append_interesse) AS credito_justo,
    (SELECT COUNT(*) AS justa_mais_tef FROM TB_cadastros_interesse ci WHERE ci.pagina_origem='tef.html' $append_interesse) AS justa_mais_tef,
    (SELECT COUNT(*) AS total_leads FROM TB_cadastros_interesse ci $append_leads) AS total_leads,
    (SELECT COUNT(*) AS newsletter FROM TB_cadastros_adquiridos ca $append_interesse_newsletter ) AS newsletter
    ";

    //print($sql_command);

    $conexao = conexao();
    $result = mysqli_query($conexao, $sql_command);
    $array_response = array();

    while ($row = mysqli_fetch_array($result))
    {
        $array_response = array(
            'maquininhas' => $row['maquininhas'],
            'seja_um_justo' => $row['seja_um_justo'],
            'total_candidatos' => $row['total_candidatos'],
            'credito_justo' => $row['credito_justo'],
            'justa_mais_tef' => $row['justa_mais_tef'],
            'total_leads' => $row['total_leads'],
            'newsletter' => $row['newsletter'],
        );
    }

    print(json_encode($array_response));
//}
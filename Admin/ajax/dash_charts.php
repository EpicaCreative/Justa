<?php

include "../sessao.php"; 
include "../funcoes/funcoes.php"; 
error_reporting(1);

header('Content-Type: application/json');

//if($_SERVER["REQUEST_METHOD"] == "POST")
//{

    $page = isset($_GET['page']) ? $_GET['page'] : $_GET['page'];
    $social = $_GET['social'];

    $sql_cadastro_adquirido = "SELECT * FROM vw_chart_cadastro_adquirido";
    $sql_source_maquininhas = get_Sql($social, 'maquininhas.html');
    $sql_source_justa_mais =  get_Sql($social, 'tef.html');
    $sql_source_seja_justo = get_Sql($social, 'seja-um-justo.html');
    $sql_source_credito_justo = get_Sql($social, 'credito-justo.html');
    $sql_source_qr_codes = "SELECT * FROM vw_charts_qr_code";
    //print_r($sql_cadastro_adquirido);

    $statement_cadastro_adquirido = mysqli_query( conexao(), $sql_cadastro_adquirido);
    $statement_cadastro_maquininhas = mysqli_query( conexao(), $sql_source_maquininhas);
    $statement_cadastro_justa_mais = mysqli_query( conexao(), $sql_source_justa_mais);
    $statement_cadastro_seja_justo = mysqli_query( conexao(), $sql_source_seja_justo);
    $statement_cadastro_credito_justo = mysqli_query( conexao(), $sql_source_credito_justo);
    $statement_qr_codes = mysqli_query( conexao(), $sql_source_qr_codes);

    $array_cadastro_adquirido = array();
    $array_cadastro_maquininhas = array();
    $array_cadastro_justa_mais = array();
    $array_cadastro_seja_justo = array();
    $array_cadastro_credito_justo = array();
    $array_cadastro_qr_codes = array();
    $array_labels = array();
    
    $end = new DateTime();
    $end = $end->modify("+2 day");
    $beginTemp = new DateTime();
    $begin = $beginTemp->modify("-22 day");

    $interval = new DateInterval('P1D');
    
    $daterange = new DatePeriod($begin, $interval ,$end);

    $count = 0;
    foreach($daterange as $date) {
        if($count!==0)
        {
            $array_labels[] = $date->format('d/m/Y');        
        }
        $count++;
    }

    while ($row = mysqli_fetch_array($statement_cadastro_adquirido))
    {
        $array_cadastro_adquirido[] = $row['total'];
        // $array_labels[] = $row['created_at'];
    }

    $array_labels = array_reverse($array_labels);



    while ($row = mysqli_fetch_array($statement_qr_codes)){  $array_cadastro_qr_codes[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_maquininhas)){  $array_cadastro_maquininhas[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_justa_mais)){  $array_cadastro_justa_mais[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_seja_justo)){  $array_cadastro_seja_justo[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_credito_justo)){  $array_cadastro_credito_justo[] = $row['total'];  }


    $array_definitive_data = array(
        'cadastro_adquirido' => $array_cadastro_adquirido,
        'labels' => array_reverse($array_labels),
        'array_cadastro_maquininhas' => $array_cadastro_maquininhas,
        'array_cadastro_justa_mais' => $array_cadastro_justa_mais,
        'array_cadastro_seja_justo' => $array_cadastro_seja_justo,
        'array_cadastro_credito_justo' => $array_cadastro_credito_justo,
        'array_cadastro_qr_codes' => $array_cadastro_qr_codes
    );

    print(json_encode($array_definitive_data));
//}


function get_Sql($canal, $page = '')
{
    $appendOne = strlen($page) > 0 ? " (pagina_origem='$page')" : '';

    $appendTwo = strlen($canal) > 0 ?  "(LOWER(aq.canal) LIKE '%$canal%' or LOWER(aq.referral) LIKE '%$canal%' or LOWER(aq.link_origem) LIKE '%$canal%')" : '';

    if(strlen($appendOne) > 0 && strlen($appendTwo) > 0) { $append = ' AND ' . $appendOne . ' AND ' . $appendTwo; }
    else { $append = ' AND ' . $appendOne . ' ' . $appendTwo; }

    //print($append); die();

    return "
    SELECT CAST((CURDATE() - interval 21 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 21 DAY) AS DATE)  $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 20 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 20 DAY) AS DATE)   $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 19 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 19 DAY) AS DATE)   $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 18 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 18 DAY) AS DATE)   $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 17 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 17 DAY) AS DATE)   $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 16 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 16 DAY) AS DATE)   $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 15 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 15 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 14 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 14 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 13 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 13 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 12 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 12 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 11 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 11 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 10 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 10 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 9 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 9 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 8 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 8 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 7 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 7 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 6 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 6 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 5 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 5 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 4 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 4 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 3 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 3 DAY) AS DATE)  $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 2 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 2 DAY) AS DATE)   $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 1 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(data_cadastro AS DATE)=CAST((CURDATE() - interval 1 DAY) AS DATE)  $append)
    UNION ALL
    SELECT CAST(CURDATE() AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST(CURDATE() AS DATE)  $append)
    UNION ALL 
    SELECT CAST((CURDATE() + interval 1 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(data_cadastro AS DATE)=CAST((CURDATE() + interval 1 DAY) AS DATE)  $append);
    ";
}
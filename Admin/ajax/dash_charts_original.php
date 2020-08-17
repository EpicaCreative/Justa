<?php

include "../sessao.php"; 
include "../funcoes/funcoes.php"; 
error_reporting(1);

header('Content-Type: application/json');

//if($_SERVER["REQUEST_METHOD"] == "POST")
//{

    $page = $_GET['page'];

    $sql_cadastro_adquirido = "SELECT * FROM vw_chart_cadastro_adquirido";
    $sql_source_facebook = get_Sql('facebook.com', $page);
    $sql_source_instagram =  get_Sql('instagram.com', $page);
    $sql_source_linkedin = get_Sql('linkedin.com', $page);
    $sql_source_newsletter = get_Sql('newsletter', $page);
    $sql_source_qr_codes = "SELECT * FROM vw_charts_qr_code";
    //print_r($sql_source_facebook);

    $statement_cadastro_adquirido = mysqli_query( conexao(), $sql_cadastro_adquirido);
    $statement_cadastro_facebook = mysqli_query( conexao(), $sql_source_facebook);
    $statement_cadastro_instagram = mysqli_query( conexao(), $sql_source_instagram);
    $statement_cadastro_linkedin = mysqli_query( conexao(), $sql_source_linkedin);
    $statement_cadastro_newsletter = mysqli_query( conexao(), $sql_source_newsletter);
    $statement_qr_codes = mysqli_query( conexao(), $sql_source_qr_codes);

    $array_cadastro_adquirido = array();
    $array_cadastro_newsletter = array();
    $array_cadastro_facebook = array();
    $array_cadastro_instagram = array();
    $array_cadastro_linkedin = array();
    $array_cadastro_qr_codes = array();
    $array_labels = array();

    while ($row = mysqli_fetch_array($statement_cadastro_adquirido))
    {
        $array_cadastro_adquirido[] = $row['total'];
        $array_labels[] = $row['created_at'];
    }

    while ($row = mysqli_fetch_array($statement_qr_codes)){  $array_cadastro_qr_codes[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_facebook)){  $array_cadastro_newsletter[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_instagram)){  $array_cadastro_facebook[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_linkedin)){  $array_cadastro_linkedin[] = $row['total'];  }
    while ($row = mysqli_fetch_array($statement_cadastro_newsletter)){  $array_cadastro_whatsapp[] = $row['total'];  }


    $array_definitive_data = array(
        'cadastro_adquirido' => $array_cadastro_adquirido,
        'labels' => array_reverse($array_labels),
        'array_cadastro_newsletter' => $array_cadastro_newsletter,
        'array_cadastro_facebook' => $array_cadastro_facebook,
        'array_cadastro_instagram' => $array_cadastro_instagram,
        'array_cadastro_linkedin' => $array_cadastro_linkedin,
        'array_cadastro_qr_codes' => $array_cadastro_qr_codes
    );

    print(json_encode($array_definitive_data));
//}


function get_Sql($canal, $page = '')
{
    $append = strlen($page) > 0 ? " AND (pagina_origem='$page')" : '';

    return "
    SELECT CAST((CURDATE() - interval 21 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 21 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 20 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 20 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 19 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 19 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 18 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 18 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 17 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 17 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 16 DAY) AS DATE) as created_at, (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 16 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append) as total
    UNION ALL
    SELECT CAST((CURDATE() - interval 15 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 15 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 14 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 14 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 13 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 13 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 12 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 12 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 11 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 11 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 10 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 10 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 9 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 9 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 8 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 8 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 7 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 7 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 6 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 6 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 5 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 5 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 4 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 4 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 3 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 3 DAY) AS DATE) AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 2 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST((CURDATE() - interval 2 DAY) AS DATE)  AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST((CURDATE() - interval 1 DAY) AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(data_cadastro AS DATE)=CAST((CURDATE() - interval 1 DAY) AS DATE) AND (LOWER(aq.canal)='$canal' or LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append)
    UNION ALL
    SELECT CAST(CURDATE() AS DATE), (SELECT count(*) FROM  TB_cadastros_interesse aq WHERE CAST(aq.data_cadastro AS DATE)=CAST(CURDATE() AS DATE) AND LOWER(aq.canal)='$canal' or (LOWER(aq.referral)='$canal' or LOWER(aq.link_origem) = '$canal') $append);
    ";
}
<?php include "sessao.php"; include "funcoes/funcoes.php"; error_reporting(1); ?>

<meta charset="utf-8">
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Painel Administrativo</title>
        <!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
		
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php" title="Voltar ao início">Admin Justa</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $nome_sessao ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="dados_usuario.php?id=<?php echo $id_sessao; ?>">Dados de Acesso</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">


                            </li>
                            <li class="dropdown">
                                <a href="../index.html" tabindex="-1"  target="_blank" class="dropdown-toggle" >Visualizar Site 

                                </a>
  
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Usu&aacute;rios <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="listagem_usuarios.php">Listagem</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="cad_usuario.php">Novo</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2 text-center" id="sidebar">
                        <img src="../images/logo_azul1.png" />
                        
                        <div class="buttons-justa center-block ">
                            <a href="dashboard.php" class="btn-justa btn-block">DASHBOARD</a>
                            <a href="listagem_banner.php" class="btn-justa btn-block">BANNER</a>
                            <a href="listagem_leads.php" class="btn-justa btn-block">LEADS</a>
                            <a href="listagem_justos.php" class="btn-justa btn-block">JUSTOS</a>
                            <!-- <a href="campanhas_qr_code.php" class="btn-justa btn-block">CAMPANHAS</a> -->
                            <!-- <a href="listagem_candidatos.php" class="btn-justa btn-block">CANDIDATOS</a> -->
                            <a href="https://jobs.kenoby.com/justa" target="_blank" class="btn-justa btn-block">CANDIDATOS</a>
                            <a href="listagem_usuarios.php" class="btn-justa btn-block">USUÁRIOS</a>
                            <a href="listagem_blog.php" class="btn-justa btn-block">PAPO JUSTO</a>
                        </div>



                        <!--<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" 
                            style="width: 100%; margin: 10px; border-radius: 0px;">

                        <li class="active">
                           <a> Páginas</a>
                        </li>		
                        <li class="active-menu-list">
                            <a href="listagem_banner.php"><i class="icon-chevron-right"></i> Banner</a>
                        </li>	
                        <li>
                            <a href="listagem_leads.php"><i class="icon-chevron-right"></i> Leads</a>
                        </li>			
                        <li>
                            <a href="listagem_justos.php"><i class="icon-chevron-right"></i> Justos</a>
                        </li>	
                        <li>
                            <a href="listagem_candidatos.php"><i class="icon-chevron-right"></i> Candidatos</a>
                        </li>			
                        <li>
                            <a href="listagem_blog.php"><i class="icon-chevron-right"></i> Papo Justo</a>
                        </li>
							
                        <li>
                            <a href="listagem_imagens.php"><i class="icon-chevron-right"></i> Imagens</a>
                        </li>
                        <li>
                            <a href="listagem_textos.php"><i class="icon-chevron-right"></i> Textos</a>
                        </li>
                        <li>
                            <a href="listagem_downloads.php"><i class="icon-chevron-right"></i> Links Download</a>
                        </li>
                        <li>
                            <a href="listagem_eventos.php"><i class="icon-chevron-right"></i> Eventos</a>
                        </li>                        
                        <li>
                            <a href="listagem_informativos.php"><i class="icon-chevron-right"></i> Informativos</a>
                        </li>                          
                                            
						<li class="active">
                           <a><br><br></a>
                        </li>                        
                    </ul>--> 
                </div>
       

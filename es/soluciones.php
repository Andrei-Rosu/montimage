<?php
include "../config.php";
include_once "../includes/connection.php";
include_once "../includes/functions.php"
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['title'] ?></title>
    <meta name="description" content="Get to know the team behind the network security products ! " />
    <meta name="keywords" content="network, security, french, réseau, sécurité, française," />
    <meta name="author" content="Andrei Rosu" />
    <link rel="shortcut icon" href="../images/favicon.png">



    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/base.css" />


    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <script type="text/javascript" src="../js/modernizr.custom.04022.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <!--[if lt IE 9]>
    <style>
        .content{
            height: auto;
            margin: 0;
        }
        .content div {
            position: relative;
        }
    </style>
    <![endif]-->
</head>
<body >
<!-- Navbar -->

<nav class="navbar fixed-top navbar-expand-md navbar-light">
    <a class="navbar-brand" href="../index.php"> <img src="../images/montimagetransparent255.png" alt="Montimage logo"></a><a class="navbar-brand logo" href="../index.php">montimage</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-item nav-link " href="<?php echo substr(preg_replace('/\s+/', '', strtolower($lang['about'])),0,6) ?>.php"><?php echo $lang['about'] ?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="<?php echo strtolower($lang['solutions']) ?>.php"><?php echo $lang['solutions'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="<?php echo strtolower($lang['technologies']) ?>.php"><?php echo $lang['technologies'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="<?php if($lang['lang'] =='es'){echo "innovacion";}else {echo strtolower($lang['innovation']);} ?>.php"><?php echo $lang['innovation'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="<?php echo strtolower($lang['awards']) ?>.php"><?php echo $lang['awards'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="<?php if($lang['lang'] =='fr'){echo "actualite";}else {echo strtolower($lang['news']);} ?>.php"><?php echo $lang['news'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link active" href="#"><?php echo $lang['contact'] ?></a>
            <li class="nav-item">
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=""><</a>
                    <a class="dropdown-item" href=""></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?lang=fr"></a>
                </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang['language'] ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../index.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
                    <a class="dropdown-item" href="../index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
                    <a class="dropdown-item" href="../index.php?lang=es"><?php echo $lang['lang_es'] ?></a>
                </div>
            </li>
        </ul>

    </div>
</nav>
<!-- END Navbar -->
<!-- Banner Area -->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Soluciones hoy.</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Offer Area =================-->
<section class="offer_area p_120 ">
    <div class="container">

        <div class="offer_title">
            <h5>
                Nos esforzamos por ofrecer las mejores soluciones para proyectos de todos los tamaños.</h5>
            <!--<p>Connect to the future</p>-->
        </div>

        <div class="row offer_inner">
            <div class="col-md-4 card">
                <div class="offer_item card-body">
                    <div class="text-center card-text p-5">
                        <i class="fas fa-box-open fa-5x "></i>
                    </div>
                    <!--<img class=" card-img-top img-fluid" src="../images/lightfiber.png" alt="">-->
                    <div class="offer_text card-text">
                        <h4>Productos</h4>
                        <p>Nuestros productos son el fruto de la mejor investigación y participación en proyectos de la U.E.
                            junto con las empresas más prestigiosas en sus respectivas ramas de actividad.</p>
                        <a href="produits.php" class="btn btn-primary m-4">Ver nuestros productos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card">
                <div class="offer_item card-body">
                    <div class="text-center card-text p-5">
                        <i class="fas fa-cogs fa-5x"></i>
                    </div>
                    <!--<img class="img-fluid card-img-top" src="../images/slowshutter.png" alt="">-->
                    <div class="offer_text card-text">
                        <h4>Servicios</h4>
                        <p>Nuestros servicios se benefician de toda nuestra experiencia en la seguridad y la optimización
                            de redes para aportar solo los mejores resultados a nuestros clientes en cada proyecto.</p>
                        <a href="services.php" class="btn btn-primary m-4">Ver nuestros servicios</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card">
                <div class="offer_item card-body">
                    <!--<img class="img-fluid card-img-top" src="../images/finishline.png" alt="">-->
                    <div class="text-center card-text p-5">
                        <i class="fas fa-file-signature fa-5x"></i>
                    </div>
                    <div class="offer_text card-text">
                        <h4>Formación</h4>
                        <p>
                            ¿Darle a un hombre un pez al día, o enseñarle a pescar? Nuestro entrenamiento cubre la
                            mayoría de los temas relacionados con el uso del "cloud" y la seguridad cibernética entre los temas más recientes.</p>
                        <a href="formation.php" class="btn btn-primary m-4">Ver nuestras formaciónes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Offer Area =================-->

<!--================Feature Area =================-->
<section class="feature_area p_60 ">
    <div class="container">
        <div class="main_title">
            <h2>"Hay un ataque de hackers cada 39 segundos".</h2>
            <p>No es una cuestión de "si" vas a ser atacado,
                es una cuestión de cuándo vas a ser atacado.</p><br>
            <p>
                Cuatro pasos principales a tomar cuando se enfrentan a los ataques cibernéticos:</p>

        </div>
        <div class="row feature_inner">
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Impedir</h4>
                    <p>
                        La mayoría de las brechas de seguridad se debieron a fugas involuntarias de datos.
                        La mayoría de las amenazas pueden y deben evitarse mediante la entrega de una capacitación de seguridad adecuada.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Percibir</h4>
                    <p>
                        A la mayoría de las empresas les lleva más de seis meses detectar una brecha de seguridad. Mediante el seguimiento de su red
                        gracias al análisis de comportamiento y la inteligencia artificial, podemos detectar anomalías en su red.

                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Reaccionar</h4>
                    <p>
                        Detectar en tiempo real los intentos de intrusión es el primer paso. Hacemos posible que tomes las
                        decisiones relacionadas con el tráfico de su red, como restringir ciertos dominios o bloquear el tráfico.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Mitigar</h4>
                    <p>
                        Respuesta  de emergencia a incidentes. En la eventualidad de que la seguridad de su red ya hayan
                        sido violada, podemos ayudarle diseñando planes de recuperación y evitando futuros incidentes
                        relacionados a la seguridad.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Area =================-->

<div class="col-md-12 p-5 sol">
    <a class="col-md-4 offset-1 primary_btn line" href="solutions.php"><span>Nuestras tecnologías</span></a>
</div>

<div class="col-md-12 p-5">
    <picture class="content col-md-4 col offset-md-7"><img src="../images/netprotects.png" class=" content__pic img-fluid img-responsive"></picture>
</div>

<!-- Social Networks -->
<div class="col-md-12 text-center mb-2">
    <ul class="social-network social-circle">
        <li><a href="https://www.facebook.com/montimage/" target="_blank" class="icoFacebook" title="Facebook"><i class="fab fa-facebook fa-2x"></i></a></li>
        <li><a href="https://twitter.com/montimage_fr" target="_blank" class="icoTwitter" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
        <li><a href="https://www.linkedin.com/company/montimage/about/" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin fa-2x"></i></a></li>
    </ul>
</div>
<!-- END Social Networks -->


<nav class="navbar navbar-light">


    <a class="nav-item nav-link text-dark terms" href="../ToS.html"><?php echo $lang['terms'] ?></a>
    <a class="nav-item nav-link text-dark copyright" href="#">Copyright</a>


</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>







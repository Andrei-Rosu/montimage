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
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <script type="text/javascript" src="../js/modernizr.custom.04022.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
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

<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="../index.php"> <img src="../images/MontimageG.png" alt="Montimage logo"></a>
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
            </li>
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

<!-- Content  Title -->

<div class="row justify-content-center inverse">
    <div class="col-lg-8 text-center">
        <div class="main_title">
            <h1>
                Una buena red es una red en la cual uno se puede fiar</h1>
        </div>
    </div>
</div>

<!-- END Content  Title -->

<section class="recent_update_area">
    <div class="container">
        <div class="recent_update_inner">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        <span class="lnr lnr-screen"></span>
                        <h6>compromisos</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                       aria-selected="false">
                        <span class="lnr lnr-screen"></span>
                        <h6>equipo</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row recent_update_text align-items-center">
                        <div class="col-md-12">
                            <div class="common_style row">
                                <p class= "col-md-12 line">
                                    Nuestro lema : </p>
                                <h3 class= "col-md-12">
                                    El trabajo bien hecho es el que dura en el tiempo.</h3>
                                <div class="col-md-5 offset-1 p-4">
                                    <h5>
                                        Calidad: </h5><br>
                                    <p>
                                        Calidad de los servicios garantizados por: <br>
                                        - Múltiples premios y galardones, <br>
                                        - Estándares avalados por nuestros proyectos europeos, <br>
                                        - El uso continuado de la tecnología más avanzada en el campo, <br>
                                        - Encuestas de satisfacción para cada proyecto.
                                    </p>
                                </div>
                                <div class="col-md-5 offset-1 p-4">
                                    <h5>Seguridad : </h5><br>
                                    <p>
                                        Hacemos de la seguridad nuestra prioridad: <br>
                                        - prevención de riesgos, <br>
                                        - confidencialidad de los intercambios, <br>
                                        - Vigilancia constante, <br>
                                        - Innovación permanente .
                                    </p>
                                </div>
                                <div class="col-md-10 offset-1 text-center p-4">
                                    <h5>
                                        Eficiencia </h5><br>
                                    <p>


                                        Nuestros talentosos ingenieros se esfuerzan por proporcionarle su
                                        mejor trabajo dentro de los plazos acordados.
                                    </p>
                                </div>
                                <div class="col-md-5 offset-1 text-center p-4">
                                    <h5>

                                        Flexibilidad: </h5><br>
                                    <p>


                                        A su servicio, ofrecemos soluciones adaptables a sus necesidades particulares.
                                    </p>
                                </div>
                                <div class="col-md-5 offset-1 text-center pt-4">
                                    <h5>
                                        Formalidad: </h5><br>
                                    <p>

                                        Puede contar con nuestros 14 años de experiencia en el campo de la
                                        informática.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row recent_update_text align-items-center">
                        <div class="col-md-12">
                            <div class="common_style">
                                <p class="line">Nuestros talentos</p>
                                <h3>

                                    ¿Quiénes son los chicos del primer piso?</h3>
                                <p>
                                    En toda modestia, doctores y genios; <br>
                                    Expertos en diseño y desarrollo de sistemas complejos. <br>
                                    Honestamente, sabemos lo que hacemos. <br>
                                    Nos dedicamos a desarrollar soluciones sostenibles: <br>
                                    - Te traemos los frutos de nuestra investigación avanzada en seguridad de redes. <br>
                                    - Hacemos tus redes fáciles de usar. <br>
                                    Herramientas poderosas a precios asequibles, lo que cada uno de nosotros espera encontrar por todos los problemas. <br>
                                    Algunas informaciones sobre nosotros: <br>
                                    Entre nosotros, dominamos 23 lenguajes informáticos. <br>
                                    Para nosotros, la clave del éxito es un cliente feliz. <br>
                                    La mayoria de nosotros, somos noctámbulos.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="col-md-12 p-5 sol">
    <a class="col-md-4 offset-1 primary_btn line" href="soluciones.php"><span>Ver nuestras soluciones</span></a>
</div>

<div class="col-md-12 p-5">
    <picture class="content col-md-4 col offset-md-7"><img src="../images/netprotectsmall.png" class=" content__pic img-fluid img-responsive"></picture>
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







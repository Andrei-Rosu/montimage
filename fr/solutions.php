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
                <h2>Solutions aujourd'hui.</h2>
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
                Nous nous efforçons d'offrir les meilleures solutions pour les projets de toutes tailles.</h5>
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
                        <h4>Produits</h4>
                        <p>Nos produits sont le fruit d'une recherche de pointe et d'une participation à des projets U.E.
                            en partenariat  les entreprises les plus prestigieuses dans leurs domaines respectifs.</p>
                        <a href="produits.php" class="btn btn-primary m-4">Voir nos produits</a>
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
                        <h4>Services</h4>
                        <p>Nos services bénéficient de toute notre expérience en matière de sécurité et d’optimisation
                            des réseaux afin d'apporter uniquement les meilleurs résultats à nos clients.</p>
                        <a href="services.php" class="btn btn-primary m-4">Voir nos services</a>
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
                        <h4>Formation</h4>
                        <p>
                            Donner un poisson à un homme par jour ou lui apprendre à pêcher? Notre formation couvre la
                            plupart des sujets liés à l'utilisation du cloud et à la cybersécurité parmi les sujets les plus récents</p>
                        <a href="formation.php" class="btn btn-primary m-4">Voir nos formations</a>
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
            <h2>"Il y a une attaque toutes les 39 secondes."</h2>
            <p>Ce n'est pas une question de "si" vous allez être attaqué,
                                 c'est une question de quand.</p><br>
            <p>Quatre grandes mesures à prendre face aux cyberattaques:</p>

        </div>
        <div class="row feature_inner">
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Prévenir</h4>
                    <p>La plupart des atteintes à la sécurité ont été provoquées par des fuites non intentionnelles de données.
                        La plupart des menaces peuvent et doivent être évitées grâce à une formation adéquate en matière de sécurité. </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Apercevoir</h4>
                    <p>Il faut plus de six mois à la plupart des entreprises pour détecter une violation de données. En
                        surveillant votre réseau en temps réel en utilisant l'analyse comportementale et l'intelligence
                        artificielle, nous pouvons détecter des anomalies dans votre réseau.

                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Réagir</h4>
                    <p>Détecter en temps réel les tentatives d'intrusion est la première étape.
                        Nous vous habilitons à prendre les décisions concernant votre trafic réseau,
                        telles que la restriction de certains domaines ou le blocage du trafic.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Atténuer</h4>
                    <p>Réponse d’urgence aux incidents . Dans l’éventualité où vos réseaux ont déjà subi une atteinte à
                        la sécurité, nous pouvons vous aider en concevant des plans de récupération et en évitant
                        les futurs incidents liés à la sécurité</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Area =================-->

<div class="col-md-12 p-5 sol">
    <a class="col-md-4 offset-1 primary_btn line" href="technologies.php"><span>Nos technologies</span></a>
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







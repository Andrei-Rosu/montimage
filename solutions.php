<?php
include "config.php";
include_once "includes/connection.php";
include_once "includes/functions.php"
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
    <link rel="shortcut icon" href="images/favicon.png">



    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css" />


    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
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

<?php include ("includes/navbar.php");?>
<!-- END Navbar -->
<!-- Banner Area -->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Solutions today.</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Offer Area =================-->
<section class="offer_area p_120 ">
    <div class="container">

        <div class="offer_title">
            <h3>We strive to offer the best solutions for projects of all sizes</h3>
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
                        <h3>Products</h3>
                        <p>Our products are the fruit of top research and participation in E.U. projects together with
                            the most prestigious companies in their respective domains.</p>
                        <a href="products.php" class="btn btn-primary m-4">See our products</a>
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
                        <h3>Services</h3>
                        <p>Our services benefit from all our experience in the network security and optimizing in order
                            to bring only the best results to our customers.</p>
                        <a href="services.php" class="btn btn-primary m-4">See our services</a>
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
                        <h3>Training</h3>
                        <p>Give a man a fish a day, or teach him how to fish? Our training covers most topics related
                            to cloud usage and cyber security among the most recent topics.</p>
                        <a href="training.php" class="btn btn-primary m-4">See our training programs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main_title">
            <h3>"There is a hacker attack every 39 seconds."</h3>
            <p>It is not a matter of "if" you are going to be attacked,
                it is a matter of when.</p><br>
            <p>Four major steps to be taken when facing cyber attacks :</p>

        </div>
        <div class="row feature_inner">
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Prevent</h4>
                    <p>The majority of the security breaches have been because of unintentional leakage of data.
                        Most threats can be and should be avoided by having a proper security training delivered. </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Perceive</h4>
                    <p>It takes most companies over six months, to detect a data breach. By monitoring your network
                        using artificial intelligence, we can detect anomalies and empower you to take critical decisions.

                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>React</h4>
                    <p>Detecting in real time the intrusion attempts is the first step. We empower you to take the
                        decisions regarding your network traffic such as restricting certain domains or blocking traffic.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature_item">
                    <h4>Mitigate</h4>
                    <p>Emergency incident response.In the eventuality where networks have already been breached, we can
                        help you  by designing recovery plans and avoiding future security related incidents</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 p-5">
        <a class="col-md-4 offset-1 primary_btn line" href="solutions.php"><span>Our tech stack</span></a>
    </div>
    <?php include ("includes/bottom.php");?>
</section>
<!--================End Offer Area =================-->



</body>
</html>







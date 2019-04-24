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

<!-- Content  Title -->

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2><?php echo $lang['about_h1']?></h2>
            </div>
        </div>
    </div>
</section>

<!-- END Content  Title -->

<section class="recent_update_area">
    <div class="container">
        <div class="recent_update_inner">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        <span class="lnr lnr-screen"></span>
                        <h6><?php echo $lang['about_h6_1']?></h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                       aria-selected="false">
                        <span class="lnr lnr-screen"></span>
                        <h6><?php echo $lang['about_h6_2']?></h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row recent_update_text align-items-center">
                        <div class="col-md-12">
                            <div class="common_style row">
                                <p class= "col-md-12 line"><?php echo $lang['about_p_motto']?></p>
                                <h3 class= "col-md-12">
                                    <?php echo $lang['about_h3_motto_content']?></h3>
                                <div class="col-md-5 offset-1 p-4">
                                    <h5><?php echo $lang['about_h_quality']?></h5><br>
                                    <p>
                                        <?php echo $lang['about_p1_quality']?><br>
                                        <?php echo $lang['about_p2_quality']?><br>
                                        <?php echo $lang['about_p3_quality']?><br>
                                        <?php echo $lang['about_p4_quality']?><br>
                                        <?php echo $lang['about_p5_quality']?>
                                    </p>
                                </div>
                                <div class="col-md-5 offset-1 p-4">
                                    <h5><?php echo $lang['about_h_security']?></h5><br>
                                    <p>
                                        <?php echo $lang['about_p1_security']?><br>
                                        <?php echo $lang['about_p2_security']?><br>
                                        <?php echo $lang['about_p3_security']?><br>
                                        <?php echo $lang['about_p4_security']?><br>
                                        <?php echo $lang['about_p5_security']?>
                                    </p>
                                </div>
                                <div class="col-md-10 offset-1 text-center pt-4">
                                    <h5>
                                        <?php echo $lang['about_h_sustainable']?></h5><br>
                                    <p>
                                        <?php echo $lang['about_p1_sustainable']?><br>
                                        <?php echo $lang['about_p2_sustainable']?>
                                    </p>
                                </div>
                                <div class="col-md-10 offset-1 text-center p-4">
                                    <h5>
                                        <?php echo $lang['about_h_efficiency']?></h5><br>
                                    <p>
                                        <?php echo $lang['about_p1_efficiency']?>
                                    </p>
                                </div>
                                <div class="col-md-5 offset-1 text-center p-4">
                                    <h5>
                                       <?php echo $lang['about_h_flexibility']?></h5><br>
                                    <p>

                                        <?php echo $lang['about_p1_flexibility']?>
                                    </p>
                                </div>
                                <div class="col-md-5 offset-1 text-center pt-4">
                                    <h5><?php echo $lang['about_h_reliability']?></h5><br>
                                    <p>
                                        <?php echo $lang['about_p1_reliability']?>
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
                                <p class="line"><?php echo $lang['about_p_team']?></p>
                                <h3><?php echo $lang['about_h3_team_content']?></h3>
                                <p>
                                    <?php echo $lang['about_p1_team']?><br>
                                    <?php echo $lang['about_p2_team']?><br>
                                    <?php echo $lang['about_p3_team']?><br>
                                    <?php echo $lang['about_p4_team']?><br>
                                    <?php echo $lang['about_p5_team']?><br>
                                    <?php echo $lang['about_p6_team']?><br>
                                    <?php echo $lang['about_p7_team']?><br>
                                    <?php echo $lang['about_p8_team']?><br>
                                    <?php echo $lang['about_p9_team']?><br>
                                    <?php echo $lang['about_p10_team']?><br>
                                    <?php echo $lang['about_p11_team']?>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 p-5">
        <a class="col-md-4 offset-1 primary_btn line" href="solutions.php"><span><?php echo $lang['about_solutions_link']?></span></a>
    </div>
    <?php include "includes/bottom.php"?>
</section>

</body>
</html>







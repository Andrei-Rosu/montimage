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
            <div class="banner_content text-center ">
                <h2>Our products never sleep.</h2>
            </div>
            <div class="banner_content text-left pt-5">
                <P id="banner_products">
                    The Montimage product portfolio consists of best-in-class network security technology.<br>
                    Our customers benefit from our of excellence in working to the highest standards.<br>
                </P>

            </div>
        </div>
    </div>

</section>
<!--================End Home Banner Area =================-->

<!--================Offer Area =================-->
<section class="offer_area p_120 ">
    <div class="container">
        <h2 class=" banner_content text-left">
            New products
        </h2>
        <div class="banner_content text-left pt-5">

            <P class="products">
                We are constantly developing and improving our product portfolio.<br>
                Our team is always here in order to implement innovation to stay ahead of the malicious intents.
            </P>
        </div>
    </div>
</section>









<div class="product_area">
    <div class="row no-gutters p-5">
        <div class="col-md-12 pb-2"><h3>MMT - box</h3></div>
        <div class="col-md-2  offset-3 no-gutters"><img class="img-fluid img-responsive" src="../images/MMT-box.png" alt="" ></div>
        <div class="col-md-6 offset-1 no-gutters pb-5">
            <h4>An industrial-level solution to manage networks at an unbeatable price</h4>
            <p>Analyze how your Internet connection is used.<br>
                - Block certain types of content (sites, applications, social networks).<br>
                - Allow applications and services in your network.<br>
                - Block ads before they reach your device.<br>
                - Establish full control on all your devices.<br>
                and more features being developed as you read these lines...</p>
        </div>
        <div class="container">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg">MMT-box details</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">MMT-box in detail</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>
                            <li>
                                The software embedded in MMT-Box is based on the Montimage Monitoring Tool.
                            </li>
                            <li>
                                This tool is capable of efficiently and effectively classifying and analyzing
                                gigabits of data per second, offering network statistics and detecting security
                                issues in an on-demand basis.
                            </li>
                            <li>
                                For MMT-Box, this technology has been specially tailored for home users,
                                optimizing the analysis and classifications techniques to offer a simple,
                                yet reliable and powerful monitoring and management network solution.
                            </li>
                        </ul>
                        <ul>

                            <li>
                                <h3>Network Statistics</h3>
                            </li>
                            <ul>
                                <li>
                                    MMT-Box uses advanced monitoring techniques to analyze the network flows.
                                    It will actively analyze the amount of data exchanged,
                                    what devices are the origin of the communications, what are the destinations,
                                    and what type of content is being transferred.
                                </li>
                                <li>
                                    All this information is collected passively on the fly, without impacting the connected
                                    devices.
                                </li>
                                <li>
                                    Once collected, this information is aggregated in the same box
                                    (your information never leaves your box), and is displayed in the web-based interface.
                                </li>
                            </ul>


                            <li>
                                <h3>Blocking and allowing content, sites and applications</h3>
                            </li>

                            <ul>
                                <li>The technology embedded in MMT-Box continuously analyses the data being transferred,
                                    allowing the classification of the traffic.
                                </li>
                                <li>
                                    In this sense, MMT-Box also identifies the type of the content,
                                    what site is being accessed, and the type of application used.
                                </li>
                                <li>
                                    This data is part of the network statistics, and it represents crucial information used
                                    when defining the allowed or blocked content types.
                                </li>
                            </ul>
                            <li>
                                <h3>Ads-removal</h3>
                            </li>
                            <ul>
                                <li>
                                    Since MMT-Box is always analyzing your network data, it is capable of identifying addresses
                                    that deliver ads.
                                </li>
                                <li>
                                    Using this technology, MMT-Box is capable of identifying ads and effectively blocking them,
                                    allowing you a more pleasant navigation experience.
                                </li>
                            </ul>
                            <li>
                                <h3>Parental Control Mode</h3>
                            </li>
                            <ul>
                                <li>Last but not least, the embedded monitoring technology allows you to set parental
                                    control rules, that are actively enforced by MMT-Box.
                                </li>
                                <li>The rules use the same information actively extracted by the MMT-Box, offering you
                                    the capability to manage:</li>
                                <ul>
                                    <li>The content being accessed.</li>
                                    <li>The sites being accessed.</li>
                                    <li>The applications in use</li>
                                    <li>The time slots an application, content or application is allowed or not.</li>
                                </ul>
                            </ul>
                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters p-5">
        <div class="col-md-12 pb-2"><h3>EPC-in-a-box</h3></div>
        <div class="col-md-2 offset-3 no-gutters"><img class="img-responsive img-fluid" src="../images/EPC.png" alt="" ></div>
        <div class="col-md-6 offset-1 no-gutters pb-5">
            <h4>An appliance that allows the instant deployment of a core network</h4>
            <p>Create 4G and 5G ready LTE networks on-the-go<br>
                - Fast deployment in 5 minutes;<br>
                - IoT ready network infrastructure (slicing, efficiency);<br>
                - Reliable and robust core for emergency and safety networks;<br>
                - Future proof with extensions to become 5G core.<br>
                Integrated with software-defined networking and network function virtualization;</p>
        </div>
        <div class="container">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg2" data-whatever="EPC">EPC-in-a-box details</button>

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5 text-left">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">EPC in detail</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>
                            <li>
                                EPC-in-a-box is a new 4G/5G-ready Evolved Packet Core solution jointly commercialised by
                                Montimage and <a href="https://cumucore.com/">Cumucore</a>
                            </li>
                        </ul>
                        <ul>

                            <li>
                                <h3>Network monitoring features developed by Montimage:</h3>
                            </li>
                            <li>
                            <ul>
                                <li>
                                    Intelligent distributed monitoring agents;
                                </li>
                                <li>
                                    Fine-grained and configurable network visibility;
                                </li>
                                <li>
                                    Security and performance monitoring based on DPI and machine learning;
                                </li>
                                <li>Automated management and control;</li>
                                <li>Customizable dashboards to define new collected statistics and configure new views or customize a large list of predefined ones;</li>
                                <li>Dynamically updated topology: information, statistics, configuration of eNodeBs, MMEs and UEs.</li>
                            </ul>
                            </li>


                            <li>
                                <h3>Network core features developed by Cumucore:</h3>
                            </li>
                            <li>

                            <ul>
                                <li>Flexible, agile, scalable 4G and 5G-ready core;
                                </li>
                                <li>
                                    Reduce high upfront investments in the core;
                                </li>
                                <li>
                                    Pay as you grow based on actual used capacity;
                                </li>
                                <li>
                                    Reduce OPEX due to better automation and more optimized network;
                                </li>
                                <li>
                                    Improve operator ARPU by enabling personalized services to their customers;
                                </li>
                                <li>

                                    <strong>Integration with optimized services; caching, content delivery, IPTV and OTT services:</strong>
                                    <ul>
                                        <li>
                                            Traffic savings in packet core of up to 40%;
                                        </li>
                                        <li>
                                            End-to-end latency reduced by 60%.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            </li>

                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="col-md-12 p-5 sol">
    <a class="col-md-4 offset-md-4 primary_btn line align-self-end " href="technologies.php">Our technologies</a>
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







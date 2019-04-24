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
            <div class="banner_content text-left pt-5">
                <P id="banner_products">
                    Security-related risks are reduced by 70% when businesses invest in cybersecurity training and awareness<br>
                </P>
            </div>
            <div class="banner_content text-right ">
                <h2>It's training time !</h2>
            </div>

        </div>
    </div>

</section>
<!--================End Home Banner Area =================-->

<!--================Offer Area =================-->
<div class="product_area">
    <div class="row no-gutters p-5 ">
        <div class="col-md-12 pb-2"><h3>Security training</h3></div>
        <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
            <blockquote><h4>People are a company's  greatest assets, but also it's biggest security risks</h4></blockquote>
            <p>Today, cyber security awareness is critical to the survival in an industry dominated by growing virtual crime.</p>
            <p class="pl-4">You may implement defense systems, firewalls and the best protocols to keep your company safe from threats.</p>
            <p class="pl-4">Without a proper training in cyber security awareness all the systems and technology are useless.</p>
            <p class="pl-4">Our security and awareness training successfully incorporates the theoretical aspects into
                real-life scenarios by simulating the latest types of attacks and defense responses</p>

            <blockquote><h4>Among the topics we cover:</h4>
            <p class="pl-2">-  Developing best practices in cybersecurity</p>
            <p class="pl-2">-  Cyber ​​security - how to protect your assets.</p>
            <p class="pl-2">-  Understanding the security impact of big data </p>
            <p class="pl-2">-  How safe are the connected objects?</p>
        </div>
        <div class="col-md-12 p-5">
            <a class="col-md-4 offset-md-4 primary_btn line align-self-end " href="contact.php">Contact us for a demo</a>
        </div>
    </div>

    <div class="row no-gutters p-5 ">
        <div class="col-md-12 pb-2"><h3>Cloud classes</h3></div>
        <div class="col-md-10 offset-1 no-gutters pt-5 pb-5">
            <blockquote><h4>
                    The current business environment demands cost effective and reliable solutions. </h4></blockquote>
            <p>Cloud computing technology provides the answer.</p>
            <p class="pl-4">Security, as always is a key consideration when migrating to the cloud.</p>
            <p class="pl-4">With the correct set up, cloud technologies are extremely secure.</p>
            <p class="pl-4">Of course, hackers and cyber criminals will always try to infiltrate systems and infrastructures.</p>
            <p class="pl-4">However the technologies in the cloud are rapidly advancing and are strong against cyber attacks,
                which is one reason companies trust the cloud with their data and infrastructures.</p>
            <blockquote><h4>Some of the courses having the cloud as a subject:</h4>
                <p class="pl-2">-  Simplify your IT uses thanks to Cloud Computing</p>
                <p class="pl-2">-  Cloud Technology Associate </p>
                <p class="pl-2">-  Professional Cloud Developer</p>
                <p class="pl-2">-  Professional Cloud Security Manager</p>
                <p class="pl-2">-  Professional Cloud Solutions Architect</p>
                <p class="pl-2">-  Professional Cloud Service Manager</p>
                <p class="pl-2">-  Training cloud AWS</p>
                <p class="pl-2">-  Training cloud Azure</p>
        </div>
        <div class="col-md-12 p-5">
            <a class="col-md-4 offset-md-4 primary_btn line align-self-end " href="contact.php">Contact us for details</a>
        </div>
    </div>
    <div class="row no-gutters p-5 ">
        <div class="col-md-12 pb-2"><h3>Our latest courses:</h3>:</h3></div>
        <div class="col-md-10 offset-1 no-gutters pt-5 pb-5">
            <blockquote><h4>The ever changing picture of today's world  </h4></blockquote>

                <p class="pl-2">-  Big Data Foundation </p>
                <p class="pl-2">-  Manager in the digital era</p>
                <p class="pl-2">-  Mobilize your employees in the digital transformation plan</p>
                <p class="pl-2">-  The fundamentals of  GDPR</p>
                <p class="pl-2">-  Decode the jargon of digital culture</p>
                <p class="pl-2">-  Discover the ground-breaking technologies yet to come in commerce</p>
                <p class="pl-2">-  Discover the ground-breaking technologies yet to come in service</p>

        </div>

    </div>
<?php include ("includes/bottom.php");?>
</body>
</html>







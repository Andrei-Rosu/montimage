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

<!-- Navbar -->

<!-- Banner area-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Contact us</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner area-->
<!-- /page-title -->

<div id="contact-map">
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=39+Rue+Bobillot,+Paris,+France&amp;hl=en&amp;ie=UTF8&amp;sll=37.0625,-95.677068&amp;sspn=59.206892,114.169922&amp;oq=39+rue+bobillot+&amp;hnear=39+Rue+Bobillot,+75013+Paris,+%C3%8Ele-de-France,+France&amp;t=m&amp;hq=&amp;ll=48.828707,2.353649&amp;spn=0.009888,0.018239&amp;z=15&amp;output=embed"></iframe>
</div>
<!-- /contact-map -->

<section class="offer_area p_120 ">
    <div class="container">
        <div class="row">
                    <div class="col-md-6 col-md-offset-3">

                        <div class="offer_title">
                            <h3>Send us a Message</h3>
                        </div>



                        <form class="form-horizontal" role="form" id="contact" method="post" action="traitement_formulaire.php" >

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name :</label>

                                <input type="text" class="form-control col-sm-10" id="name" name="name" placeholder="First & Last Name" tabindex="1" />

                            </div>

                            <div class="col-md-12">
                                <label for="email">Email :</label><input type="text" id="email" name="email" tabindex="2" />
                            </div>

                            <div class="col-md-12">
                                <label for="objet">Object :</label><input type="text" id="objet" name="objet" tabindex="3" value=""/>
                            </div>

                            <div class="col-md-12">
                                <label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="5"></textarea>
                            </div>

                            <div ><input  type="submit" name="envoi" value="Send message !" /></div>
                        </form>


                    </div>
                </div>
                <div >

                    <div>

                        <h3><span class="slash">//</span> More Information</h3>

                        <p>
                            <strong>Address</strong>
                            <br>
                            Montimage
                            <br>
                            39 rue Bobillot,
                            <br>
                            75013, Paris, France
                        </p>

                        <p>
                            <strong>Phone</strong>
                            <br>
                            Phone: +33 (0) 1 77 19 68 99
                            <br>
                        </p>

                        <p>
                            <strong>Email</strong>
                            <br>
                            <a href="mailto:contact@montimage.com"> contact@montimage.com </a>



                            <!--	<script type="text/javascript">
                                    //<![CDATA[

                                    var x = "function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" + "harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\"" + "\\\\,l=x.length;for(i=0;i<l;i++){if(i<33)y++;y%=127;o+=String.fromCharCode(" + "x.charCodeAt(i)^(y++));}return o;}f(\\\"\\\\FKE]GI@D\\\\\\\\034CDQNYR.jfz)j" + "$<54i\\\\\\\\nz7=7\\\\\\\\014\\\\\\\\026\\\\\\\\014^\\\\\\\\006\\\\\\\\t\\\\" + "\\\\t\\\\\\\\034\\\\\\\\010\\\\\\\\t\\\\\\\\037,\\\\\\\\035\\\\\\\\013\\\\\\" + "\\035\\\\\\\\023\\\\\\\\024\\\\\\\\004\\\\\\\\032\\\\\\\\033[\\\\\\\\025\\\\" + "\\\\030\\\\\\\\025F\\\\\\\\t\\\\\\\\016\\\\\\\\036\\\\\\\\027\\\\\\\\033cu?" + "@kkrfk}V),yg{|t/O6I4){vto}~j_PDP@ASOH\\\\\\\\006JEF\\\\\\\\020\\\\\\\\002O\\" + "\\\\\\021\\\\\\\\022\\\\\\\\030\\\\\\\\t\\\\\\\\003\\\\\\\\017\\\"\\\\,33)\\" + "\"(f};)lo,0(rtsbus.o nruter};)i(tArahc.x=+o{)--i;0=>i;1-l=i(rof}}{)e(hctac}" + ";l=+l;x=+x{yrt{)97=!)31/l(tAedoCrahc.x(elihw;lo=l,htgnel.x=lo,\\\"\\\"=o,i " + "rav{)x(f noitcnuf\")";
                                    while ( x = eval(x));
                                    //-->
                            <!--		//]]>
                                </script>
                                <br>
                            </p>

                        </div>
                        <!-- /sidebar -->

                    </div>
                    <!-- /grid-4 -->



            <!-- /content -->





            <div class="row">

                <div class="">

                    <h3><span class="slash">#</span> Subscribe and get updates</h3>


                    <p align="justify">Subscribe to our newsletter and get exclusive deals you wont find anywhere else to your inbox!</p>
                </div><!-- /grid-4 -->
            </div> <!-- /row -->
        </div>
    </div>
    <form id="contact" method="post" action="newsletter.php" >

        <label for="email"></label><input type="text" id="email" name="email" />

        <input  type="submit" name="envoi" value="Subscribe !" />

        <!--	<button class="btn btn-warning">Subscribe</button>-->
    </form>

    <?php include ("includes/bottom.php");?>
</section>

<!-- /wrapper -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script src="./js/percevio.js"></script>

<script>
    $(function() {

    });

</script>
</body>
</html>

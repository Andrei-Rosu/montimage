<?php
include "config.php";
include "includes/functions.php";
require 'includes/connection.php';
include "includes/paginator.php";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['title'] ?></title>
    <meta name="description" content="A set of animated ambient canvas backgrounds with different effects" />
    <meta name="keywords" content="canvas, ambient, background, animation, javascript, demo, web development" />
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
<body class="network">


<main>

    <div class="frame">
        <<?php include ("includes/navbar.php");?>
    </div>

</main>
<div class="content container admin">

    <div class="row ">
        <h1 class="col-md-12">
            Montimage news
        </h1>
        <?php
        while($article = $articles->fetch())
        {
            $dbImage = $article['article_img'];
            echo'<div class="col-md-12"><a class="" href="article.php?id='.$article['article_id'].'"><h2 class="article-title">'
                .$article['article_title'].'
                                    </h2></a></div>';
            echo '<div class="col-md-8 p-5 no-gutters">
                          <article class="media content-section">
                                <div class="media-body">';
            echo '<p class="">'.substr($article['article_content'],0,350).'</p>
                                </div>
                          </article>
                          
                            <a class="btn btn-info" href="article.php?id='.$article['article_id'].'">Read more...</a>
                       
                      </div>';
            echo '<div class="col-md-4 p-5 no-gutters">
                            <img class=" article-img img-fluid img-thumbnail" src="images/'.$dbImage.'">
                       </div>';


        }

        ?>
        <nav aria-label="navigation">
        <ul class="pagination">
            <li class="page-item <?php if($current == '1'){echo "disabled";}?>"><a class="page-link" href="?p=<?php if($current != '1'){ echo $current-1;}else{echo $current;}?>" >&laquo;</a></li>
            <?php
                for($i=1; $i<=$nbPage; $i++) {
                    if($i == $current){
                ?>
                    <li class="active page-item"><a class="page-link" href="?p=<?php echo $i;?>"><?php echo $i; ?></a></li>
                        <?php
                            }else{
                        ?>
                    <li class="page-item"><a  class="page-link" href="?p=<?php echo $i?>"><?php echo $i?></a></li>
            <?php
                }
                }
            Database::disconnect();?>
            <li class="page-item <?php if($current == $nbPage){echo "disabled";}?>"><a class="page-link" href="?p=<?php if($current != $nbPage){ echo $current+1;}else{echo $current;}?>" >&raquo;</a></li>
        </ul>
        </nav>




    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
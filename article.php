<?php
require 'includes/connection.php';
if(!empty($_GET['id']))
{
    $id = checkInput($_GET['id']);
}
$db = Database::connect();
$statement = $db->prepare("SELECT articles.article_id, articles.article_title, articles.article_content, articles.article_img FROM 
                                            articles WHERE article_id=?");
$statement->execute(array($id));
$item = $statement->fetch();
Database::disconnect();




function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>
<?php
include "config.php";
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
        <?php include ("includes/navbar.php");?>

    </div>

</main>
<div class="content container admin">
    <div class="row">
        <div class="col-md-8">
            <h1><strong></strong></h1>
            <br>
            <article class="media content-section">

                <div class="media-body">

                    <h2 class="article-title"><?php echo ' '.$item['article_title'];?></h2>
                    <p class="article-content"><?php echo ' '.$item['article_content'];?></p>
                </div>
            </article>

        </div>
        <div class="col-md-4">
            <img class=" article-img img-fluid img-thumbnail" src="<?php echo 'images/'.$item['article_img'];?>" alt="<?php echo ' '.$item['article_img'];?>">
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary" href="index.php"><span class="fas fa-arrow-left"> Back</span></a>
        </div>

    </div>
</div>
<script src="js/noise.min.js"></script>
<script src="js/util.js"></script>
<script src="js/pipeline.js"></script>
<script src="js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php
include "../config.php";
require '../includes/connection.php';
if (isset($_SESSION['user_id'])){

}else{
    header("Location: login.php"); exit;
}

$titleError = $contentError = $imageError = $title = $content = $image = "";

if(!empty($_POST))
{
    $title              = checkInput($_POST['title']);
    $content            = checkInput($_POST['content']);
    $image              = checkInput($_FILES["image"]["name"]);
    $imagePath          = '../images/'. basename($image);
    $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
    $isSuccess          = true;
    $isUploadSuccess    = false;

    if(empty($title))
    {
        $titleError = 'The title field cannot be empty';
        $isSuccess = false;
    }
    if(empty($content))
    {
        $contentError = 'The content field cannot be empty';
        $isSuccess = false;
    }
    if(empty($image))
    {
        $imageError = 'You have to add an image';
        $isSuccess = false;
    }
    else
    {
        $isUploadSuccess = true;
        if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" )
        {
            $imageError = "The allowed file formats are: .jpg, .jpeg, .png, .gif";
            $isUploadSuccess = false;
        }
        if(file_exists($imagePath))
        {
            $imageError = "The file already exists";
            $isUploadSuccess = false;
        }
        if($_FILES["image"]["size"] > 5000000)
        {
            $imageError = "The file size cannot be more than 5Mb";
            $isUploadSuccess = false;
        }
        if($isUploadSuccess)
        {
            if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath))
            {
                $imageError = "There was an error uploading the file";
                $isUploadSuccess = false;
            }
        }
    }

    if($isSuccess && $isUploadSuccess)
    {
        $db = Database::connect();
        $statement = $db->prepare("INSERT INTO articles (article_title,article_content,article_img) values (?, ?, ?)");
        $statement->execute(array($title,$content,$image));
        Database::disconnect();
        header("Location: index.php");
    }
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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
    <link rel="shortcut icon" href="../images/favicon.png">



    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/base.css" />
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
<body class="network">


<main>

    <div class="frame">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"> <img src="../images/MontimageG.png" alt="Montimage logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-item nav-link " href="#"><?php echo $lang['about'] ?><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="#"><?php echo $lang['products'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="#"><?php echo $lang['services'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="#"><?php echo $lang['projects'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="#"><?php echo $lang['awards'] ?></a>
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
                            <a class="dropdown-item" href="index.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
                            <a class="dropdown-item" href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
                            <a class="dropdown-item" href="index.php?lang=es"><?php echo $lang['lang_es'] ?></a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>

    </div>

</main>
<div class="container admin">
    <div class="row col-md-12">
        <h1 class="col-md-4"><strong>Add an article</strong></h1>
        <br>
        <form class="form col-md-7" action="insert.php" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $title;?>">
                <span class="text-danger"><?php echo $titleError;?></span>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea  rows="8" class="form-control" id="content" name="content" placeholder="Content" ><?php echo $content;?></textarea>
                <span class="text-danger"><?php echo $contentError;?></span>
            </div>

            <div class="form-group">
                <label for="image">Select an image to upload:</label>
                <input type="file" id="image" name="image">
                <span class="text-danger"><?php echo $imageError;?></span>
            </div>
            <br>
            <div class="form-actions">
                <button type="submit" class="btn btn-success"><span class="fas fa-plus"></span> Add</button>
                <a class="btn btn-primary" href="index.php"><span class="fas fa-arrow-left"></span> Back</a>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
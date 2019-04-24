<?php

require '../includes/connection.php';
include_once '../config.php';
if (isset($_SESSION['user_id'])){

}else{
    header("Location: login.php"); exit;
}

if(!empty($_GET['id']))
{
    $id = checkInput($_GET['id']);
}

$titleError = $contentError= $imageError = $title = $content = $image = "";

if(!empty($_POST))
{
    $title              = checkInput($_POST['title']);
    $content            = checkInput($_POST['content']);
    $image              = checkInput($_FILES["image"]["name"]);
    $imagePath          = '../images/'. basename($image);
    $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
    $isSuccess          = true;

    if(empty($title))
    {
        $titleError = 'Please update the title';
        $isSuccess = false;
    }
    if(empty($content))
    {
        $contentError = 'Please update the content';
        $isSuccess = false;
    }

    if(empty($image)) // le input file est vide, ce qui signifie que l'image n'a pas ete update
    {
        $isImageUpdated = false;
    }
    else
    {
        $isImageUpdated = true;
        $isUploadSuccess =true;
        if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" )
        {
            $imageError = "The accepted file formats are: .jpg, .jpeg, .png";
            $isUploadSuccess = false;
        }
        if(file_exists($imagePath))
        {
            $imageError = "The file already exists";
            $isUploadSuccess = false;
        }
        if($_FILES["image"]["size"] > 5000000)
        {
            $imageError = "The image file cannot be bigger than 5 Mb";
            $isUploadSuccess = false;
        }
        if($isUploadSuccess)
        {
            if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath))
            {
                $imageError = "Bummer! There was an upload error";
                $isUploadSuccess = false;
            }
        }
    }

    if (($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated))
    {
        $db = Database::connect();
        if($isImageUpdated)
        {
            $statement = $db->prepare("UPDATE articles  set article_title = ?, article_content = ?, article_img = ? WHERE article_id = ?");
            $statement->execute(array($title,$content,$image,$id));
        }
        else
        {
            $statement = $db->prepare("UPDATE articles  set article_title = ?, article_content = ? WHERE article_id= ?");
            $statement->execute(array($title,$content,$id));
        }
        Database::disconnect();
        header("Location: index.php");
    }
    else if($isImageUpdated && !$isUploadSuccess)
    {
        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM articles where article_id = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        $image = $item['image'];
        Database::disconnect();

    }
}
else
{
    $db = Database::connect();
    $statement = $db->prepare("SELECT * FROM articles where article_id = ?");
    $statement->execute(array($id));
    $item = $statement->fetch();
    $title           = $item['article_title'];
    $content         = $item['article_content'];
    $image           = $item['article_img'];
    Database::disconnect();
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



</main>
<div class="container admin">
    <div class="row">
        <h1><strong>Update an article</strong></h1>
        <br>
        <form class="form" action="<?php echo 'update.php?id='.$id;?>" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $title;?>">
                <span class="text-danger"><?php echo $titleError;?></span>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="Content" value="<?php echo $content;?>">
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
<script src="js/noise.min.js"></script>
<script src="js/util.js"></script>
<script src="js/pipeline.js"></script>
<script src="js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>










<?php
require_once "connection.php";
$perPage = 5;
$db = Database::connect();
$statement = $db->query('SELECT COUNT(*)AS total FROM articles ');
$item = $statement->fetch();
$total = $item['total'];
$nbPage = ceil($total/$perPage);
if (isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) == 1)
{
    if($_GET['p']> $nbPage) {
        $current=$nbPage;
    }else{
        $current = $_GET['p'];
    }
}else{
    $current = 1;
}

$firstOfPage = ($current - 1) * $perPage;
$articles = $db->query("SELECT * FROM articles ORDER BY article_id DESC LIMIT $firstOfPage,$perPage");

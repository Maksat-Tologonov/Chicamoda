<?php
require_once ("database.php");
require_once ("models/articles.php");

$article = articles_get($_GET['id']);

include ("article.php")
?>
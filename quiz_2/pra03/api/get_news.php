<?php
include "base.php";
$news=$News->find($_POST['id']);


    echo $news['title'];
    echo "<br>"
    echo nl2br($news['article']);

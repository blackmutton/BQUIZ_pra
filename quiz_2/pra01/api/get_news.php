<?php
include "base.php";
$news=$News->find($_POST['id']);
// dd($news);
// Array
// (
    // [id] => 1
    // [title] => 缺乏運動已成為影響全球死亡率的第四大危險因子
    // [article] => ""
    // [type] => 1
    // [sh] => 1
    // [good] => 10
// )

echo $news['title'];
echo "<br>";
echo nl2br($news['article']);
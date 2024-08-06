<?php
include "base.php";
$news=$News->all(['type'=>$_POST['type']]);
// dd($news);
// Array
// (
    // [0] => Array
        // (
            // [id] => 1
            // [title] => 缺乏運動已成為影響全球死亡率的第四大危險因子
            // [article] => ""
            // [type] => 1
            // [sh] => 1
            // [good] => 10
        // )
// 
    // [1] => Array
        // (
            // [id] => 5
            // [title] => 缺乏運動已成為影響全球死亡率的第四大危險因子
            // [article] => ""
            // [type] => 1
            // [sh] => 1
            // [good] => 10
        // )
// 
// )



foreach($news as $n){
    echo "<p>";
    echo "<a href='javascript:getNews({$n['id']})'>";
    echo $n['title'];
    echo "</a>";
    echo "</p>";
}
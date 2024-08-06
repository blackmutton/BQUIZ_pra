<?php
include "base.php";
// dd($_POST);
// Array
// (
    // [user] => admin
    // [news] => 1
// )
$chk=$Log->count($_POST);
$news=$News->find($_POST['news']);
// dd($news);
// Array
// (
    // [id] => 1
    // [title] => 缺乏運動已成為影響全球死亡率的第四大危險因子
    // [article] =>""
    // [type] => 1
    // [sh] => 1
    // [good] => 10
// }
if($chk>0){
    $Log->del($_POST);
    $news['good']--;
}else{
    $Log->save($_POST);
    $news['good']++;
}

$News->save($news);
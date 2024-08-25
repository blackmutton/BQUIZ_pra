<?php
include "base.php";
$news=$News->all(['type'=>$_POST['type']]);

foreach($news as $n){
    echo "<p>";
    echo "<a href='javascript:getNews({$n['id']})'>$n['title']</a>";
    echo "</p>";
}
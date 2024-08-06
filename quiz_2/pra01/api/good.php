<?php
include "base.php";
// dd($_POST);
// Array
// (
    // [user] => admin
    // [news] => 1
// )
$chk=$Log->count($_POST);

if($chk>0){
    $Log->del($_POST);
}else{
    $Log->save($_POST);
}
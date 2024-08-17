<?php
include "base.php";
$chk=$Log->count($_POST);
if($chk>0){
    $Log->del($_POST);
}else{
    $Log->save($_POST);
}
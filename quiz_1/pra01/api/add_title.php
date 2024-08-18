<?php
include "base.php";

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../images/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
    $data['text']$_POST['text'];
    $Title->save($data);

    to("../admin.php?do=title");
    
}
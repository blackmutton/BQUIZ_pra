<?php
include "base.php";
$do=$_POST['table'];
$db=${ucfirst($do)};

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],'../images/'.$_FILES['img']['name']);
    $row=$db->find($_POST['id']);
    $db->save($row);
}

    

to("../admin.php?do=$do");
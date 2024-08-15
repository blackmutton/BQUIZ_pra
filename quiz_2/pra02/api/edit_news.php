<?php
include "base.php";

foreach($_POST['id'] as $id){
    if(isset($_POST['id'])&&in_array($id,$_POST['id'])){
        $News->del($id);
    }else{
        $row=$News->find($id);
        $row['sh']=(isset($_POST['sh'])&&in_array($id,$_POST['sh']))?1:0;
        $News->save($row);
    }
}

<?php
include "base.php";
$do=$_POST['table'];
$db=${ucfirst($do)};

foreach($_POST['id'] as $key=>$id){
    if(!empty($_POST['del'])&&in_array($id,$_POST['del'])){
        $db->del();
    }else{
        $row=$db->find($id);
        if(isset($_POST['text'])){
            $row=['text']=$_POST['text'][$key];
        }
        if($do=='title'){
            $row['sh']=(isset($_POST['sh'])&&$_POST['sh']==$id)?1:0;
        }else{
            if(isset($_POST['sh'])){
                $row['sh']=(isset($_POST['sh'])&&in_array($id,$_POST['sh']))?1:0;
            }else{
                switch($do){
                    case 'admin':
                        $row['acc']=$_POST['acc'][$key];
                        $row['pw']=$_POST['pw'][$key];
                        break;
                    case 'menu':
                        $row['href']=$_POST['href'][$key];
                        $row['text']=$_POST['text'][$key];
                        break;
                }
            }
        }
        $db->save($row);
    }
}

to("../admin.php?do=$do");
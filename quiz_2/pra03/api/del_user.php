<?php
include "base.php";
foreach($_POST['ids'] as $id){
    $User->del($id);
}

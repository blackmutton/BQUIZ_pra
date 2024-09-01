<?php
include "base.php";

$option=$Que->find($_POST['vote']);
$option['vote']++;
$subject=$Que->find($option['subject_id']);
$subject['vote']++;
$Que->save($subject);
$Que->save($option);
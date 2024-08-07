<?php
include "base.php";
// dd($_POST);
// Array
// (
// [subject] => 7
// [options] => Array
// (
// [0] => 44
// [1] => 55
// [2] => 66
// )
// 
// )

$Que->save(['text' => $_POST['subject'], 'subject_id' => 0]);
$subject_id = $Que->find(['text' => $_POST['subject']])['id'];
// dd($Que->find(['text' => $_POST['subject']]));
// Array
// (
// [id] => 12
// [text] => 7
// [vote] => 0
// [subject_id] => 0
// )
foreach ($_POST['options'] as $option) {
    $Que->save(['text' => $option, 'subject_id' => $subject_id]);
}

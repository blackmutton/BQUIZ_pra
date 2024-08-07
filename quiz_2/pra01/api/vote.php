<?php
include "base.php";
// dd($_POST);
// Array
// (
// [vote] => 2
// )
$vote = $_POST['vote'];
$que = $Que->find($vote);
// dd($que);
// Array
// (
// [id] => 2
// [text] => 66
// [vote] => 0
// [subject_id] => 1
// )
$que['vote']++;

$subject = $Que->find($que['subject_id']);
// dd($subject);
// Array
// (
// [id] => 1
// [text] => 777
// [vote] => 0
// [subject_id] => 0
// )
$subject['vote']++;

$Que->save($subject);
$Que->save($que);

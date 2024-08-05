<?php
include "base.php";
$chk = $User->count($_POST);
if ($chk) {
    $_SESSION['user'] = $_POST['acc'];
}
// 由於front/login.php需透過parseInt將回傳值轉回數字，因此dd($_POST)需要註解，否則會導致錯誤
// dd($_POST);
// <pre>Array
// (
//     [acc] => mem01
//     [pw] => mem01
// )
// </pre>
echo $chk;

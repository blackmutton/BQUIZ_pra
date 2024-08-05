<?php
include "base.php";
$result = $User->find(['email' => $_GET['email']]);
// dd($result);
// <pre>Array ( [id] => 10 [acc] => yt [pw] => 111 [email] => 1 ) </pre>
if (!empty($result)) {
    echo "您的密碼:{$result['pw']}";
} else {
    echo "查無資料";
}

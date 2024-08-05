<?php
include "base.php";
// dd($_POST);
// Array
// (
//     [ids] => Array
//         (
//             [0] => 1
//             [1] => 2
//         )

// )
foreach ($_POST['ids'] as $id) {
    $User->del($id);
}

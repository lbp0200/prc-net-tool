<?php
//var_dump($_SERVER);
$k_arr = ['REMOTE_ADDR', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'];
foreach ($k_arr as $k) {
    if (isset($_SERVER[$k]) && !empty($_SERVER[$k])) {
        echo json_encode(['origin' => $_SERVER[$k]]);
        exit();
    }
}

<?php
if (count($_GET) === 0) {
    exit();
}
$root = 'https://dns.google.com/resolve?';
$parameters = [];
foreach ($_GET as $k => $v) {
    $dv = base64_decode(urldecode($v));
    $parameters[] = "{$k}={$dv}";
}
$url = $root . (implode('&', $parameters));

echo base64_encode(file_get_contents($url));
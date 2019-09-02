<?php


if (isset($_GET["url"]) && !empty($_GET["url"])) {
    $url = htmlspecialchars($_GET["url"]);
    readfile($url);
}
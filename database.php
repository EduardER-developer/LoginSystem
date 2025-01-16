<?php

$user = 'root';
$password = '';
$server = 'localhost';
$name = '';

$link = new mysqli($server, $user, $password, $namedb);

if (!$link) {
    echo 'Error to link database';
    die();
}

?>
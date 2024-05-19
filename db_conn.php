<?php
$db = new mysqli("localhost", "root", "", "crudform");

if (!$db) {
    die("Connection is not found" . mysqli_connect_errno());
}


if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://project.test/');
}

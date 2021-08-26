<?php

include_once 'config.php';

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($mysqli->connect_error) {
    header("Location: ../index.php?error=Can't connect to MySQL server");
    exit();
}

<?php

function connection()
{
    $db_config = "mysql:host=localhost;dbname=petopia";
    $username = "root";
    $password = "";
    $conn = new PDO($db_config, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
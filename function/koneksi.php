<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "php-native";

$connect = mysqli_connect($server, $username, $password, $dbname) or die("koneksi ke database gagal");
?>
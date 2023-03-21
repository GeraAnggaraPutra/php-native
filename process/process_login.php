<?php

require_once('../function/koneksi.php');
require_once('../function/helper.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");

// var_dump(mysqli_num_rows($query));
// die();

if(mysqli_num_rows($query) != 0){
    $row = mysqli_fetch_assoc($query);
    //membuat session
    session_start();
    $_SESSION['id'] = $row['id'];
    header("location: " . BASE_URL . 'dashboard.php');
} else {
    header("location: " . BASE_URL);
}
?>
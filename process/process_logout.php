<?php

require_once('../function/koneksi.php');
require_once('../function/helper.php');

session_start();
unset($_SESSION['id']);

header("location: " . BASE_URL);

?>
<?php

require_once('../function/koneksi.php');
require_once('../function/helper.php');

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM pegawai WHERE id = $id");
header("location: " . BASE_URL . 'dashboard.php?page=home&status=deletesuccess');
?>
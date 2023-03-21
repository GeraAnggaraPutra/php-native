<?php

require_once('../function/koneksi.php');
require_once('../function/helper.php');

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];

if(empty($nama) || empty($hp) || empty($email) || empty($nik) || empty($alamat) ){
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=true');
}else {
    mysqli_query($connect,"UPDATE pegawai SET nama='$nama', nohp='$hp', email='$email', nik='$nik', alamat='$alamat' WHERE id='$id' ");
    header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
}

?>
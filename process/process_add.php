<?php

require_once('../function/koneksi.php');
require_once('../function/helper.php');

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];

if(empty($nama) || empty($hp) || empty($email) || empty($nik) || empty($alamat) ){
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
}else {
    mysqli_query($connect, "INSERT INTO pegawai(nama,email,nohp,nik,alamat) VALUES ('$nama', '$email', '$hp', '$nik', '$alamat') ");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}

?>
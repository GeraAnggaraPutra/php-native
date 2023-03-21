<?php
require_once('function/koneksi.php');
require_once('function/helper.php');

if($_SESSION['id'] == null){
    header("location: " . BASE_URL);
    exit();
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;

$pegawai = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM pegawai WHERE id = $id"));

$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
?>

<?php if($error == 'true') : ?>
    <div class="alert alert-danger" role="alert">
       Edit gagal, pastikan semua form terisi
    </div>
<?php endif; ?>

<h1>Edit Form</h1>
<form method="POST" action="<?= BASE_URL . 'process/process_edit.php'?>">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" value="<?= $pegawai['nama'] ?>">
  </div>
  <div class="mb-3">
    <label for="hp" class="form-label">Nomor Handphone</label>
    <input type="number" class="form-control" name="hp" id="hp" value="<?= $pegawai['nohp'] ?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="<?= $pegawai['email'] ?>">
  </div>
  <div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="number" class="form-control" name="nik" id="nik" value="<?= $pegawai['nik'] ?>">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="4" ><?= $pegawai['alamat'] ?></textarea>
  </div>
  <input type="hidden" name="id" value="<?= $pegawai['id'] ?>">
  <button type="submit" class="btn btn-primary">Save</button>
</form>
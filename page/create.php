<?php
$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
       Form harus diisi semua
    </div>
<?php endif; ?>
<h1>Tambah Data</h1>
<form method="POST" action="<?= BASE_URL . 'process/process_add.php'?>">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama">
  </div>
  <div class="mb-3">
    <label for="hp" class="form-label">Nomor Handphone</label>
    <input type="number" class="form-control" name="hp" id="hp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="number" class="form-control" name="nik" id="nik">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="4"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
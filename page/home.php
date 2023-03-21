<?php

require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
$edit = isset($_GET['status']) ? ($_GET['status']) : false;
$delete = isset($_GET['status']) ? ($_GET['status']) : false;

?>

<?php if($process == 'success') : ?>
    <div class="alert alert-success" role="alert">
       Data berhasil dibuat
    </div>
<?php endif; ?>
<?php if($edit == 'success') : ?>
    <div class="alert alert-success" role="alert">
       Data berhasil diedit
    </div>
<?php endif; ?>
<?php if($edit == 'deletesuccess') : ?>
    <div class="alert alert-success" role="alert">
       Data berhasil dihapus
    </div>
<?php endif; ?>

<?php

$pegawai = mysqli_query($connect, "SELECT * FROM pegawai");
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIK</th>
      <th scope="col">Email</th>
      <th scope="col">No HP</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach($pegawai as $p) : ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $p['nama'] ?></td>
      <td><?= $p['nik'] ?></td>
      <td><?= $p['email'] ?></td>
      <td><?= $p['nohp'] ?></td>
      <td><?= $p['alamat'] ?></td>
      <td>
        <a href="<?= BASE_URL . 'process/process_delete.php?id='.$p['id'] ?>" class="btn btn-danger">Delete</a>
        <a href="<?= BASE_URL . 'dashboard.php?page=edit&id='.$p['id'] ?>" class="btn btn-info" >Edit</a>
      </td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
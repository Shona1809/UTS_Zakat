<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!doctype html>
  <html lang="en">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css" rel="stylesheet" />
  <title>Tampil Data Mahasiswa</title>
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" style="font-style: oblique;" href="#">
      ZAKAT
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('data/insertData/') ?>">Tambah Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('report') ?>">Print Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login') ?>">Keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <header>
      </br>
      <div class="container-md">
        <h1 class="display-5" style="text-align: center;">Data Zakat Fitrah</h1>
        <div class="p-3 mb-2 bg-light text-dark">
        
          <a href="data/insertDataFitrah/" class="btn btn-primary" type="submit">Tambah Data</a>
          <table id="example" class="table table-striped table-success" style="width:100%">
  <thead>
    <tr>
      <td>NIK</td>
      <td>Keluarga</td>
      <td>Nomor HP</td>
      <td>Jenis Zakat</td>
      <td>Jumlah Jiwa</td>
      <td>Nominal</td>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($hasil as $row) {
    ?>
      <tr>
        <td><?php echo $row->nik; ?></td>
        <td><?php echo $row->keluarga; ?></td>
        <td><?php echo $row->no_hp; ?></td>
        <td><?php echo $row->jenis_zakat; ?></td>
        <td><?php echo $row->jumlah_jiwa; ?></td>
        <td><?php echo $row->nominal; ?></td>
        <td>
        <a href="data/editDataFitrah/<?php echo $row->nik; ?>" class="btn btn-success" type="submit">Edit</a>
<a href="data/hapusDataFitrah/<?php echo $row->nik; ?>" class="btn btn-dark" type="delete">Hapus</a>        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $('#example').DataTable();
        });
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"></script>
</body>
<footer class="bg-light text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <p>&copy; <?= date('Y') ?> WEB ZAKAT BY Shona Setiadi.</p>
    <a class="text-white" href="https://mdbootstrap.com/"></a>
  </div>
  <!-- Copyright -->
</footer>

</html>
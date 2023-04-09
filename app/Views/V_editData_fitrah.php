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
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <?php
    foreach ($data as $row)
    ?>
    </br>
    <div class="container">
        <h1 class="display-5" style="text-align: center;">Sunting Data Mahasiswa</h1>
        </br>
        <div class="p-3 mb-2 bg-light text-dark">
            <form action="<?php echo base_url('data/saveeditDataFitrah/' . $row->nik . '') ?>" method="post">
            <table class="table">
          <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" value="<?php echo $row->nik; ?>" class="form-control"></td>
          </tr>
          <tr>
            <td>Keluarga</td>
            <td><input type="text" name="keluarga" value="<?php echo $row->keluarga; ?>" class="form-control"></td>
          </tr>
          <tr>
            <td>Nomor HP</td>
            <td><input type="text" name="no_hp" value="<?php echo $row->no_hp; ?>" class="form-control"></td>
          </tr>
          <tr>
            <td>Jenis Zakat</td>
            <td>
              <select name="jenis_zakat" class="form-control">
                <option value="zakat_fitrah" <?php if ($row->jenis_zakat == 'zakat_fitrah') echo 'selected'; ?>>Zakat Fitrah</option>
                <option value="zakat_mal" <?php if ($row->jenis_zakat == 'zakat_mal') echo 'selected'; ?>>Zakat Mal</option>
                <option value="infaq" <?php if ($row->jenis_zakat == 'infaq') echo 'selected'; ?>>Infaq</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Jumlah Jiwa</td>
            <td><input type="text" name="jumlah_jiwa" value="<?php echo $row->jumlah_jiwa; ?>" class="form-control"></td>
          </tr>
          <tr>
            <td>Nominal</td>
            <td><input type="text" name="nominal" value="<?php echo $row->nominal; ?>" class="form-control"></td>
          </tr>
          <tr>
            <td><input type="submit" value="Submit" name="submit" class="btn btn-success"></td>
            <td><input type="reset" value="Reset" name="reset" class="btn btn-danger"></td>
          </tr>
        </table>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"></script>

</body>

</html>
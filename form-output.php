<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bukti Pendaftaran</title>
</head>
<body>
  <center>
    <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
    <h3>Pendaftaran Anggota Secara Online</h3>
    <h5><i>Jl. Sejahtera no.11 Bekasi Tenggara</i></h5>
    <hr color="red">
  </center>
  
  <h2>***** BUKTI PENDAFTARAN *****</h2>

  <?php
    $nama = $_POST['nama'];
    $tempat = $_POST['tempatlahir'];
    $tgl = $_POST['tanggallahir'];
    $bln = $_POST['bulanlahir'];
    $thn = $_POST['tahunlahir'];
    $jenis = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    
    echo "Tanggal Cetak: " . date("D, d/M/Y") . "<p>";
    echo "Nama Lengkap: $nama<br>";
    echo "TTL: $tempat $tgl/$bln/$thn<br>";

    if ($jenis == '1') {
      $jk = 'Laki-Laki';
    } else {
      $jk = 'Perempuan';
    }

    echo "Jenis Kelamin: $jk<br>";
    echo "Alamat: $alamat<br>";
    echo "No. Telp: $telp<br>";
  ?>

  <p><a href="form.php"><<< INPUT LAGI</a></p>
  <hr color="red">

  <marquee direction="right">
    <i>-- Pendaftaran Anggota Perpustakaan secara Online --</i>
  </marquee>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>***** FORM INPUT *****</title>
</head>
<body>
    <form action="form-output.php" method="post">
        <center>
            <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
            <h3>Pendaftaran Anggota Secara Online</h3>
            <h5><i>Jl. Sejahtera no.11 Bekasi Tenggara</i></h5>
            <hr color="red">
        </center>
        <pre>
Nama Lengkap    : <input type="text" name="nama" size="35" maxlength="30"><br>
TTL             : <input type="text" name="tempatlahir" size="20">  <br>
<select size="1" name="tanggallahir">
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
            </select>  <select size="1" name="bulanlahir">
            <?php
                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", 
                               "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                foreach ($bulan as $b) {
                    echo "<option value='$b'>$b</option>";
                }
            ?>
            </select>  <input type="text" name="tahunlahir" size="10" maxlength="4" value="2009"><br>
            
Jenis Kelamin   : <input type="radio" name="jk" value="1">Laki-laki <input type="radio" name="jk" value="p">Perempuan<br>
Alamat          : <textarea name="alamat" rows="3" cols="35" wrap="on"></textarea><br>
No. Telp        : <input type="text" name="telp" size="15" maxlength="15"><br>
            <p>
                <input type="submit" value="KIRIM">   <input type="reset" value="BERSIH">
            </p>
        </pre>
    </form>
    <hr color="red">
    <marquee direction="right">
        <i>-- Pendaftaran Anggota Perpustakaan Secara Online --</i>
    </marquee>
</body>
</html>

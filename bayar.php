<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="form.css"  rel="stylesheet">
    <title>Pemesanan Tiket</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->

<?php
    // koneksi database
include('koneksi.php');

//menagkap data dari form
     $nama=$_POST['nama'];
     $namalengkap = sprintf($nama); // untuk menampilkan value
     $id=$_POST['identitas'];
     $nik = sprintf($id);  // untuk menampilkan value
     $hp=$_POST['hp'];
     $notlpn = sprintf($hp);  // untuk menampilkan value
     $wisata=$_POST['wisata'];
     $tempat = sprintf($wisata);  // untuk menampilkan value
     $tanggal =$_POST['tanggal'];
     $jadwal = sprintf($tanggal);  // untuk menampilkan value
     $dewasa=$_POST['dewasa'];
     $qty= sprintf($dewasa);  // untuk menampilkan value
     $anak=$_POST['anak'];
     $qty2 = sprintf($anak);  // untuk menampilkan value

//harga
            if ($wisata=="Ranca Upas"){
                $nama1="Ranca Upas";
                $harga="25000";
                }
            else if($wisata=="Desa Wisata Almendah"){
                $nama1="Desa Wisata Almendah";
                $harga="20000";
                }
                else if($wisata=="Kawah Putih"){
                    $nama1="Kawah Putih";
                    $harga="30000";
                    }
                    else if($wisata=="Situ Patenggang"){
                        $nama1="Situ Patenggang";
                        $harga="25000";
                        }
            else {
                $nama1="Dago Dream Park";
                $harga="30000";
                }
                $diskon = ($anak*$harga) * 0.5;
                $totalharga= $dewasa*$harga;
                $totalbayar= $totalharga + $diskon;
                ?>
    <center>
        <form action="output.php" method="POST">
        <h1>Form Pemesanan</h1>
        <table cellpadding=7>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="<?php echo $namalengkap ?>" readonly></td>
            </tr>
            <tr>
                <td>Nomor Identitas</td>
                <td><input type="text" name="identitas" value="<?php echo $nik ?>" readonly></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type ="text" name="hp"  value="<?php echo $notlpn ?>" readonly></input></td>
            </tr>
            

            <tr>
                <td>Tempat Wisata</td>
                <td><input type ="text" name="wisata"  value="<?php echo $tempat ?>" readonly></input></td>
            </tr>
            <tr>
                <td>Tanggal Kunjungan</td>
                <td><input type="input" name="tanggal" placeholder="DD / MM / YYYY"  value="<?php echo $jadwal ?>" readonly></td>
            </tr>
            <tr>
                <td>Pengunjung Dewasa</td>
                <td><input name="dewasa" value="<?php echo $qty ?>" readonly></input></td>
            </tr>
            <tr >
                <td><span>Pengunjung Anak-Anak</span><br>Usia dibawah 12 tahun</td>
                <td><input name="anak" value="<?php echo $qty2 ?>" readonly></input></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td><b><?php echo "Rp.".number_format($harga) ; ?></b></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td><b><?php echo "Rp.".number_format($totalbayar) ; ?></b></td>
            </tr>
            <tr>
                <td><input type="Checkbox"></input></td>
            <td><label> Saya dan/rombongan telah membaca, memahami dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label></td>
            </tr>
        </table>
        <br>
            <button type="Submit" name="total" onclick="window.location.href='bayar.php'" disabled>Hitung Total Bayar</button>
            <button type="Submit" name="submit"  value="simpan"  onclick="window.location.href='output.php' ">Pesan Tiket</button>
            <button type="Reset" name="Cancel" onclick="window.location.href='index.html' ">Cancel</button>
        </form>
        </center>
  </body>
</html>


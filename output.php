<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="output.css"  rel="stylesheet">
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
     $id=$_POST['identitas'];
     $hp=$_POST['hp'];
     $wisata=$_POST['wisata'];
     $dewasa=$_POST['dewasa'];
$anak = $_POST['anak'];

//harga
if (isset($_POST['submit'])) {
                    $harga;
                    $nama1;
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
            else if ($wisata=="Situ Patenggang"){
                $nama1="Dago Dream Park";
                $harga="30000";
                } else{
                    echo "belum tersedia";
                }

                $diskon = ($anak*$harga) * 0.5;
                $totalharga= $dewasa*$harga;
                $totalbayar= $totalharga + $diskon;
                //Query input menginput data kedalam tabel anggota
  $sql= "insert into pesan values('','$nama','$id','$hp','$nama1','$dewasa','$anak','$harga','$totalbayar')";
//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$sql);
            }

        
?>
<center>

    <table cellpadding=8>
    <h1>Rincian Pemesanan</h1>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td ><?php echo $nama ; ?></td>
        </tr>
        <tr>
            <td>No identitas</td>
            <td>:</td>
            <td><?php echo $id ; ?> </td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td> <?php echo $hp ; ?></td>
        </tr>
        <tr>
            <td>Tempat Kunjungan</td>
            <td>:</td>
            <td> <?php echo $nama1; ?> </td>
        </tr>
        <tr>
            <td>Pengunjung Dewasa</td>
            <td>:</td>
            <td> <?php echo $dewasa ; ?></td>
        </tr>
        <tr>
        <td>Pengunjung Anak-Anak</td>
            <td>:</td>
            <td> <?php echo $anak ; ?></td>
        </tr>
        <tr>
        <td>Harga Tiket</td>
            <td>:</td>
            <td><b><?php echo "Rp.".number_format($harga) ; ?></b></td>
        </tr>
        <tr>
        <td>Total Bayar</td>
        <td>:</td>
        <td><b><?php echo "Rp.".number_format($totalbayar) ; ?></b></td>
        </tr>
        <tr>
            <td><button type="back" name=" " onclick="window.location.href='index.html'">Kembali</button></td>
        </tr>
    </table>
</center>
</body>
</html>
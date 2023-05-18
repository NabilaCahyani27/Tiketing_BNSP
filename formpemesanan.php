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
    <center>

        <form action="bayar.php" method="POST">
        <h1>Form Pemesanan</h1>
        <table cellpadding=7>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nomor Identitas</td>
                <td><input type="text" name="identitas"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type ="text" name="hp" maxlength="16"></input></td>
            </tr>
            <tr>
                <td>Tempat Wisata</td>
                <td><select name="wisata" id="">
                <option value="Ranca Upas">Ranca Upas
                <option value="Desa Wisata Almendah">Desa Wisata Almendah
                <option value="Kawah Putih">Kawah Putih
                <option value="Situ Patenggang">Situ Patenggang
                <option value="Dago Dream Park"> Dago Dream Park
                </select></td>
            </tr>
            <tr>
                <td>Tanggal Kunjungan</td>
                <td><input type="input" name="tanggal" placeholder="DD / MM / YYYY"></td>
            </tr>
            <tr>
                <td>Pengunjung Dewasa</td>
                <td><input name="dewasa"></input></td>
            </tr>
            <tr >
                <td><span>Pengunjung Anak-Anak</span><br>Usia dibawah 12 tahun</td>
                <td><input name="anak"></input></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td><label for="" ><b>Rp.30.000</b></label></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td><label for=""><b>Rp. 0</b></label></td>
            </tr>
            <tr>
                <td><input type="Checkbox"></input></td>
            <td><label> Saya dan/rombongan telah membaca, memahami dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label></td>
            </tr>
        </table>
        <br>
            <button type="Submit" name="total" onclick="window.location.href='bayar.php'">Hitung Total Bayar</button>
            <button type="Submit" name="submit"  disabled >Pesan Tiket</button>
            <button type="Reset" name="Cancel" onclick="window.location.href='index.html' ">Cancel</button>
        </form>
        </center>
       
  </body>
</html>


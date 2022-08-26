<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Diskon</h2>
    <hr>
    <form action="" method="post">
    <table border="0" cellpadding="5">
        <tr>
            <td><label for="pilih_barang">Pilih Barang</label>:</td>
            <td><select name="pilih_barang" id="pilih_barang">
                    <option value="" style="display:none"></option>
                    <option value="roti">Roti - Rp.11000</option>
                    <option value="susu">Susu - Rp.8000</option>
                    <option value="coklat">Coklat - Rp.15000</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="jumlah_barang">Jumlah Barang</label>:</td>
            <td><input type="text" name="jumlah_barang" id="jumlah_barang"></td>
        </tr>
    </table>
            <input type="radio" name="diskon" value="10">Diskon 10%
            <input type="radio" name="diskon" value="25">Diskon 25%
            <input type="radio" name="diskon" value="50">Diskon 50%
            <br>
            <input type="submit" name="submit" value="submit">
            <br>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    if ($_POST['pilih_barang'] == "roti") {
        $harga = 11000;
    }elseif ($_POST['pilih_barang'] == "susu") {
        $harga = 8000;
    }elseif ($_POST['pilih_barang'] == "coklat") {
        $harga = 15000;
    }
    $total = $_POST['jumlah_barang'] * $harga;
    if (isset($_POST['diskon'])) {
        if ($_POST['diskon'] == "10") {
            $diskon = $total * 10 / 100;
            $total_hrg = $total - $diskon;
            echo "Barang :" . $_POST['pilih_barang'] . "<br>";
            echo "Jumlah :". $_POST['jumlah_barang'] . "<br>";
            echo "Total Belanja :" . $total . "<br>";
            echo "Diskon : 10%" . "<br>";
            echo "Anda mendapatkan diskon :" . $diskon . "<br>";
            echo "Anda harus membayar :" . $total_hrg;
        }elseif ($_POST['diskon'] == "25") {
            $diskon = $total * 25 / 100;
            $total_hrg = $total - $diskon;
            echo "Barang :" . $_POST['pilih_barang'] . "<br>";
            echo "Jumlah :" . $_POST['jumlah_barang'] . "<br>";
            echo "Total Belanja :" . $total . "<br>";
            echo "Diskon : 25%" . "<br>";
            echo "Anda mendapatkan diskon :" . $diskon . "<br>";
            echo "Anda harus membayar :" . $total_hrg;
        }elseif ($_POST['diskon'] == "50") {
            $diskon = $total * 50 / 100;
            $total_hrg = $total - $diskon;
            echo "Barang :" . $_POST['pilih_barang'] . "<br>";
            echo "Jumlah :".  $_POST['jumlah_barang'] . "<br>";
            echo "Total Belanja :" . $total . "<br>";
            echo "Diskon : 50%" . "<br>";
            echo "Anda mendapatkan diskon :" . $diskon . "<br>";
            echo "Anda harus membayar :" . $total_hrg;
        }
    }
}

?>
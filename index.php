<?php
include "koneksi.php";

//query menampilkan data
$databarang = "SELECT * FROM data_barang ORDER BY `data_barang`.`id_barang` ASC";
$tipebarang = "SELECT * FROM tipe_barang";
$ketbarang = "SELECT * FROM keterangan_barang";
$printa = mysqli_query($conn, $databarang);
$printb = mysqli_query($conn, $tipebarang);
$printc = mysqli_query($conn, $ketbarang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="containers">
        <h2>DATA BARANG</h2>
        <hr><br>
            <div class="main">
                <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th class="mini">Harga Barang</th>
                    <th class="mini">Stok</th>
                </tr>
                <?php while($a = mysqli_fetch_array($printa)): ?>
                <tr>
                    <td><?= $a['nama_barang'];?></td>
                    <td><?= $a['jenis_barang'];?></td>
                    <td><?= $a['keterangan_barang'];?></td>
                    <td>Rp. <?= $a['harga_barang'];?></td>
                    <td><?= $a['stok_barang'];?></td>
                </tr>
                <?php endwhile;?>
                 </table>
            </div>
        <br><hr><br>
            <div class="mains">
                <table class="tab">
                <tr>
                    <th>Kategori Barang</th>
                </tr>
                <?php while($b = mysqli_fetch_array($printb)): ?>
                <tr>
                    <td><?= $b['tipe_barang'];?></td>
                </tr>
                <?php endwhile;?>
                </table>
                <table class="tab">
                <tr>
                    <th>Keterangan Barang</th>
                </tr>
                <?php while($c = mysqli_fetch_array($printc)): ?>
                <tr>
                    <td><?= $c['keterangan_barang'];?></td>
                </tr>
                <?php endwhile;?>
                </table>
            </div>
    </div>
</body>
</html>
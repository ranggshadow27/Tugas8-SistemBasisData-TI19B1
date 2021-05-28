<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM mainboard';
$result = mysqli_query($conn, $sql);
$memory = 'SELECT * FROM memory';
$memoryresult = mysqli_query($conn, $memory);
$proc = 'SELECT * FROM processor';
$procresult = mysqli_query($conn, $proc);
?>
!
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Tugas 8 - Basis Data</title>
</head>
<body>
    <div class="container">
        <h1>Mainboard</h1>
            <table>
            <tr>
                <th>Nama Barang</th>
                <th>Chipset</th>
                <th class="mini">Stok</th>
                <th>Harga Barang</th>
            </tr>
            <?php if($result): ?>
            <?php while($a = mysqli_fetch_array($result)): ?>
            <tr>
                <td><?= $a['nama_barang'];?></td>
                <td><?= $a['chipset'];?></td>
                <td><?= $a['stok'];?></td>
                <td>Rp. <?= $a['harga_barang'];?></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
            <?php endif; ?>
            </table>
        <h1>Memory</h1>
            <table>
            <tr>
                <th>Nama Barang</th>
                <th class="mini">Tipe Memori</th>
                <th class="mini">Speed</th>
                <th class="mini">Kapasitas</th>
                <th>Harga Barang</th>
            </tr>
            <?php if($memoryresult): ?>
            <?php while($b = mysqli_fetch_array($memoryresult)): ?>
            <tr>
                <td><?= $b['nama_barang'];?></td>
                <td><?= $b['tipe_memori'];?></td>
                <td><?= $b['speed'];?></td>
                <td><?= $b['kapasitas_memori'];?></td>
                <td>Rp. <?= $b['harga_barang'];?></td>
            </tr>

            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
            <?php endif; ?>
            </table>
        <h1>Prosesor</h1>
            <table>
            <tr>
                <th>Nama Barang</th>
                <th class="mini">Tipe Prosesor</th>
                <th class="mini">Inti Prosesor</th>
                <th class="mini">Clockspeed</th>
                <th class="mini">TDP</th>
                <th>Harga Barang</th>
            </tr>
            <?php if($procresult): ?>
            <?php while($c = mysqli_fetch_array($procresult)): ?>
            <tr>
                <td><?= $c['nama_barang'];?></td>
                <td><?= $c['tipe_processor'];?></td>
                <td><?= $c['inti_processor'];?></td>
                <td><?= $c['clockspeed'];?></td>
                <td><?= $c['tdp'];?></td>
                <td>Rp. <?= $c['harga_barang'];?></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
    </div>
</body>
</html>
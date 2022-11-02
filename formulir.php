<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM pelanggan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop Primrose</title>\
    <link rel="stylesheet" href="stylesheet/style.css">
</head>
<body>
<button id="darkmode">Darkmode</button>
    <button id="tekan" onclick="logoWarna">TEKAN</button>
    <div class="header">
    <div class="navbar">
        <a href="index.php">Home</a> |
        <a href="contact.php">Contact</a> |
        <a href="about.php">About me</a>
    </div>
    </div>
    <div class="pelanggan"></div>
    <h3>Silahkan isi data anda!</h3>
    <a href="tambah.php" class="tambah">Tambah data</a>
    <table border=1>
        <tr>
            <th>Nama Pelanggan</th>
            <th>Email</th>
            <th>Password</th>
            <th>Telpon</th>
            <th>Lokasi</th>
            <th>Pesan</th>
            <th>Produk</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php 
            $i = 1;
            while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?= echo $i;?></td>
            <td nowrap>Rizky Fitriani</td>
            <td>fitrianirizky131201@gmail.com</td>
            <td>unmul</td>
            <td>082250273272</td>
            <td>Samarinda</td>
            <td>Bolt Salmonnya 1 kg yaa</td>
            <td>Bolt Salmon</td>
            <td class="edit">
                <a href="edit.php?id=<?=$row['id'];?>"></a>
            </td>
            <td class="hapus">
                <a href="hapus.php?id<?=$row['id'];?>"></a>
            </td>
        </tr>
        <?php 
            $i++;
            }
        ?>
    </table>
</body>
</html>
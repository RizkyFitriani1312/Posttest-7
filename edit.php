<?php 
    require 'config.php';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM pelanggan WHERE id =- '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['form'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $telpopn = $_POST['telpon'];
        $produk1 = $_POST['produk1'];
        $produk2 = $_POST['produk2'];
        $produk3 = $_POST['produk3'];
        $produk4 = $_POST['produk4'];
        $produk5 = $_POST['produk5'];
        $lokasi = $_POST['lokasi'];
        $pesan = $_POST['pesan'];

        $update = mysqli_query($db, "UPDATE pelanggan SET nama='$nama', email='$email', password='$password', telpon='$telpon', lokasi='$lokasi', pesan='$pesan', produk='$produk' WHERE id='$id' ");
        
        if($update) {
            header("Location:index.php");
        }
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
            <td nowrap><?=$row['nama']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['pssword']?></td>
            <td><?=$row['telpon']?></td>
            <td><?=$row['lokasi']?></td>
            <td><?=$row['pesan']?></td>
            <td><?=$row['produk']?></td>
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
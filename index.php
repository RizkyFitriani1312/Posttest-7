<?php 
    require 'config.php';

    date_default_timezone_set("Asia/Makassar");
    
    $query = "SELECT * FROM beli";
    $result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oet Shop Primrose</title>
    <link rel="stylesheet" href="stylesheet/style.CSS">
</head>
<body>
    <h3>Daftar Produk</h3>
    <a href="produk.php">Daftar Belanja Pet Shop Primrose</a>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal Beli</th>
            <th>Gambar</th>
        </tr>
        <?php 
            $i = 1;
            while($row=mysqli_fetch_array($result)){
        ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$row['produk'] ?></td>
                <td><?=$row['pelanggan'] ?></td>
                <td><?=$row['beli'] ?></td>
                <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
            </tr>

        <?php 
            $i++;
            }
        ?>
    </table>

    <footer>
        <p>Copyright @RizkyFitriani1312 2001-<?= date("Y")?></p>
    </footer>
</body>
</html>
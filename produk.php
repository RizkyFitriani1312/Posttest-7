<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop Primrose</title>
    <link rel="stylesheet" href="stylesheet/style.CSS">
</head>
<body>
    <p>Tanggal Beli : <?=date("Y-m-d")?></p><br>
    <form action="" method="post" enctype="multipart/form-data">    

        <label for="">Nama Produk : </label><br>
        <input type="text" name="produk"><br><br>
        
        <label for="">Nama Pelanggan : </label><br>
        <input type="text" name="nama"><br><br>

        <label for="">Gambar Produk : </label><br>
        <input type="file" name="gambar"><br><br>
        
        <input type="date" name="beli" value=<?= date("Y-m-d")?>>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php 

    require 'config.php';

    if(isset($_POST['submit'])){
        $produk = $_POST['produk'];
        $pelanggan = $_POST['pelanggan'];
        $beli = $_POST['beli'];
        
        $gambar = $_FILES['gambar']['gambar'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
            $query = "INSERT INTO beli (produk, pelanggan, beli, gambar) VALUES ('$produk', '$pelanggan', '$beli', '$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:index.php");
            }else{
                echo "gagal kirim";
            }
        }
        
    }
?>
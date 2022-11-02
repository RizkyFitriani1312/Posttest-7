<?php 

    require 'config.php';

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

        $kirim = mysqli_query($db, "INSERT INTO pelanggan (nama,email,password,telpon,lokasi,pesan,produk) VALUES ('$nama','$email','$password','$telpon','$lokasi','$pesan','$produk')");
        
        if($kirim) {
            echo "<script>alert{'Data Berhasil Dikirim');
                windows.location.href('index.php');
                </script>";
        }else {
            echo "Data Gagal Terkirim";
        }
    }
?>

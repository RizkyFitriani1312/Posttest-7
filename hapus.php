<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM pelanggan");

    if(isset($_GET['id'])) {
        $hapus = mysqli_query($db, "DELETE FROM pelanggan WHERE id='id' ");
    }
?>
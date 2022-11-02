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
    <title>Pet Shop Primrose</title>
    <link rel="stylesheet" href="stylesheet/style.CSS">
    <style>
        #body {
            background-color: grey;
        }
        .header {
            background-image: url("../img/Aurora.jpeg");
            background-color: cyan;
            height: 90px;
            color: white;
        }

        .header-logo {
            font-size: 36px;
            float: left;
            padding: 20px 40px;
        }

        .navbar {
            height: 40px;
            float: right;
            color: white;
            padding: 20px 40px;
            flex-direction: row;
        }

        li {
            list-style-type: none;
            color: rgb(184, 99, 99);
        }
        .contact-form {
            padding-top:100px;
        }

        .contact-form input {
            width: 400px;
            margin-top:10px;
            margin-bottom: 30px;
            padding: 20px;
            font-size: 18px;
            border: 1px solid white;
        }

        .contact-form textarea {
            width: 400px;
            margin-top:10px;
            margin-bottom: 30px;
            padding: 20px;
            font-size: 18px;
            border: 1px solid white;
        }

        .contact-submit {
            background: white;
            color: rgb(77, 76, 76);
        }
        
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgb(245, 244, 244);
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=email] {
            padding: 5px;
            margin-left: 20px;
            color: rosybrowns;
            border: none;
            cursor: text;
        }
        
        input[type=password] {
            padding: 5px;
            margin-left: 20px;
            color: rosybrown;
            border: none;
            cursor: text;
        }

        input[type=number] {
            padding: 5px;
            margin-left: 20px;
            color: rosybrown;
            border: none;
            cursor: text;
        }

        input[type=checkbox] {
            color: rosybrown;
            border: none;
            cursor: default;
        }

        input[type=submit] {
            background-color: green;
            color: rgb(245, 244, 244);
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
          
        input[type=submit]:hover {
            background-color: green;
        }

        .contact-container {
            border-radius: 5px;
            background-color: rgb(245, 244, 244);
            border-bottom: 2px solid navy;
            font-size: 28px;
            padding-bottom: 15px;
            margin-bottom: 50px;
            flex-grow: 1;
        }

        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .footer {
            background-color: skyblue;
            color: blue;
            height:120px;
            padding: 40px;
        }

        .footer-logo {
            font-size: 32px;
            float: left;
        }

        .footer-list {
            float: right;
        }

        .footer-list li {
            padding-bottom: 20px;
        }

        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
              width: 100%;
              margin-top: 0;
              margin-bottom: 0;
            }
        }
    </style>
</head>
<body id="body">
    <button id="darkmode">Darkmode</button>
    <button id="tekan" onclick="logoWarna">TEKAN</button>
    <div class="header">
    <div class="navbar">
        <a href="index.php">Home</a> |
        <a href="contact.php">Contact</a> |
        <a href="about.php">About me</a>
    </div>
    </div>
    <div class="contact-container">
        <div style="text-align:center">
          <h2>Form Data</h2>
          <p>Silahkan Isi Data Anda</p>
        </div>
        <div class="row">
            <div class="column">
                <form action="tambah.php" method="POST">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" name="nama" class="form-text" placeholder="Silahkan Isi nama Anda..."><br>
                    <label for="email">email</label>
                    <input type="email" name="email" class="form-text" placeholder="Tulis Email Anda"><br>
                    <label for="password">Password</label>
                    <input type="password" name="password"><br>
                    <label for="telpon">NoHp</label>
                    <input type="number" name="telpon" class="form-text" placeholder="Masukkan No Hp Anda"><br><br>
                    <label for="produk">Produk Pilihan</label><br>
                    <input type="checkbox" id="produk1" name="produk1" value="Bike">
                    <label for="produk1"> Bolt Salmon </label><br>
                    <input type="checkbox" id="produk2" name="produk2" value="Car">
                    <label for="produk2"> Cat Choize Salmon </label><br>
                    <input type="checkbox" id="produk3" name="produk3" value="Boat">
                    <label for="produk3"> Cat Choize Kitten Tuna </label><br>
                    <input type="checkbox" id="produk4" name="produk4" value="Boat">
                    <label for="produk4"> Catnip Cat </label><br>
                    <input type="checkbox" id="produk5" name="produk5" value="Boat">
                    <label for="produk5"> Toto Cat Litter</label><br><br>
                    <label for="lokasi">Alamat Pelanggan</label>
                    <select name="lokasi" id="lokasi">
                        <option value="samarinda">Samarinda</option>
                        <option value="sangatta">Sangatta</option>
                        <option value="balikpapan">Balikpapan</option>
                        <option value="other">Lainnya</option>
                    </select><br>
                    <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan" class="form-text" placeholder="Tulis Pesan Anda..." style="height:170px"></textarea>
                        <input type="submit" value="Kirim">
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-logo" style="color: pink;">Welcome To Our Website ! </div>
        <div class="footer-list">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About me</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
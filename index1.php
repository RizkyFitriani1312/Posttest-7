<?php 
    require 'config.php';
    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location:login.php");
        exit;
    }

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
            color: white;
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
        .main {
            padding: 100px 80px
        }

        .copy-container h2 {
            font-size: 60px;
        }

        .contents {
            height: 500px;
            margin-top: 100px;
        }

        .contents-title {
            border-bottom: 2px solid navy;
            font-size: 28px;
            padding-bottom: 15px;
            margin-bottom: 50px;
            flex-grow: 1;
        }

        .contents-item {
            float: left;
            margin-right: 20px;
        }

        .contents-item p {
            font-size: 18px;
            margin-top: 15px;
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
        <div class="header-logo">Welcome To Our Website ! </div>
        <div class="navbar">
        <a href="index.php">Home</a> |
        <a href="contact.php">Contact</a> |
        <a href="about.php">About me</a>
    </div>
    <div class="searching">
            <form action="" method="get">
                <input type="text" name="" placeholder="Searching for.." class="search">
                <input type="submit" name="" value="cari" class="cari">
            </form>
        </div>
    </div>

    <div class="main">
        <div class="copy-container">
            <h2 id="welcome">Selamat Datang Di Website Kami ! </h2>
        </div>
        <div class="contents">
            <h3 class="contents-title">Daftar Barang Pet Shop</h3>
            <div class="contents-item">
                <img src="../img/Bolt Salmon.jpeg" width="200px" height="260px">
                <p>Bolt Salmon</p>
            </div>
            <div class="contents-item">
                <img src="../img/Cat Choize Salmon.jpeg" width="200px" height="260px">
                <p>Cat Choize Salmon</p>
            </div>
            <div class="contents-item">
                <img src="../img/Cat Choize kitten Tuna.jpeg" width="200px" height="260px">
                <p>Cat Choize Kitten Tuna</p>
            </div>
            <div class="contents-item">
                <img src="../img/Catnip Cat.jpeg" width="200px" height="260px">
                <p>Catnip Cat</p>
            </div>
            <div class="contents-item">
                <img src="../img/Toto Cat Litter.jpeg" width="200px" height="260px">
                <p>Toto Cat Litter</p>
            </div>
        </div>
        <div class="akun">
            <p>Akun Pelanggan</p>
            <a href="logout.php">Logout</a>
        </div>
    </header>

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
    <script src="script.js"></script>
    <script src="jquery.js"></script>
</body>
</html>
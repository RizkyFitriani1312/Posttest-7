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

        .tentang {
            height: 500px;
            margin-top: 100px;
        }

        .tentang-title {
            border-bottom: 2px solid navy;
            font-size: 28px;
            padding-bottom: 15px;
            margin-bottom: 50px;
        }

        .foto-profil{
            float: left;
        }

        .informasi {
            float: right;
            margin-left: 600px;
            margin-right: 20px;
            margin-top: 60px;
            background-color: aquamarine;
            position: relative;
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

    <div class="tentang">
        <h2 class="tentang-title">About Me</h3>
        <div class="foto-profil">
            <img src="../img/My Photo.jpeg" width="300px" height="370px">
        </div>
        <div class="informasi">
            <p>Nama             : Rizky Fitriani</p>
            <p>NIM              : 2009106122</p>
            <p>Program Studi    : Informatika</p>
            <p>Angkatan         : 2020</p>
            <p>Hobi             : Baca Manhwa</p>
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
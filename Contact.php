<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="gaya.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="topnav">
            <h1 class="judul">COVID.<span style="color: black;">info</span></h1>
            <a href="Contact.html" class="active">KONTAK</a>
            <a href="PENANGAN.html">PENANGANAN</a>
            <a href="Gejala.html" >GEJALA</a>
            <a href="Home.html">HOME</a>
        </div>
        <h1 style="color: #ff0000; text-align: center;">HUBUNGI KAMI</h1>
        <div class="card2">
            <div class="part3">
                <div class="container">
                    <form action="" method="post">
                        <label for="fname">Nama Pertama</label>
                        <input type="text" id="fname" name="firstname" placeholder="Masukan nama anda..">
            
                        <label for="lname">Nama Terakhir</label>
                        <input type="text" id="lname" name="lastname" placeholder="Masukan nama anda..">
            
                        <label for="country">Alamat</label>
                        <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap..">
            
                        <label for="subject">Keluhan</label>
                        <textarea id="subject" name="subject" placeholder="Tuliskan keluhan anda.." style="height:200px"></textarea>
            
                        <input type="submit" value="Submit" name="masuk">
                    </form>
                </div>
                <img src="1869354.png" alt="Avatar" style="width:100% ">
            </div>
        </div>
            
        </div>
        <div class="footer">
            <h2>Media Informasi Covid-19</h2>
        </div>
        <?php
        include "koneksi.php";
        if(isset($_POST['masuk'])){
            mysqli_query($koneksi,"insert into pasien set
            namapertama = '$_POST[firstname]',
            namakedua = '$_POST[lastname]',
            alamat = '$_POST[alamat]',
            keluhan = '$_POST[subject]'");

            echo "Laporan anda telah disimpan";
        }
        ?>
        <script src="Sihir.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    </body>
</html>
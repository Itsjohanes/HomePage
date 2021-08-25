<?php
session_start();

if(isset($_SESSION['username'])){
    header("location: welcome.php");
include_once("home.html");
include_once("materi.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="img/johannes.jpg">
    <title>Johannes Alexander Putra</title>
</head>
<body>
    <div class="container">
        <!--awal header-->
        <header>
            <a href="#" class="logo"><span>Johannes Alexander Putra-</span>Website</a>
            <div id="menu" class="fas fa-bars"></div>
            <nav class="navbar">
                <a href="Home.html">home</a>
                <a href="materi.html">Tulisan</a>
                <a href="Buku.html">Buku</a>
                
            </nav>
        </header>
        <!--akhir header-->

        <!--awal home section-->
        <section class="home">
            <div class="content">
                <h3>Blog Utama Milik Johannes Alexander Putra</h3>
                <h4>Blog ini berisi mirroring menuju blogspot saya dan google drive yang berisi buku-buku yang menarik. Blog ini dibuat agar mempermudah untuk mengakses materi-materi kuliah dan buku-buku teologi.</h4>
            </div>
            <div class="image">
                <img src="img/Home.jpg" alt="home">
            </div>
        </section>
        <!--akhir home section-->

        <!--awal footer section-->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>about me</h3>
                    <p>Johannes Alexander Putra adalah seorang mahasiswa di salah satu universitas negeri di Indonesia saat ini sedang mendalami ilmu komputer dan Teologi Kristen</p>
                </div>
                  <pre>
                </pre>
                <pre>
                </pre>
                <div class="box">
                  
                    <h3>follow me</h3>
                    <a href="https://www.facebook.com/Johannesalexanderputra">facebook</a>
                    <a href="https://www.instagram.com/johannesap_/">instagram</a>
                    <a href="https://www.dicoding.com/users/johanesap">Dicoding</a>
                    <a href="https://www.linkedin.com/in/johannes-alexander-putra-044833201/">linkedin</a>
                    <a href="https://github.com/Itsjohanes">GitHub</a>
                </div>
               
                <div class="box">
                    <h3>contact me</h3>
                    <p><i class="fas fa-phone"></i>+62 81934172542</p>
                    <p><i class="fas fa-envelope"></i>johanesalex774@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i>Bandung, Indonesia</p>
                </div>
                <p class="Cpoyright">© Johannes Alexander Putra 2021 </p>
            </div>
        </section>
        <!--akhir footer section-->
    </div>
    <script src="js/script.js"></script>
</body>
</html>

<?php
session_start();

if(isset($_SESSION['username'])){
    header("location: welcome.php");
include_once("home.html");
include_once("materi.html");
}
?>

<html>
    <head>
        <title>
            sebelum login
        </title>
    </head>
    <body>
        
    </body>
</html>
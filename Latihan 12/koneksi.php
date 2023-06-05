<?php
    $mysqli = mysqli_connect("localhost","root","");
    mysqli_select_db($mysqli,"akademik");
    if(!$mysqli = mysqli_connect("localhost","root","")) 
    {
        echo "Tdk Konek Ke Database, Silahkan Cek Apakah Konfigurasi sudah sesuai !";
    } 
    if(!mysqli_select_db($mysqli,'akademik')) 
    {
        echo "Database Tdk Ada, Silahkan cek kembali !"; 
    }
?>
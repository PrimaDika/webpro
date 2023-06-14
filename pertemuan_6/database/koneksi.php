<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT)or die ("Error");
    // if($cnn){
    //     echo "koneksi ke DBMS Mysql Sukses";
    // }else{
    //     echo "koneksi ke DBMS Mysql Gagal";
    // }
    // mysqli_close($cnn);
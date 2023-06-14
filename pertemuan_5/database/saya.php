<?php
    // include("../konfigurasi.php");
    include("koneksi.php");

    $tabel = "CREATE TABLE MAHASISWA(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(255),
        prodi VARCHAR(10),
        jenis_kelamin VARCHAR(1),
        tgl_lahir DATE,
        id_mhs VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn, $tabel);
    if($hsl){
        echo "tabel MAHASISWA sukses";
    }
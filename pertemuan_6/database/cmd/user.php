<?php
    include("database/koneksi.php");
    function createuser($nama, $email, $user, $password){
        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser)
        VALUES(
            '$nama',
            '$email',
            '$user',
            '$password',
            '$iduser',
        );";
        echo "DEBUG: ", $sql;
        return $stt;
    }
?>
<?php
    include("database/cmd/user.php");

    if(isset($_POST["txPASS"])){
        if($_POST["txPASS"] == $_POST["txPASS"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS"];

            if(createuser($nama, $email, $user, $pass)){

            }else{
                
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="register.php">
        <div>
            Nama Lengkap
            <input type="text" name="txNAMA">
        </div>

        <div>
            Email
            <input type="email" name="txEMAIL">
        </div>

        <div>
            Username
            <input type="text" name="txUSER">
        </div>

        <div>
            Password
            <input type="password" name="txPASS">
        </div>

        <div>
            Verifikasi Password
            <input type="password" name="txPASS2">
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
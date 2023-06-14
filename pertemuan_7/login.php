<?php
    session_start();
    include("cmd/user.php");
    if(isset($_POST["txPASS"])){
        $pwd = $_POST["txPASS"];
        $user = $_POST["txUSER"];

        $islogin = ceklogin($user, $pwd);
        if($islogin["STATUS"]){
            $_SESSION["LOGIN"] = md5($user);
            $_SESSION["NAMA"] = $islogin["NAMA"];

            header("location: dashboard.php");
        }else{
            $_SESSION["LOGIN"] = " ";
            $_SESSION["NAMA"] = " ";

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
  <form action="login.php" method="POST">
    <h3>Form Login</h3>
    <div>
        USER NAME  <br>
        <input type="text" name="txUSER">
    </div>
    <br>
    <div>
        PASSWORD  <br>
        <input type="password" name="txPASS">
    </div>
    <br>
    <div>
        <button type="submit">Login</button>
    </div>
  </form>  
</body>
</html>
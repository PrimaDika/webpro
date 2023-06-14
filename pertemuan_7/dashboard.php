<?php
    session_start();

    if(isset($_SESSION["LOGIN"])){
        if(!$_SESSION["LOGIN"] == ""){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    DataMahasiswa <br> DataMatakuliah <br> DataDosen <br> DataUser <br> <a href="?act = logout">Logout</a>    

</body>
</html>
<?php
    }else{
        header("Location: login.php");
    }

}else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 03</title>
</head>
<body>
    <form>
        <div>
            NAMA Lengkap
            <input type="text" id="txNAMA" Name="txNAMA">
        </div>

        <button type="button" onclick="checknama()">Check NAMA</button>
    </form>
    <script>
        function checknama(){
            let nm = document.getElementById ("txNAMA").value;
            alert("Isi Dari field txNAMA: "+nm);
        }
    </script>
</body>
</html>
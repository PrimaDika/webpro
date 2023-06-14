<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan rumus segitiga</title>
</head>
<body>
    <form>
        <div>
            masukan alas
            <input type="number" id="txALAS" Name="txALAS">
        </div>

        <div>
            masukan tinggi
            <input type="number" id="txTINGGI" Name="txTINGGI">
        </div>

        <button type="button" onclick="checkhasil()">Check HASIL</button>
    </form>

    <script>
        function checkhasil(){
            let a = document.getElementById ("txALAS").value;
            let t = document.getElementById ("txTINGGI").value;

            let L = a * t / 2

            alert("Luas segitiga adalah: "+L)
        }
    </script>

</body>
</html>
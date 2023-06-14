<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            Nama
            <input type="text" name="txNAMA" id="NAMA">
        </div>
        <div>
            NIM
            <input type="text" name="txNIM" id="NIM">
        </div>
        <div>
            Jenis Kelamin<br>
            <input type="radio" name="txJKEL" id="JKEL" value="L">Laki - Laki
            <input type="radio" name="txJKEL" id="JKEL" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" id="JURUSAN">
                <option value="TIMDI">TIMDI</option>
                <option value="KAB">KAB</option>
                <option value="DKV">DKV</option>
                <option value="SK">SK</option>
            </select>
        </div>
        <div>
            HOBI<br>
            <input type="checkbox" name="txHOBI_RENANG" value="RENANG">Renang
            <input type="checkbox" name="txHOBI_GAMBAR" value="GAMBAR">Gambar
            <input type="checkbox" name="txHOBI_LARI" value="LARI">Lari
            <input type="checkbox" name="txHOBI_GAME" value="GAME">Game
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            function show(item,message){
            let value2 = F.namedItem(item).value;
            console.log(message+value2)
        }
        function hobi(atr,message){
            let hb = F.namedItem(atr).checked;
            let msg = " ";
            if (hb==true){
                msg = "DIPILIH"
            }else{
                msg = "TIDAK DIPILIH"
            }

            console.log(message+msg)
        }

        show('txNAMA', 'NAMA: ')
        show('txNIM', 'NIM: ')
        show('txJKEL', 'JENIS KELAMIN: ')
        show('txJURUSAN', 'JURUSAN: ')
        hobi('txHOBI_RENANG', 'HOBI RENANG: ')
        hobi('txHOBI_GAMBAR', 'HOBI GAMBAR: ')
        hobi('txHOBI_LARI', 'HOBI LARI: ')
        hobi('txHOBI_GAME', 'HOBI GAME: ')
        
            return false;
        }
    </script>
</body>
</html>
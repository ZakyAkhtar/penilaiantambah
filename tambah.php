<html>
<head>
</head>
<body>
    <h1>FORM BANTUAN BLT</h1>
    <form action="proses_tambah.php" method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama Lengkap : </label>
                    <input type="text" name="nama" />
                </p>
                <p>

                    <label for="jb">Jenis Bantuan : </label><br> 
                    <input type="radio" name="jb" value="Tunai"/>Tunai<br>
                    <input type="radio" name="jb" value="Non Tunai"/>Non Tunai<br>
                    <input type="radio" name="jb" value="Beras"/>Beras<br>
                    <input type="radio" name="jb" value="Minyak"/>Minyak<br>
                    <input type="radio" name="jb" value="Gula"/>Gula<br>
                </p>
                <p>
                <input type="submit" value="kirim data" name="tambah"/>
                </P>
</fieldset>
</form>
</body>
</body>
</html>
<html>
    <head>
        <title>PRAK302</title>
        <style>
            .triangle {
                display: inline-block;
                text-align: right;
            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            <label for="tinggi">Tinggi :</label>
            <input type="number" name="tinggi" id="tinggi" required><br>
            <label for="gambar">Alamat Gambar :</label>
            <input type="text" name="gambar" id="gambar" required><br>
            <input type="submit" name="submit" value="Cetak">
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $tinggi = $_POST['tinggi'];
            $gambar_url = $_POST['gambar'];

            $baris = $tinggi;

            echo "<br>";
            echo "<div class='triangle'>";
            while ($baris >= 1) {
                $spasi = $tinggi - $baris; 
                echo str_repeat("&nbsp;", $spasi);
                $kolom = 1;
                while ($kolom <= $baris) {
                    echo "<img src='$gambar_url' alt='gambar' width='50'>";
                    $kolom++;
                }
                echo "<br>";
                $baris--;
            }
            echo "</div>";
        }
        ?>
    </body>
</html>

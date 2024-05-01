<html>
    <head>
        <title>PRAK301</title>
        <style>
        .bold {
            font-weight: bold;
        }
    </style>
    </head>
    <body>
        <form method="post" action="">
            <label for="jumlah_input">Jumlah Peserta:</label>
            <input type="number" name="jumlah_peserta" id="jumlah_peserta" required><br>
            <input type="submit" name="submit" value="Cetak">
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $jumlah_peserta = $_POST['jumlah_peserta'];
            $counter = 1;
            $color = "red";

            while ($counter <= $jumlah_peserta) {
                
                $color = ($color == "red") ? "green" : "red";
                
                echo "<p style='color: $color; font-size: 24px;' class='bold'>Peserta ke-$counter</p>";
            
                $counter++;
            }
        }
        ?>
    </body>
</html>

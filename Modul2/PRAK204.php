<html>
    <head>
        <title>PRAK204</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="bilangan">Nilai:</label>
            <input type="number" name="bilangan" id="bilangan" required><br>
            <input type="submit" name="submit" value="Konversi">
        </form>

        <?php
        function ejaan($angka) {
            if ($angka == 0) {
                return "Nol";
            } elseif ($angka >= 1 && $angka <= 9) {
                return "Satuan";
            } elseif ($angka == 10) {
                return "Puluhan";
            } elseif ($angka >= 11 && $angka <= 19) {
                return "Belasan";
            } elseif ($angka >= 20 && $angka <= 99) {
                return "Puluhan";
            } elseif ($angka >= 100 && $angka <= 999) {
                return "Ratusan";
            } else {
                return "Anda Menginput Melebihi Limit Bilangan";
            }
        }

        if(isset($_POST['submit'])) {
            $bilangan = intval($_POST['bilangan']);

            echo "<h2> Hasil: " . ejaan($bilangan) . "</h2>";
        }
        ?>
    </body>
</html>

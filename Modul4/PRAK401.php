<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post">
            <label for="panjang">Panjang:</label>
            <input type="number" id="panjang" name="panjang" required><br>
            <label for="lebar">Lebar:</label>
            <input type="number" id="lebar" name="lebar" required><br>
            <label for="nilai">Nilai:</label>
            <input type="text" id="nilai" name="nilai" required><br>
            <input type="submit" value="Cetak">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $nilai = explode(" ", $_POST['nilai']);
            $total_nilai = count($nilai);

            if ($total_nilai != $panjang * $lebar) {
                echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks.</p>";
            } else {
                $index_nilai = 0;

                echo "<h3>Matriks:</h3>";
                echo "<table border='1' cellspacing='0'>";
                for ($i = 0; $i < $panjang; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $lebar; $j++) {
                        echo "<td>{$nilai[$index_nilai++]}</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        ?>
    </body>
</html>

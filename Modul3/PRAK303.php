<html>
    <head>
        <title>PRAK303</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="batas_bawah">Batas Bawah :</label>
            <input type="number" name="batas_bawah" id="batas_bawah" required><br>
            <label for="batas_atas">Batas Atas :</label>
            <input type="number" name="batas_atas" id="batas_atas" required><br>
            <input type="submit" name="submit" value="Cetak">
        </form>

        <div class="output">
            <?php
            if(isset($_POST['submit'])) {
                $batas_bawah = $_POST['batas_bawah'];
                $batas_atas = $_POST['batas_atas'];

                $current_number = $batas_bawah;

                do {
                    if (($current_number + 7) % 5 == 0) {
                        echo "<img src='star.png' alt='star' width='20'>";
                    } else {
                        echo $current_number;
                    }
                    echo " ";
                    $current_number++;
                } while ($current_number <= $batas_atas);
            }
            ?>
        </div>
    </body>
</html>

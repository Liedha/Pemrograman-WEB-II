<html>
    <head>
        <title>PRAK203</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="suhu">Nilai:</label>
            <input type="number" name="suhu" id="suhu" required>
            <br>
            <label>Dari:</label><br>
            <input type="radio" name="from_unit" value="C"> Celcius (C)<br>
            <input type="radio" name="from_unit" value="F"> Fahrenheit (F)<br>
            <input type="radio" name="from_unit" value="Re"> Reamur (Re)<br>
            <input type="radio" name="from_unit" value="K"> Kelvin (K)<br>
            
            <label>Ke:</label><br>
            <input type="radio" name="to_unit" value="C"> Celcius (C)<br>
            <input type="radio" name="to_unit" value="F"> Fahrenheit (F)<br>
            <input type="radio" name="to_unit" value="Re"> Reamur (Re)<br>
            <input type="radio" name="to_unit" value="K"> Kelvin (K)<br>
            
            <input type="submit" name="submit" value="Konversi">
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $suhu = $_POST['suhu'];
            $from_unit = $_POST['from_unit'];
            $to_unit = $_POST['to_unit'];

            switch($from_unit) {
                case 'C':
                    $celcius = $suhu;
                    break;
                case 'F':
                    $celcius = ($suhu - 32) * 5/9;
                    break;
                case 'Re':
                    $celcius = $suhu * 5/4;
                    break;
                case 'K':
                    $celcius = $suhu - 273.15;
                    break;
            }

            switch($to_unit) {
                case 'C':
                    $result = $celcius;
                    break;
                case 'F':
                    $result = ($celcius * 9/5) + 32;
                    break;
                case 'Re':
                    $result = $celcius * 4/5;
                    break;
                case 'K':
                    $result = $celcius + 273.15;
                    break;
            }

            echo "<h2>Hasil konversi: $result $to_unit</h2>";
        }
        ?>
    </body>
</html>

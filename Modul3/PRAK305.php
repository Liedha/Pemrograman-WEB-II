<!DOCTYPE html>
<html>
<head>
    <title>PRAK 305</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" id="input" name="input">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan string dari input form
        $input = $_POST["input"];
        
        // Mencetak input yang dimasukkan oleh pengguna
        echo "<h3>Input:</h3> $input";
        
        // Mencetak string dengan masing-masing karakter terulang sebanyak panjang string
        echo "<h3>Output:</h3>";
        for ($i = 0; $i < strlen($input); $i++) {
            echo strtoupper($input[$i]); // cetak huruf besar
            for ($j = 1; $j < strlen($input); $j++) {
                echo strtolower($input[$i]); // cetak huruf kecil
            }
        }
    }
    ?>
</body>
</html>

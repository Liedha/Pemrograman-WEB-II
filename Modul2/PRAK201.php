<html>
    <head>
        <title>PRAK201</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="nama1">Nama: 1</label>
            <input type="text" name="nama1" id="nama1"><br>
            <label for="nama2">Nama: 2</label>
            <input type="text" name="nama2" id="nama2"><br>
            <label for="nama3">Nama: 3</label>
            <input type="text" name="nama3" id="nama3"><br>
            <input type="submit" name="submit" value="Urutkan">
        </form>

        <?php
        function nama_urut($nama1, $nama2, $nama3) {
            $nama_array = array($nama1, $nama2, $nama3);
            
            sort($nama_array);
            
            return $nama_array;
        }

        if(isset($_POST['submit'])) {
            $nama1 = $_POST['nama1'];
            $nama2 = $_POST['nama2'];
            $nama3 = $_POST['nama3'];

            $nama_urut = nama_urut($nama1, $nama2, $nama3);

            echo "<h3>Output:</h3>";
            echo "<ol>";
            foreach ($nama_urut as $nama) {
                echo "<li>$nama</li>";
            }
            echo "</ol>";
        }
        ?>
    </body>
</html>

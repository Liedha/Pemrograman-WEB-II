<html>
    <head>
        <title>PRAK202</title>
        <style>
            .error {
                color: red;
            }
            .required {
            color: red;
            }
            input[type="text"] {
                color: black;
            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="required">
            <span class="required">*</span>
            <span class="error" id="nama_error"></span><br>

            <label for="nim">Nim:</label>
            <input type="text" name="nim" id="nim" class="required">
            <span class="required">*</span>
            <span class="error" id="nim_error"></span><br>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <span class="required">*</span>
            <span class="error" id="jenis_kelamin_error"></span><br>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin_l" value="L"> <label for="jenis_kelamin_l">Laki-laki</label><br>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin_p" value="P"> <label for="jenis_kelamin_p">Perempuan</label><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
        
            $error = false;

            if(empty($nama)) {
                echo "<script>document.getElementById('nama_error').innerText = 'nama tidak boleh kosong';</script>";
                $error = true;
            }

            if(empty($nim)) {
                echo "<script>document.getElementById('nim_error').innerText = 'nim tidak boleh kosong';</script>";
                $error = true;
            }

            $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
            if(empty($jenis_kelamin)) {
                echo "<script>document.getElementById('jenis_kelamin_error').innerText = 'jenis kelamin tidak boleh kosong';</script>";
                $error = true;
            }

            if(!$error) {
                echo "<h2>Output:</h2>";
                echo "$nama<br>";
                echo "$nim<br>";
                if ($jenis_kelamin == 'L') {
                    echo "Laki-laki";
                } elseif ($jenis_kelamin == 'P') {
                    echo "Perempuan";
                }
            }
        }
        ?>
    </body>
</html>

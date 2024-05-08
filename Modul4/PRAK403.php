<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Nilai</title>
    </head>
    <body>
        <table border='1' cellspacing='0'>
            <tr style="background-color: #D3D3D3;">
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
            <?php
            $students = array(
                "Ridho" => array( "Pemrograman I" => 2, "Praktikum Pemrograman I" => 1, "Pengantar Lingkungan Lahan Basah" => 2, "Arsitektur Komputer" => 3),
                "Ratna" => array("Basis Data I" => 2, "Praktikum Basis Data I" => 1, "Kalkulus" => 3),
                "Tono" => array( "Rekayasa Perangkat Lunak" => 3, "Analisis dan Perancangan Sistem" => 3, "Komputasi Awan" => 3, "Kecerdasan Bisnis" => 3)
            );

            $no = 1;
            foreach ($students as $student => $courses) {
                $total_sks = array_sum($courses);
                $num_courses = count($courses);
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $student; ?></td>
                    <?php
                    $first_course = true;
                    foreach ($courses as $course => $sks) {
                        if (!$first_course) {
                            echo "<tr><td></td><td></td>";
                        }
                        ?>
                        <td><?php echo $course; ?></td>
                        <td><?php echo $sks; ?></td>
                        <?php
                        if ($first_course) {
                            echo "<td >$total_sks</td>";
                            if($total_sks < 7) {
                                echo '<td style="background-color:red">Revisi KRS</td>';    
                            } else {
                                echo '<td style="background-color:green">Tidak Revisi</td>';    
                            }
                            $first_course = false;
                            continue;
                        }
                        echo "<td></td> <td></td>";
                        ?>
                        </tr>
                    <?php } ?>
            <?php } ?>
        </table>
    </body>
</html>

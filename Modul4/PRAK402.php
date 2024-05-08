<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Nilai</title>
    </head>
    <body>
        <table border='1' cellspacing='0'>";
            <tr style="background-color: #D3D3D3;">
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
            <?php
            $data = array(
                array("Nama" => "Andi", "NIM" => "2101001", "NilaiUTS" => 87, "NilaiUAS" => 65),
                array("Nama" => "Budi", "NIM" => "2101002", "NilaiUTS" => 76, "NilaiUAS" => 79),
                array("Nama" => "Tono", "NIM" => "2101003", "NilaiUTS" => 50, "NilaiUAS" => 41),
                array("Nama" => "Jessica", "NIM" => "2101004", "NilaiUTS" => 60, "NilaiUAS" => 75)
            );
            
            foreach ($data as &$row) {
                $nilai_akhir = 0.4 * $row["NilaiUTS"] + 0.6 * $row["NilaiUAS"];
                $row["NilaiAkhir"] = $nilai_akhir;
                
                if ($nilai_akhir >= 80) {
                    $row["Huruf"] = "A";
                } elseif ($nilai_akhir >= 70 && $nilai_akhir < 80) {
                    $row["Huruf"] = "B";
                } elseif ($nilai_akhir >= 60 && $nilai_akhir < 70) {
                    $row["Huruf"] = "C";
                } elseif ($nilai_akhir >= 50 && $nilai_akhir < 60) {
                    $row["Huruf"] = "D";
                } else {
                    $row["Huruf"] = "E";
                }
            }
            
            unset($row); 
            ?>
            
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row["Nama"]; ?></td>
                    <td><?php echo $row["NIM"]; ?></td>
                    <td><?php echo $row["NilaiUTS"]; ?></td>
                    <td><?php echo $row["NilaiUAS"]; ?></td>
                    <td><?php echo $row["NilaiAkhir"]; ?></td>
                    <td><?php echo $row["Huruf"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>

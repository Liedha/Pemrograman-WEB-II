<html>
    <head>
        <title>Daftar Smartphone Samsung</title>
        <style>
            table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0 2px;
                border: 1px solid black;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

    <?php
    $smartphones = array(
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    );

    echo "<table>";
    echo "<tr><th>Daftar Smartphone Samsung</th></tr>";

    foreach ($smartphones as $smartphone) {
        echo "<tr><td>" . $smartphone . "</td></tr>";
    }

    echo "</table>";
    ?>

    </body>
</html>
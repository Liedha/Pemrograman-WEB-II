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
            th {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
                background-color: red;
                font-size: 20px;
                border: 1px solid black;
            }
            td {
            padding: 8px;
            border: 1px solid black;
        }
        </style>
    </head>
    <body>

    <?php
    $smartphones = array(
        "Samsung Galaxy S22" => "Samsung Galaxy S22",
        "Samsung Galaxy S22+" => "Samsung Galaxy S22 +",
        "Samsung Galaxy A03" => "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5" => "Samsung Galaxy Xcover 5"
    );

    echo "<table>";
    echo "<tr><th>Daftar Smartphone Samsung</th></tr>";

    foreach ($smartphones as $name => $smartphone) {
        echo "<tr><td>" . $smartphone . "</td></tr>";
    }

    echo "</table>";
    ?>

    </body>
</html>
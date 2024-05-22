<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 90%;
            max-width: 800px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            margin-right: 10px;
            padding: 5px 10px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .edit-button {
            background-color: #3498db;
        }

        .edit-button:hover {
            background-color: #2980b9;
        }

        .delete-button {
            background-color: #e74c3c;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }

        .add-rental {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .add-rental:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="container">
<?php
require 'Model.php';

if (isset($_GET['delete'])) {
    deleteData('peminjaman', $_GET['delete']);
    header('Location: Peminjaman.php');
    exit;
}

$peminjaman = getData('peminjaman');

echo '<a href="FormPeminjaman.php" class="add-rental">Tambah Peminjaman</a>';
echo '<table>';
echo '<tr><th>ID</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Aksi</th></tr>';

foreach ($peminjaman as $item) {
    echo '<tr>';
    echo '<td>' . $item['id_peminjaman'] . '</td>';
    echo '<td>' . $item['tgl_pinjam'] . '</td>';
    echo '<td>' . $item['tgl_kembali'] . '</td>';
    echo '<td class="action-links"><a href="FormPeminjaman.php?id=' . $item['id_peminjaman'] . '" class="edit-button">Edit</a> <a href="Peminjaman.php?delete=' . $item['id_peminjaman'] . '" class="delete-button">Delete</a></td>';
    echo '</tr>';
}
echo '</table>';
?>
</div>
</body>
</html>

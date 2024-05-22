<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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

        .action-buttons a {
            padding: 8px 12px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
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

        .add-member {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .add-member:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="container">
<?php
require 'Model.php';

if (isset($_GET['delete'])) {
    deleteData('member', $_GET['delete']);
    header('Location: Member.php');
    exit;
}

$members = getData('member');

echo '<a href="FormMember.php" class="add-member">Tambah Member</a>';
echo '<table>';
echo '<tr><th>ID</th>
      <th>Nama</th>
      <th>Nomor Member</th>
      <th>Alamat</th>
      <th>Tanggal Daftar</th>
      <th>Tanggal Terakhir Bayar</th>
      <th>Aksi</th></tr>';

foreach ($members as $member) {
    echo '<tr>';
    echo '<td>' . $member['id_member'] . '</td>';
    echo '<td>' . $member['nama_member'] . '</td>';
    echo '<td>' . $member['nomor_member'] . '</td>';
    echo '<td>' . $member['alamat'] . '</td>';
    echo '<td>' . date('Y-m-d', strtotime($member['tgl_mendaftar'])) . '</td>';
    echo '<td>' . date('Y-m-d', strtotime($member['tgl_terakhir_bayar'])) . '</td>';
    echo '<td class="action-buttons"><a href="FormMember.php?id=' . $member['id_member'] . '" class="edit-button">Edit</a> <a href="Member.php?delete=' . $member['id_member'] . '" class="delete-button">Delete</a></td>';
    echo '</tr>';
}
echo '</table>';
?>
</div>
</body>
</html>

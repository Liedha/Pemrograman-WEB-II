<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Form</title>
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

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="date"] {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
<?php
require 'Model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
    ];

    if ($_POST['id_peminjaman']) {
        updateData('peminjaman', $data, $_POST['id_peminjaman']);
    } else {
        insertData('peminjaman', $data);
    }
    header('Location: Peminjaman.php');
    exit;
}
$peminjaman = ['id_peminjaman' => '', 'id_member' => '', 'id_buku' => '', 'tgl_pinjam' => '', 'tgl_kembali' => ''];
if (isset($_GET['id'])) {
    $peminjaman = getDataById('peminjaman', $_GET['id']);
}
?>

<form method="POST">
    <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?>">
    
    <label for="tgl_pinjam">Tanggal Pinjam:</label>
    <input type="date" name="tgl_pinjam" id="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'] ?>">
    
    <label for="tgl_kembali">Tanggal Kembali:</label>
    <input type="date" name="tgl_kembali" id="tgl_kembali" value="<?= $peminjaman['tgl_kembali'] ?>">
    
    <button type="submit">Submit</button>
</form>
<a href="Peminjaman.php" class="back-link">Back to Rental List</a>
</div>
</body>
</html>

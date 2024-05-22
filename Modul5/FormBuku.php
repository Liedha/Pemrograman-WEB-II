<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Form</title>
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

        input[type="text"], input[type="date"], textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
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
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
    ];

    if ($_POST['id_buku']) {
        updateData('buku', $data, $_POST['id_buku']);
    } else {
        insertData('buku', $data);
    }
    header('Location: Buku.php');
    exit;
}

$buku = ['id_buku' => '', 'judul_buku' => '', 'penulis' => '', 'penerbit' => '', 'tahun_terbit' => ''];
if (isset($_GET['id'])) {
    $buku = getDataById('buku', $_GET['id']);
}
?>

<form method="POST">
    <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>">
    Judul: <input type="text" name="judul_buku" value="<?= $buku['judul_buku'] ?>"><br>
    Penulis: <input type="text" name="penulis" value="<?= $buku['penulis'] ?>"><br>
    Penerbit: <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?>"><br>
    Tahun Terbit: <input type="text" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>"><br>
    <button type="submit">Submit</button>
</form>

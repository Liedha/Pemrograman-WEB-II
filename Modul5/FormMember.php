<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Form</title>
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
        'nama_member' => $_POST['nama_member'],
        'nomor_member' => $_POST['nomor_member'],
        'alamat' => $_POST['alamat'],
        'tgl_mendaftar' => $_POST['tgl_mendaftar'],
        'tgl_terakhir_bayar' => $_POST['tgl_terakhir_bayar']
    ];

    if ($_POST['id_member']) {
        updateData('member', $data, $_POST['id_member']);
    } else {
        insertData('member', $data);
    }
    header('Location: Member.php');
    exit;
}

$member = ['id_member' => '', 'nama_member' => '', 'nomor_member' => '', 'alamat' => '', 'tgl_mendaftar' => '', 'tgl_terakhir_bayar' => ''];
if (isset($_GET['id'])) {
    $member = getDataById('member', $_GET['id']);
}
?>

<form method="POST">
    <input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
    Nama: <input type="text" name="nama_member" value="<?= $member['nama_member'] ?>"><br>
    Nomor Member: <input type="text" name="nomor_member" value="<?= $member['nomor_member'] ?>"><br>
    Alamat: <textarea name="alamat"><?= $member['alamat'] ?></textarea><br>
    Tanggal Daftar: <input type="date" name="tgl_mendaftar" value="<?= $member['tgl_mendaftar'] ?>"><br>
    Tanggal Terakhir Bayar: <input type="date" name="tgl_terakhir_bayar" value="<?= $member['tgl_terakhir_bayar'] ?>"><br>
    <button type="submit">Submit</button>
</form>

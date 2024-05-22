<?php
require 'Koneksi.php';

function getData($table) {
    global $mysqli;
    $sql = "SELECT * FROM $table";
    $result = $mysqli->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getDataById($table, $id) {
    global $mysqli;
    $sql = "SELECT * FROM $table WHERE id_$table = $id";
    $result = $mysqli->query($sql);
    return $result->fetch_assoc();
}

function insertData($table, $data) {
    global $mysqli;
    $fields = implode(", ", array_keys($data));
    $values = implode(", ", array_map(function($item) use ($mysqli) {
        return "'" . $mysqli->real_escape_string($item) . "'";
    }, array_values($data)));
    $sql = "INSERT INTO $table ($fields) VALUES ($values)";
    return $mysqli->query($sql);
}

function updateData($table, $data, $id) {
    global $mysqli;
    $set = [];
    foreach ($data as $key => $value) {
        $set[] = "$key = '" . $mysqli->real_escape_string($value) . "'";
    }
    $set_string = implode(", ", $set);
    $sql = "UPDATE $table SET $set_string WHERE id_$table = $id";
    return $mysqli->query($sql);
}

function deleteData($table, $id) {
    global $mysqli;
    $sql = "DELETE FROM $table WHERE id_$table = $id";
    return $mysqli->query($sql);
}
?>

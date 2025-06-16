<?php
include_once "../config/database.php";

function respond($code, $message)
{
    http_response_code($code);
    echo $message;
    exit();
}

if (!isset($_GET['nilai_sensor']) || !isset($_GET['status_lampu'])) {
    respond(400, "Parameter Tidak Lengkap");
}

$nilai_sensor = $_GET['nilai_sensor'];
$status_lampu = $_GET['status_lampu'];

$query = "
    INSERT INTO data_sensor (nilai_sensor, status_lampu)
    VALUES ('$nilai_sensor', '$status_lampu')
";

if (!mysqli_query($conn, $query)) {
    respond(500, "Gagal Input: " . mysqli_error($conn));
}

respond(201, "Data berhasil dimasukkan!");
mysqli_close($conn);

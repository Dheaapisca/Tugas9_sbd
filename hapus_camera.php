<?php
include 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM camera WHERE id_camera = '{$id}'");

header('location: index.php');

?>
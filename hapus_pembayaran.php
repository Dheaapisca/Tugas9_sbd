<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM pembayaran WHERE id_camera= '{$id}'");

    header('location: index.php');
?>
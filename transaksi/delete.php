<?php
    include '../koneksi.php';

    if (isset($_GET['id_transaksi'])){
        header('Location:transaksi.php');
    }

    $id_transaksi = $_GET['id_transaksi'];

    $sql = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location:transaksi.php');
    }else{
        header('Location:delete.php?status=gagal');
    }
?>
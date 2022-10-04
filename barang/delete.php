<?php
    include '../koneksi.php';

    if (isset($_GET['id_barang'])){
        header('Location:barang.php');
    }

    $id_barang = $_GET['id_barang'];

    $sql = "DELETE FROM barang WHERE id_barang = '$id_barang'";
    $query = mysql_query($connect, $sql);

    if ($query){
        header('Location:barang.php');
    }else{
        header('Location:delete.php?status=gagal');
    }
?>
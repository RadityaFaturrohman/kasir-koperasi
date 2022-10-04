<?php
    include '../koneksi.php';

    if (isset($_POST['submit'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $sql =" UPDATE barang SET nama_barang = '$nama_barang', jenis='$jenis', harga='$harga', stok='$stok' WHERE id_barang = '$id_barang'";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header("Location: barang.php");
        }else{
            header("Location: edit.php?status=gagal");
        }
    }
?>
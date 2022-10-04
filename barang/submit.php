<?php
    include '../koneksi.php';

    if(isset($_POST['submit'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $sql = "INSERT INTO barang VALUES ('$id_barang','$nama_barang','$jenis','$harga','$stok')";
        $query = mysqli_query($connect, $sql);

    if($query){
        header('location: barang.php');
    }else{
        header('location: submit.php?status=failed');
    }
    }
?>
<?php
    include '../koneksi.php';

    if(isset($_POST['submit'])){
        $id_transaksi = $_POST['id_transaksi'];
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jml_beli = $_POST['jml_beli'];
        $total = $_POST['total'];

        $sql = "INSERT INTO transaksi VALUES ('$id_transaksi','$id_barang','$nama_barang','$harga','$jml_beli','$total')";
        $query = mysqli_query($connect, $sql);

    if($query){
        header('location: transaksi.php');
    }else{
        header('location: submit.php?status=failed');
    }
    }
?>
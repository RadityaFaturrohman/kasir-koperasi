<?php
    include 'koneksi.php';

    if(isset($_POST['Lanjutkan'])){

        $id = $_POST['id'];
        $namauser = $_POST['namauser'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $kelas = $_POST['kelas'];

        $sql =" UPDATE `datauser` SET namauser ='$namauser',alamat ='$alamat',telepon ='$telepon',kelas ='$kelas'WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: datauser.php');
        }else{
            header('Location: perubahan.php?status=gagal');
        }

    }
?>  
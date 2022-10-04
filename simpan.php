<?php
    include 'koneksi.php';

    if(isset($_POST['Lanjutkan'])){

        $id = $_POST['id'];
        $namauser = $_POST['namauser'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $kelas = $_POST['kelas'];

        $sql = " INSERT INTO datauser (id, namauser, alamat, telepon, kelas)
        VALUES ('$id', '$namauser' , '$alamat' , '$telepon' , '$kelas')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: datauser.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }


    }

?>
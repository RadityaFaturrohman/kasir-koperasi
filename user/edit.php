<?php
    include '../koneksi.php';

    if (isset($_POST['submit'])){
        $id_user = $_POST['id_user'];
        $nama_user = $_POST['nama_user'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];

        $sql =" UPDATE user SET nama_user = '$nama_user', telepon='$telepon', email='$email', stok='$stok' WHERE id_user = '$id_user'";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header("Location: datauser.php");
        }else{
            header("Location: edit.php?status=gagal");
        }
    }
?>
<?php
    include '../koneksi.php';

    if(isset($_POST['submit'])){
        $id_user = $_POST['id_user'];
        $nama_user = $_POST['nama_user'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];

        $sql = "INSERT INTO user VALUES ('$id_user','$nama_user','$telepon','$email')";
        $query = mysqli_query($connect, $sql);

    if($query){
        header('location: datauser.php');
    }else{
        header('location: submit.php?status=failed');
    }
    }
?>
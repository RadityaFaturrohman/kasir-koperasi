<?php
    include '../koneksi.php';

    if (isset($_GET['id_user'])){
        header('Location:datauser.php');
    }

    $id_user = $_GET['id_user'];

    $sql = "DELETE FROM user WHERE id_user = '$id_user'";
    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location:datauser.php');
    }else{
        header('Location:delete.php?status=gagal');
    }
?>
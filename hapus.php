<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location:datauser.php');
}

$id = $_GET['id'];

$sql = "DELETE FROM datauser WHERE id='$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('location: datauser.php');
}else{
    header('location: hapus.php?status=gagal');
}
?>
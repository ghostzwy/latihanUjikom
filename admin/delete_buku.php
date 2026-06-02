<?php
include "../config/koneksi.php";
$id_buku = $_GET["id_buku"];
$query = "delete from tbl_buku where id_buku = '$id_buku'";
$result = mysqli_query($koneksi,$query);
if($result){
    header("location: buku.php");
    die();
}
?>
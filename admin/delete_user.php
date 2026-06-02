<?php
include "../config/koneksi.php";
$id_user = $_GET["id_user"];
$query = "delete from tbl_user where id_user = '$id_user'";
$result = mysqli_query($koneksi,$query);
if($result){
    header("location: user.php");
    die();
}
?>
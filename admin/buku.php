<?php
include "../config/koneksi.php";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $judul_buku = $_POST["judul_buku"];
    $pengarang_buku = $_POST["pengarang_buku"];
    $penerbit_buku = $_POST["penerbit_buku"];
    $tahun = $_POST["tahun"];
    if(!empty($_FILES["gambar"]["tmp_name"])){
        $gambar = $_FILES["gambar"]["name"];
        $tmp_name = $_FILES["gambar"]["tmp_name"];
        move_uploaded_file($tmp_name, "../assets/image/" . $gambar);
    }

    $query = "insert into tbl_buku (judul_buku,pengarang_buku,penerbit_buku,tahun,gambar) values ('$judul_buku','$pengarang_buku','$penerbit_buku','$tahun','$gambar') ";  
    $result = mysqli_query($koneksi,$query);
 if($result){
        echo "<alert>berhasil menambahkan data</alert>";
}else{
    echo "<alert>gagal menambahkan data</alert>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
<form action="" method="GET">
    <?php
    if(isset($_GET["keyword"])){
        $keyword = $_GET["keyword"];
        $query = "select * from tbl_buku where judul_buku LIKE'%$keyword%' or pengarang_buku LIKE '%$keyword%'or penerbit_buku LIKE '%$keyword%'or tahun like '%$keyword%'";
    }else{
        $query = "select * from tbl_buku";
    }
    ?>
<label for="">search</label>
<input type="search" name="keyword" placeholder="masukan sesuatu">
<button></button>
</form>    
    
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
        <label for="">judul</label>
        <input type="text" name="judul_buku">
        <label for="">pengarang</label>
        <input type="text" name="pengarang_buku">
        <label for="">penerbit</label>
        <input type="text" name="penerbit_buku">
        <label for="">tahun</label>
        <input type="text" name="tahun">
        <label for="">gambar</label>
        <input type="file" name="gambar" id="">
            <button>simpan</button>
        </form>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>judul_buku</th>
                    <th>pengarang buku</th>
                    <th>penerbit buku</th>
                    <th>tahun</th>
                    <th>gambar</th>
                </tr>
            </thead>
        <?php

$result = mysqli_query($koneksi,$query);
        while($row = $result->fetch_assoc()){
            echo"
<tr>
<td>".$row["judul_buku"]."</td>
<td>".$row["pengarang_buku"]."</td>
<td>".$row["penerbit_buku"]."</td>
<td>".$row["tahun"]."</td>
<td> 
<img src='../assets/image/".$row["gambar"]." ' width= 100px; height= 100px;>
</td>
<td>
<a href='edit_buku.php?id_buku=".$row["id_buku"]."'>edit</a>
<a href='delete_buku.php?id_buku=".$row["id_buku"]."'>hapus</a> 

</td>

</tr> <br>  "; 
        }
?>

            </table>
    </div>
</body>
</html>
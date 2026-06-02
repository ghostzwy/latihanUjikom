<?php
include "../config/koneksi.php";
$id_buku = $_GET["id_buku"];
$query = "select * from tbl_buku where id_buku = '$id_buku'";
$result = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($result);


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
    else{
        $gambar = $_POST["gambar_lama"];
    }

    $query = "update tbl_buku set judul_buku = '$judul_buku',pengarang_buku ='$pengarang_buku',penerbit_buku ='$penerbit_buku',tahun= '$tahun',gambar = '$gambar' where id_buku = $id_buku";  
    $result = mysqli_query($koneksi,$query);
 if($result){
    header("location: buku.php");
    die();
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
<body>
      <form action="" method="POST" enctype="multipart/form-data">
        <label for="">judul</label>
        <input type="text" name="judul_buku" value="<?= $data["judul_buku"]; ?>" > 
        <label for="">pengarang</label>
        <input type="text" name="pengarang_buku" value="<?= $data["pengarang_buku"]; ?>">
        <label for="">penerbit</label>
        <input type="text" name="penerbit_buku" value="<?= $data["penerbit_buku"]; ?>">
        <label for="">tahun</label>
        <input type="text" name="tahun" value="<?= $data["tahun"]; ?>">
        <label for="">gambar</label>
        <input type="file" name="gambar" id=""accept="image/jpg,image/png" ?>">
        <input type="hidden" name="gambar_lama" id="" value="<?= $data["gambar"]; ?>">
        <button>simpan</button>
        </form>
</body>
</html>
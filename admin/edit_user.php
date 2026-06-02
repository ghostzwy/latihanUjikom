<?php
include "../config/koneksi.php";
$id_user = $_GET["id_user"];
$query =  "select * from tbl_user where id_user = $id_user";
$result = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($result);


if($_SERVER["REQUEST_METHOD"] =="POST"){
    $nama_user = $_POST["nama_user"];
    $Username= $_POST["Username"];
    $password = $_POST["password"];
    $query = "update tbl_user set nama_user = '$nama_user',Username = '$Username' ,password = '$password' where id_user = $id_user ";
    $result = mysqli_query($koneksi,$query);
    if($result){
        header("location: user.php");
        die();
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
    <form action="" method="POST">
        <label for="">nama user</label>
        <input name="nama_user"type="text" value="<?php echo $data["nama_user"]?>">
        <label for=""></label>
        <input type="text" name="Username" value="<?php echo $data["Username"]?>">
        <label for=""></label>
        <input type="text" name= "password"value="<?php echo $data["password"]?>">
    <button>simpan</button>
    </form>
</body>
</html>
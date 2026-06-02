<?php
include "../config/koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama_user= $_POST["nama_user"];
    $Username = $_POST["Username"];
    $password= $_POST["password"];
$query = "insert into tbl_user (nama_user,Username,password) values ('$nama_user','$Username','$password') ";  
$result = mysqli_query($koneksi,$query);
if($result){
    echo"register berhasil";
    header("Location: login.php");
    exit;    
}else{
    echo"register gagal";
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
     .register{
        background-color:green;
        width: 20%;
        margin-top:150px;
        margin-bottom:20px; 
        margin-left:auto;
        margin-right:auto;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        padding:20px;
        border-radius: 10px;
        color: white;
    }
    
    .register form {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .register form button {
        margin-top: 15px;
        width: 50%;
        align-self: center; 
    }
</style>
<body>
    <div class="register">
<form action="" method="POST">
    <label for="">nama user</label>
    <input type="text" name="nama_user" id="">
    <label for="">username</label>
    <input type="text" name="Username" id="">
    <label for="">Passowrd</label>
    <input type="password" name="password" id="">
    <button>simpan</button>
</form>
    </div>
</body>
</html>
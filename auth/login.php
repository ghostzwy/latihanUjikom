<?php
include "../config/koneksi.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Username = $_POST['Username'];
    $password = $_POST['password'];
    $query = "select * from tbl_user where Username = '$Username' and password = '$password'";
    $result  = mysqli_query($koneksi,$query);
    if(mysqli_num_rows($result) == 1 ){
        $_SESSION["Username"] = $Username;
        header("location:../admin/index.php");
        die();
    }else{
        echo "login gagal";
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
<style>
*{
        color:black;
    }
    .login{
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
    
    .login form {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .login form button {
        margin-top: 15px;
        width: 50%;
        align-self: center; 
    }
</style>
<body>
    <div class="login">
        <h2>Silakan Login</h2>
    <form action="" method="POST">
        <label for="">username</label>
        <input type="text" name="Username" id="">
        <label for="">password</label>
        <input type="password" name="password" id="">
        <button>login</button>
    </form>
    <p>Blom punya akun?<a href="register.php">Register</a> </p>
    </div>
</body>
</html>
<?php
include "../config/koneksi.php";
session_start();

if(!isset($_SESSION["Username"])){
    header("location: ../auth/login.php");
    die();
}
$Username = $_SESSION["Username"];
$query = "select * from tbl_user where Username = '$Username'";
$result = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php" target="#">Home</a></li>
            <li><a href="user.php" target="content">Data User</a></li>
            <li><a href="buku.php" target="content">Data Buku</a></li>
        </ul>
        <p>halo !,<?php echo htmlspecialchars($data["Username"]);?></p>       
    <a href="../auth/logout.php" target="#">Logout</a>    
    </nav>

</body>
</html>
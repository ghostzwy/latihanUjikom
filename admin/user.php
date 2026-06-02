<?php
include "../config/koneksi.php";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $nama_user = $_POST["nama_user"];
    $Username = $_POST["Username"];
    $password = $_POST["password"];
    $query = "insert into tbl_user (nama_user,Username,password) values ('$nama_user','$Username','$password') ";  
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
    <div>
        <form action="" method="POST">
            <label for="">nama user</label>
            <input type="text" name="nama_user">
            <label for="">username</label>
            <input type="text" name="Username">
            <label for="">password</label>
            <input type="password" name="password">
            <button>simpan</button>
        </form>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>nama_user</th>
                    <th>username</th>
                    <th>password</th>
                </tr>
            </thead>

        <?php
$query = "select * from tbl_user";
$result = mysqli_query($koneksi,$query);
        while($row = $result->fetch_assoc()){
echo "
<tr>
<td>".$row["nama_user"]."</td>
<td>".$row["Username"]."</td>
<td>".$row["password"]."</td>
<td>
<a href='edit_user.php?id_user=".$row["id_user"]."'>edit</a>
<a href='delete_user.php?id_user=".$row["id_user"]."'>hapus</a> 

</td>

</tr> <br>  "; 
        }
        ?>
            </table>
    </div>
</body>
</html>
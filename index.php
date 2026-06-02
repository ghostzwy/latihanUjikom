<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1{
            color: green;
            background-color:white;
            text-align:center;
        }
        nav{
            background-color:green;
            height :50px;
        }
        ul{
            list-style-type:none;
            margin:0;
            padding:0 20px;
            height:100%;
            display:flex;
            justify-content: space-between;
            align-items:center;
        }
        ul li a{
            margin-top:10px;
            display:flex;
            color:white;
            text-align:center;
            text-decoration:none
        }
        .gambar1{
            width:100%;
            margin : 0 auto;
            height: 500px;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            
        }
        .profil {
            display:flex;
            justify-content:center;
            align-items:center;
            
        }
        .profil img{
            width:200px;
            height:200px;
            
        }

    </style>
    <h1>perpustakaan</h1>
    <h1>Smk Taruna Bangsa</h1>
    <nav>
        <ul>
            <li><a href="">home</a></li>
            <li><a href="auth/login.php">login</a></li>
        </ul>
    </nav>
    <div>
        <img src="assets/image/Youtube Thumbnail Podcast Horor.png" class="gambar1" alt="">
    </div>
    <h2>profile</h2>
    <div class="profil">
        <img src="assets/image/logo.png" alt="">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil veritatis quis ullam iusto illo. Illo exercitationem nulla odit facere iste iure distinctio perspiciatis non atque. Praesentium minus ab pariatur doloribus.</p>
</div>
<footer style=text-align:center;>Dibuat oleh &copy; Danang Satya pratama</footer>
</body>
</html>
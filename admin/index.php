<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin :0;
        padding:0;
    }
    .sidebar{
        height:100vh;
        width:250px;
        position:fixed;
        top:0;
        left:0;
        background-color:green; 
    }
    .content{
        height:100vh;
        margin-left:250px;
    }
    iframe{
        border : none;
        width: 100%;
        height:100%;
    }

</style>
<body>
    <iframe src="sidebar.php" class="sidebar"frameborder="0"name="sidebar" ></iframe>
    <iframe src="content.php" class="content" frameborder="0" name="content" > </iframe>
</body>
</html>
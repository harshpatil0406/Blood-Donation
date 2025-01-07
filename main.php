<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main{height:550px; width: 1148px;position: absolute;left:0px;top: 0px;}
        img{height:600px; width:1148px;position:absolute;left:0px;top:0px; z-index:-1;}
        .title{height: 30px;font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:35px;color:red; text-align: center;padding-top: 120px;letter-spacing:00px;}
        .btn{height:300px;padding-top: 0px;padding-top:100px;}
        button{height: 35px; width: 200px;border-radius: 2px; color: white;background-color: rgb(111, 110, 110);}
        .btn1{height:300px;width:250px;float:left;padding-left: 100px;}
        .btn2{height:300px;width:574px;float:left;}
    </style>
</head>
<body>
    <div id="main">
        <img src="./upload/main.jpg">
        <div class="title">Welcome to Blood Donors Management System</div>
        <div class="btn">
            <div class="btn1"><a href="adminlogin.php"><button>Admin Login Panel</button></a></div>
            <div class="btn2"><a href="login.php"><button>User Login Panel</button></a></div>
        </div>
    </div>
</body>
</html>
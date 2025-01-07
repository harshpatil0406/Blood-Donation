<?php
session_start();
include("connect.php");
if(isset($_POST['btn']))
{
    // echo "hi";exit;
    $n=$_POST['name'];
    $p=$_POST['password'];
    $s="select * from admin where name='$n'and password='$p'";
    //echo $s;exit;
    $a=mysqli_query($c,$s);
    if($a)
    {
        $_SESSION['h']=$_POST['name'];
        header("location:adminhome.php");
    }
    else
    {
        echo "Wrong password Re-enter password";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main{height: 425px; width: 250px;}
        .first{height: 230px;width: 250px;padding-left: 10px;}
        .second{height: 200px;width: 250px;}
        button{height: 30px;width: 250px; background-color: green;border: 0px;color: white;border-radius: 2px;}
        b{font-size: large;}
        fieldset{width: 250px;margin-left: 400px;}
        input{width: 240px;}
    </style>
</head>
<body>
    <fieldset>
        
        <legend><h1>Admin Login</h1></legend>
        <form method="post">
            <div id="main">
              
                <div class="first"><img src="./upload/admin.png"></div>
                <div class="second">
                    Enter a Username<br><input type="text" name="u_name"><br><br>
                    Enter a password<br><input type="text" name="u_password"><br><br>
                    <button name="btn" type="submit" >Login</button><br><br>
                </div>
            </div>
</form>
        </fieldset>
</body>
</html>
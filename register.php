<?php
include("connect.php");
if(isset($_POST['btn']))
{
   
    $n=$_POST['u_name'];
    $p=$_POST['u_password'];
    $s="INSERT INTO user(u_name,u_password)VALUES('$n','$p')";
  //  echo $s;exit;
    $a=mysqli_query($c,$s);
    if($a)
    {
        header("location:msg.php");
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
        #main{height: 200px; width: 250px;}
        .first{height: 200px;width: 250px;}
        button{height: 30px;width: 250px; background-color: green;border: 0px;color: white;border-radius: 2px;}
        b{font-size: large;}
        fieldset{width: 250px;margin-left: 400px;}
        input{width: 240px;}
    </style>
</head>
<body>
    <b>You are now registering yourself as user of this system.<br><br>
    Please provide the following credentials in order to register as a new user.</b><br><br><br>
        <fieldset>
        <legend><h1>Register</h1></legend>
        <form method="post">
            <div id="main">
                <div class="f"></div>
                <div class="first">
                    Enter a Username:<br><input type="text" name="u_name"><br><br>
                    Enter a password:<br><input type="password" name="u_password"><br><br>
                    <button name="btn" type="submit">Login me as a User</button><br>
                </div>
            </div>
        </form>
        </fieldset>
</body>
</html>
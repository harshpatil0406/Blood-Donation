<?php 
include("connect.php");
$s="SELECT * FROM blood";
$a=mysqli_query($c,$s);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{height: 40px;width: 150px; background-color:green;border: 0px;color: white;border-radius: 2px;}
    </style>
</head>
<body>
    <h1>Thanks for Registering as Donor </h1>
    <h4><a href="home.php"><button>Continue</button></a></h4>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['btn']))
{
    $fn=$_POST['f_name'];
    $ln=$_POST['l_name'];
    $a=$_POST['address'];
    $ci=$_POST['city'];
    $m=$_POST['mobile'];
    $p=$_POST['password'];
    $g=$_POST['gender'];
    $b=$_POST['blood_group'];
    $s="INSERT INTO blood_donor(f_name,l_name,address,city,mobile,password,gender,blood_group)VALUES('$fn','$ln','$a','$ci','$m','$p','$g','$b')";
    //echo $s;exit;
    $a=mysqli_query($c,$s);
    if($a)
    {
        header("location:campaign.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #main{height:2000px; width: 1148px;position: absolute;left:0px;top: 0px;}
        .index{height: 60px;width: 1148px;}
        img{height:600px; width:1148px;left:0px;top:0px;}
        nav{background-color: red;}
        a{color: black;}

    </style>
</head>
<body>
    <div id="main">
        <div class="index">
            <nav class="navbar navbar-expand-sm  justify-content-end fixed-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="campaign.php">Campaign</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Blood Donation</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div><img src="./upload/donor.png"></div>

        <div id="textbox">
            <div class="container mt-3">
                <h2>Welcome To Blood Donors Management System</h2>
                <form method="post">
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter First Name:</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First name" name="f_name">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="last_name">Enter Last Name:</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last name" name="l_name">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter City:</label>
                    <input type="text" class="form-control" id="city" placeholder="city" name="city">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter Mobile No:</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                  </div>
                  <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="password" name="password">
                  </div>
                  
                  <div class="form-check mb-3">
                    <label class="form-label">Selct-Gender</label>
                    <select class="form-control" id="sell" name="gender">
                    <option class="form-control">Male</option><option class="form-control">Female</option></select>
                  </div>
                  <div class="mb-3">
                  <label class="form-label">Selct Blood Group</label>
                    <select class="form-control" id="blood" name="blood_group">
                    <option class="form-control">A+</option><option class="form-control">A-</option>
                    <option class="form-control">B+</option><option class="form-control">B-</option>
                    <option class="form-control">AB+</option><option class="form-control">AB-</option>
                    <option class="form-control">O+</option><br><option class="form-control">O-</option>
                    </select>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                </form>
              </div> 
        </div>
    </div>
</body>
</html>
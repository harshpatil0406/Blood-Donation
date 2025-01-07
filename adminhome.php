<?php
include("connect.php");
$x ="SELECT * FROM blood_donor";
$y=mysqli_query($c,$x);
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
                        <a class="nav-link" href="adminhome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="createcampaign.php">Create Campaign</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Blood Donation</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div><img src="./upload/donor.png"></div>

        <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="table-danger">
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Address</th>
              <th>City</th>
              <th>Mobile</th>
              <th>Password</th>
              <th>Gender</th>
              <th>BloodGroup</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
          <?php
            while($r=mysqli_fetch_array($y))
            {
            echo '<tr class="table-success">
              <td>'.$r["f_name"].'</td>
              <td>'.$r["l_name"].'</td>
              <td>'.$r["address"].'</td>
              <td>'.$r["city"].'</td>
              <td>'.$r["mobile"].'</td>
              <td>'.$r["password"].'</td>
              <td>'.$r["gender"].'</td>
              <td>'.$r["blood_group"].'</td>
              <td><a href="edit.php?y='.$r["id"].'"class="btn btn-danger">edit</a><a href="delete.php?d='.$r["id"].'"class="btn btn-danger">delete</a></td>
            </tr>';
            }
          ?>
          </tbody>
        </table>
      </div>
    </div>
    
    </div>
</body>
</html>
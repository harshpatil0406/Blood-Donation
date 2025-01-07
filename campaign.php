<?php
include("connect.php");
$x ="SELECT * FROM campaign";
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
    button{height: 40px;width: 150px; background-color:green;border: 0px;color: white;border-radius: 2px;}
  </style>
</head>
<body>
    <h1>Campaigns List </h1><br>
    <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="table-danger">
            <tr>
              <th>Campaign Name</th>
              <th>Organizer Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Location</th>
            </tr>
          </thead>
          <tbody>
          <?php
            while($r=mysqli_fetch_array($y))
            {
              echo '<tr class="table-success">
              <td>'.$r["c_name"].'</td>
              <td>'.$r["o_name"].'</td>
              <td>'.$r["c_date"].'</td>
              <td>'.$r["c_time"].'</td>
              <td>'.$r["c_location"].'</td>
            </tr>';
            }
          ?>
          </tbody>
        </table>
      </div>
    </div>
    <br><br>
</body>
<h4><a href="home.php"><button>Go Back</button></a></h4>
</html>
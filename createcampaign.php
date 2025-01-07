<?php
include("connect.php");
if(isset($_POST['btn']))
{
    $cn=$_POST['c_name'];
    $on=$_POST['o_name'];
    $cd=$_POST['c_date'];
    $ct=$_POST['c_time'];
    $cl=$_POST['c_location'];
    
    $s="INSERT INTO campaign(c_name,o_name,c_date,c_time,c_location)VALUES('$cn','$on','$cd','$ct','$cl')";
    //echo $s;exit;
    $a=mysqli_query($c,$s);
    if($a)
    {
        header("location:main.php");
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
</head>
<body>
<div id="textbox">
    <div class="container mt-3">
        <h2>Create a New Campaign</h2><br>
        <form method="post">
          <div class="mb-3 mt-3">
            <label for="Enter Campaign Name">Enter Campaign Name</label>
            <input type="text" class="form-control" id="Enter Campaign Name" placeholder="Your New Campaign Name" name="c_name">
          </div>
          <div class="mb-3 mt-3">
            <label for="Enter Organizer Name">Enter Organizer Name</label>
            <input type="text" class="form-control" id="Enter Organizer Name" placeholder="Your Organizer Name" name="o_name">
          </div>
          <div class="mb-3">
            <label for="dateInput" class="form-label">Choose Campaign Date</label>
            <input type="date" class="form-control" id="dateInput" name="c_date">
          </div>
          <div class="mb-3 mt-3">
            <label for="timeInput" class="form-label">Choose Campaign Time</label>
            <input type="time" class="form-control" id="timeInput" name="c_time">
          </div>
          <div class="mb-3">
            <label for="Enter Campaign Location">Enter Campaign Location</label>
            <input type="text" class="form-control" id="Enter Campaign Location" placeholder="Campaign Location" name="c_location">
          </div>
          
          <button type="submit" class="btn btn-primary" name="btn">Create New Campaign</button>
        </form>
    </div> 
</div>
    
</body>
</html>
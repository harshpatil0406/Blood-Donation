<?php
include("connect.php");
$id=$_GET['d'];
$s ="DELETE FROM blood_donor WHERE id='$id'";
$p= mysqli_query($c,$s);
if($p)
{
    header("Location:adminhome.php");
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
                <h2>Welcome To Blood Donors Management System</h2>
                <form method="post" action="adminhome.php?z=<?php echo $id; ?>">
                  <div class="mb-3 mt-3">
                    <label>Enter First Name:</label>
                    <input type="text" class="form-control" placeholder="First name" name="f_name" value="<?php echo $fn; ?>">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="last_name">Enter Last Name:</label>
                    <input type="text" class="form-control" placeholder="Last name" name="l_name" value="<?php echo $ln; ?>">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter Address:</label>
                    <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $a; ?>">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter City:</label>
                    <input type="text" class="form-control" placeholder="city" name="city" value="<?php echo $ci; ?>">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter Mobile No:</label>
                    <input type="mobile" class="form-control" placeholder="Mobile No" name="mobile" value="<?php echo $m; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="password" name="password" value="<?php echo $p; ?>">
                  </div>
                  
                  <div class="form-check mb-3">
                    <label class="form-label">Selct-Gender</label>
                    <select class="form-control" id="sell" name="gender" value="<?php echo $g; ?>">
                    <option class="form-control">Male</option><option class="form-control">Female</option></select>
                  </div>
                  <div class="mb-3">
                  <label class="form-label">Selct Blood Group</label>
                    <select class="form-control" id="blood" name="blood_group" value="<?php echo $b; ?>">
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
</body>
</html>
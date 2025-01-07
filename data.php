<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style></style>

</head>
<body>
    
        <div id="textbox">
            <div class="container mt-3">
                <h2>Welcome To Blood Donors Management System</h2>
                <form method="post">
                  <div class="mb-3 mt-3">
                    <label for="first_name">Enter First Name:</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First name" name="first_name">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="last_name">Enter Last Name:</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name">
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
                    <label for="first_name">Enter Contact:</label>
                    <input type="text" class="form-control" id="contact" placeholder="contact" name="contact">
                  </div>
                  <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="password" name="pwd">
                  </div>
                  
                  <div class="form-check mb-3">
                    <label class="form-label">Selct-Gender</label>
                     <select class="form-control" id="sell" name="gender">
                     <option class="form-control">Male</option><br><option class="form-control">Female</option></select>
                  </div>
                  <div class="mb-3">
                    <label for="pwd">Enter blood Group:</label>
                    <input type="text" class="form-control" id="blood" placeholder="Blood Group" name="Blood_group">
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                </form>
              </div> 
        </div>
</body>
</html>
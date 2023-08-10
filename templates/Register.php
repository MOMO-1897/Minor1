<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body style="background-image: url(../images/register.jpg); background-size: cover; background-repeat: no-repeat;">
<div class="container">
  <form id="form" class="form" method="POST" action="../Sign_in.php">
    <h1> Register</h1>
    <div class="form-control">
       <label for="UserName">User Name</label>
      <input type="text" id="UserName" name="name" required>
      <small>Error message</small>
    </div>
    <div class="form-control">
      <label for="email">Email</label>
      <input type="email" id="Email" name="email" required>
      <small>Error message</small>
    </div>
        <div class="form-control">
      <label for="Number">Phone Number</label>
      <input type="number" id="number" name="number" required>
      <small>Error message</small>
    </div>
    <div class="form-control">
      <label for="password">Password</label>
      <input type="password" id="password" name="pass" required>
      <small>Error message</small>
    </div>
    <div class="form-control">
      <label for="confirmpass">Confirm Password</label>
      <input type="password" id="confirmpass" name="pass2" required>
      <small>Error message</small>
    </div>
     <center> <button type="submit" class="btn" name="register">Register</button></center>
          
    </div>
  </form>
</div>
<script src="js/login.js"></script>
</body>

</html>


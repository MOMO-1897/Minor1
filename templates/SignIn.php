  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body style="background-image: url(../images/sign.jpg); background-size: cover; background-repeat: no-repeat;">
<div class="container" style="height: 400px;">
  <form id="form" class="form" method="POST" action="../Sign_In.php">
    <h1>Sign In</h1>
    <div class="form-control">
      <label for="email">Email</label>
      <input type="email" id="Email" name="email" required>
      <small>Error message</small>
    </div>
    <div class="form-control">
      <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
      <small>Error message</small>
    </div>
     <center> <button type="submit" class="btn" name="login">Log In</button></center>
     <center><a href="Register.php">Register now</a></center>
          
    </div>
  </form>
</div>
<script src="js/login.js"></script>
</body>

</html>


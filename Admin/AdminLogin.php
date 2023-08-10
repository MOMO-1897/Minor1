<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="AdminLogin.css">
</head>
<body>
    <main class="main-section">
        <img src="loginblog.jpg" class="background-image" width="100%" height="100%">
        <div class="login-section">
            <h2>Neplore</h2>
            <h2>Sign in as Admim</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validateForm()">
                <div class="box-section">
                    <input type="text" name="ad-email" required>
                    <label>Email</label>
                </div>
                <div class="box-section">
                    <input type="password" name="ad-password" required>
                    <label>Password</label>
                </div>
                <div class="check-section">
                    <input type="checkbox" name="remember">
                    <label>Remember Me</label>
                </div>
                <div class="submit-section">
                    <input type="submit" class="loginsubmit" value="Login" name="admin-login">
                </div>
            </form>
        </div>
    </main>
    <script src="adminScript.js">
    </script>
    <?php

    require_once "../connection.php";

    session_start();
    
    if (isset($_POST['admin-login'])){
   		$email= $_POST['ad-email'];
   		$password= $_POST['ad-password'];

   		$sql= "SELECT * FROM registed_user WHERE Email='$email'";

   		$result = mysqli_query($con, $sql);

   		$row= $result->fetch_assoc();

   			if ($row['Password']==$password OR $row['Password']==md5($password)){
   				$_SESSION['UserName']=$row['User_Name'];
   				$_SESSION['roleId']=$row['Role_ID'];
                $_SESSION['Mail']=$row['Email'];

   				if ($row['Role_ID']==1){
   					header("Location: admin.php");
   				}else if ($row['Role_ID']==2){
                    header("Location: content.php");
   				}else{
                    header("Location: AdminLogin.php");
                }
   			}else{
                header("Location: AdminLogin.php");
   			
   			}
   	}
    ?>
</body>
</html>
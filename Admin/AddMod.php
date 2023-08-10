<?php
    session_start();

    if(!isset($_SESSION['UserName'])){
      header("Location: AdminLogin.php");
    }

    if (isset($_SESSION['roleId']) && $_SESSION['roleId'] != 1){
      header("Location: content.php");
      die();
    }
?>
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
            <h2>Add a Moderator</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validateForm()">
                <div class="box-section">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="box-section">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="box-section">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="box-section">
                    <input type="text" name="phone" required>
                    <label>Phone Number</label>
                </div>
                <div class="submit-section">
                    <input type="submit" class="loginsubmit" value="Add" name="add">
                    <a href="ManageUser.php" style="margin-left: 8px;">Go back</a>
                </div>
            </form>
        </div>
    </main>
    <script src="adminScript.js">
    </script>
    <?php

    require_once "../connection.php";
    
    if (isset($_POST['add'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
    
        $sql = "INSERT INTO `registed_user`(`User_Name`, `Email`, `Password`, `Role_ID`, `phone_no`)
                VALUES (?, ?, ?, 2, ?)";
    
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, md5($password), $phone);
    
        if ($stmt->execute()) {
            header("Location: ManageUser.php?success=1");
            exit();
        } else {
            header("Location: ManageUser.php?success=0");
            exit();
        }
    }
    ?>
</body>
</html>
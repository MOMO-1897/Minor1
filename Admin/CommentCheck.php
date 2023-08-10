<?php
    session_start();

    if(!isset($_SESSION['UserName'])){
      header("Location: AdminLogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" type="text/css" href="message.css">
  <link rel="stylesheet" type="text/css" href="MainStyle.css">
</head>
<body>
  <header class="main-head">
    <div class="main-head-nav"> 
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span class="open-bar"></span>
        <span class="open-bar"></span>
        <span class="open-bar"></span>
      </div>
      <div class="menu-login">
      <div class="side-info">
          <span class=span-icon><i class='fas fa-user-circle' style='font-size:24px'></i></span>
          <span class="span-btn">
            <input type="submit" onclick="toggleDropdown()" class="dropbtn" value="Welcome <?php echo $_SESSION['UserName'];?>">
          </span>
        </div>
          <div id="myDropdown" class="dropdown-content">
            <a href="#">Edit</a>
            <a href="LogOut.php">Log Out</a>
          </div>
        </div>
    </div>
  </header>
  <section class="main-body">
    <div class="hamburger-menu" id="hamburger-menu">
        <div class="close-bar" onclick="toggleMenu()">&times;</div>
        <ul class="hamburger-list">
            <?php
              // if ($_SESSION['roleId']==1){ 
            ?>
            <li><a href="admin.php"><i class="fa fa-dashboard" style="font-size:18px;"><span style="margin-left: 5px;">View Users</span></i></a></li>
            <?php
              // }
            ?> 
            <li><a href="content.php"><i class="fab fa-blogger-b" style='font-size:18px'><span style="margin-left: 5px;">Manage Content</span></i></a></li>
            <li><a href="comment.php"><i class="far fa-comment-dots" style='font-size:18px'><span style="margin-left: 5px;">Manage Management</span></i></a></li>
            <!-- <li><a href="audit.php"><i class="fa fa-file-text-o" style='font-size:18px'><span style="margin-left: 5px;">Audit Logs</span></i></a></li> -->
            <?php
              if ($_SESSION['roleId']==1){ 
            ?>
              <li><a href="ManageUser.php"><i class="far fa-address-card" style='font-size:18px'><span style="margin-left: 5px;">Manage Users</span></i></a></li>
            <?php
              }
            ?>  
            <li><a href="Message.php"><i class='far fa-comment-alt' style='font-size:18px'><span style="margin-left: 5px;">Messages</span></i></a></li>
        </ul>
      </div>
      <div class="container">
        <div class="container-graph">
            <form>
              <div class="message-head">
                <h2 class="message">Message:</h2>
              </div>
              <div class="message-field">
              <?php
              
              require_once "../connection.php";

              if (isset($_GET['id3'])) {
  
                $comID = $_GET['id3'];

                $sql = "SELECT Content FROM comments WHERE Comment_ID = $comID";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                  $comment = $result->fetch_assoc()["Content"];
                  
                  echo '<textarea name="message" rows=30 cols=30 class="message" style="margin-right:15px;">' . $comment . '</textarea>';
                }else{
                  echo 'No message found for this user.';
                }
              }else{
                echo 'No user ID specified.';
              }
              ?>
              </div>
            </form>
            <form action="comdelete.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                <input type="hidden" name="com_id" value="<?php echo $_GET['id3'];?>">
                <button class="delete-btn" type="submit" name="deletecmt" style="margin: 20px 0px 0px 20px;">Delete</button>
            </form>
        </div>
      </div>
</section>
<script src="adminScript.js">

</script>
</body>
</html>
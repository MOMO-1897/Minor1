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
  <link rel="stylesheet" type="text/css" href="adminStyle.css">
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
            <a href="Profile.php">Profile</a>
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
            <li><a href="comment.php"><i class="far fa-comment-dots" style='font-size:18px'><span style="margin-left: 5px;">Manage Comments</span></i></a></li>
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
        <div class="table-view">
        <table class="customer-table">
          <thead>
            <tr>
              <th class="customer-att">Blog ID</th>
              <th class="customer-att">User ID</th>
              <th class="customer-att">Author</th>
              <th class="customer-att">Content</th>
              <th class="customer-att">Added Date</th>
          </tr>
        </thead>
        <?php
          require_once "../connection.php";

          $sql="SELECT * FROM blog";
          
          $result=$con->query($sql);
          
          if ($result->num_rows>0){

            while ($rows=$result->fetch_assoc()){
        ?>  
              <tr>
                <td class="customer-att"><?=$rows["Blog_ID"]?></td>
                <td class="customer-att"><?=$rows["User_ID"]?></td>
                <td class="customer-att"><?=$rows["Author"]?></td>
                <td class="customer-att"><a href="BlogCheck.php?id=<?= $rows["Blog_ID"] ?>">Check Content</a></td>
                <td class="customer-att"><?=$rows["added_date"]?></td>
              </tr>
        <?php
            }
          }
        ?>
        </table>
        </div>
        </div>
      </div>
</section>
<script src="adminScript.js">

</script>
</body>
</html>
 <!DOCTYPE html>
<html>
<head>
  <script src="../js/login.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styling.css">
  <link rel="stylesheet" href="../css/foot.css">
  <link rel="stylesheet" type="text/css" href="../css/styled.css" />
  

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!--Header Start //-->
<nav class="navbar">
    <label class="navbar-toggle" id="js-navbar-toggle" for="chkToggle">
            <i class="fa fa-bars"></i>
        </label>
    <a href="home_first.php" class="logo primary"><img src="../images/logo.jpg" width=85 px></a>
    <input type="checkbox" id="chkToggle"></input>
    <ul class="main-nav" id="js-menu">
      <li> 
        <a href="home_first.php" class="nav-links">Home</a>
      </li>
      <li>
        <a href="about_us.php" class="nav-links">About Us</a>
      </li>
      <li>
        <a href="view_blog.php" class="nav-links">Blog</a>
      </li>
            <li>
        <a href="contactus.php" class="nav-links">Contact Us</a>
      </li>
        <li>
<?php
session_start();

if (!isset($_SESSION['User_Name']) || $_SESSION['User_Name'] == NULL) {
    echo "<a href='SignIn.php' class='nav-links'><i class='fa fa-user fa-2x'></i></a>";
} else {
    echo '
    <div class="dropdown">
        <a href="#" class="nav-links">'.$_SESSION['User_Name'].'</a>
        <div class="dropdown-content">
            <a href="edit_profile.php" class="nav-links" style="text-align:center;margin-left:0px;">Edit Profile</a>
            <a href="C:\xampp\htdocs\project" onclick="logout(); return false;" class="nav-links" style="text-align:center;margin-left:0px;">Logout</a>
            <a href="add_new.php" class="nav-links" style="text-align:center;margin-left:0px;">Add Blog</a>
        </div>
    </div>
    ';
}
?>



      </li> 
    </ul>
  </nav>

 <!--Header end //-->
<?php
    session_start();

    if(!isset($_SESSION['UserName'])){
      header("Location: AdminLogin.php");
    }
?>
<?php
    require_once "../connection.php";
    
    if (isset($_POST['approval'])) {
        $app = $_POST['approval'];
        $id = $_POST['blog_id'];
        
        $sql="UPDATE blog SET Available='$app'
                WHERE Blog_ID = ' $id'";

        if($con->query($sql)){
            header("Location: content.php");
        }
    }
?>
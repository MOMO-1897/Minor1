<?php
    session_start();

    if(!isset($_SESSION['UserName'])){
      header("Location: AdminLogin.php");
    }
?>
<?php
    require_once "../connection.php";

    if (isset($_POST['deletecmt'])){
      $cid=$_POST['com_id'];

      $sql2="DELETE FROM comments
            WHERE Comment_ID='$cid'";

      $result2=$con->query($sql2);

      if ($result2){
        header("Location: comment.php");
      }
    }
?>
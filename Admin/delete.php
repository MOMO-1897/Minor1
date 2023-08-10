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
<?php
    
    require_once "../connection.php";
    
    if (isset($_POST['deleteBtn'])){
      $id=$_POST['edit_id'];

      $sql="DELETE FROM registed_user
            WHERE User_ID='$id'";

      $result=$con->query($sql);

      if ($result){
        header("Location: ManageUser.php");
      }
    }
?>
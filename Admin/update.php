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
                
    if (isset($_POST['edit'])){
    
    $oldid=$_POST['user_id'];
    $newname=$_POST['username'];
    
    if ($_POST['role']=="User"){
        $newrole=3;
    }
    if ($_POST['role']=="Moderator"){
        $newrole=2;
    }

    $sql2="UPDATE registed_user
            SET Role_ID='$newrole', User_Name='$newname'
            WHERE User_ID='$oldid'";
    
    $result=mysqli_query($con,$sql2);              
    
    if ($result){
        header("Location: ManageUser.php");
    }else{
        echo "Update unsuccessful";
    }
   
    }
?>
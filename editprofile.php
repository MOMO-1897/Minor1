<?php
session_start();
include 'connection.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Role_ID = $_SESSION['Role_ID'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $User_ID = $_SESSION['User_ID'];
    $password = md5($password);
	$cpassword = md5($cpassword);
    if ($cpassword == $password) {

        $mysql = "UPDATE `registed_user` SET `User_Name`='$name', `Email`='$email', `Password`='$password', `Role_ID`=3 WHERE `User_ID`='$User_ID'";

        $result = mysqli_query($con, $mysql);

        if ($result) {
            echo 'Updated successfully';
        } else {
            echo 'Error updating record: ' . mysqli_error($con);
        }
    } else {
        echo 'Password Mismatch';
    }
}
?>
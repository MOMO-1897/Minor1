  <?php
    
    include "connection.php";

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $confirm = $_POST['pass2'];
        $phone = $_POST['number'];

        if ($password === $confirm) { 
            $password = md5($password); 

            $mysql = "INSERT INTO registed_user(User_Name, Email, Password, Role_ID,phone_no) VALUES('$name', '$email', '$password', 3,$phone)";

            $result = mysqli_query($con, $mysql);

            if ($result) {
                header("Location: templates/SignIn.php");
            } else {
                echo "Unsuccessful";
            }
        } else {
            echo "Passwords do not match";
        }
    }


   	if (isset($_POST['login'])){
   		$email= $_POST['email'];
   		$password= $_POST['password'];

   		$sql= "SELECT * FROM registed_user WHERE Email='$email'";

   		$result = mysqli_query($con, $sql);

   		$row= $result->fetch_assoc();

   			if ($row['Password']==md5($password)){
                session_start();
   				$_SESSION['User_Name']=$row['User_Name'];
                $_SESSION['Email']=$row['Email'];
   				$_SESSION['Role_ID']=$row['Role_ID'];
                $_SESSION['Password']=$row['Password'];
                $_SESSION['User_ID']=$row['User_ID'];

   				if ($row['Role_ID']==3){
   					header("Location: templates/home_first.php");
   				}else{
   					header("Location: templates/SignIn.php");
   				}
   			}else{
   				header("Location: templates/SignIn.php");
   			}
   	}
?>
<?php
session_start();
$user_ID = $_SESSION['User_ID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment']) && isset($_POST['blog_id'])) {
    $blog_ID = $_POST['blog_id']; 
    $content = $_POST['comment'];

    require "connection.php"; 


    $sql = "INSERT INTO comments (Blog_ID, User_ID, Content) VALUES (?, ?, ?)";


    $stmt = $con->prepare($sql);


    if ($stmt) {

        $stmt->bind_param("iis", $blog_ID, $user_ID, $content);


        if ($stmt->execute()) {

            header("Location:templates/blog.php?id=" . $blog_ID);
            exit; // Make sure to exit after redirect
        } else {
            echo "Error saving comment: " . $stmt->error;
        }


        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }


    $con->close();
} else {
    echo "Invalid request.";
}
?>

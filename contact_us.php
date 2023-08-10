<?php
session_start();
include "connection.php";

if (isset($_POST['Contact'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $stmt = $con->prepare("INSERT INTO `contact_us`(`Name`, `Subject`, `Message`, `Email`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $subject, $message, $email);

    if ($stmt->execute()) {
        echo 'Sent successful';
    } else {
        echo "Unsuccessful: " . $stmt->error;
    }

    $stmt->close();
}
?>

<?php
    session_start();

    unset($_SESSION['UserName']);
    unset($_SESSION['roleId']);

    session_destroy();

    header("Location: AdminLogin.php");
?>
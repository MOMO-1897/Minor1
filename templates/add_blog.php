
<?php
    require_once "../connection.php";
    session_start();
    if (isset($_POST['blogsubmit'])) {
    $title = $_POST['blogtitle'];
    $content = $_POST['blogcontent'];
    $img = $_POST['filename'];
    $author = $_SESSION['User_Name'];
    $id = $_SESSION['User_ID'];

    // Prepare the SQL statement
    $sql = "INSERT INTO blog (Author, Image, Content, User_ID, Title) VALUES (?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = $con->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("sssis", $author, $img, $content, $id, $title);

    // Execute the prepared statement
    if ($stmt->execute()) {
        header("Location: add_new.php");
        exit(); // Ensure that the script stops here after redirection
    } else {
        echo "failed";
    }
}
?>
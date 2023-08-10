<?php

require "../connection.php";
include 'headers.php';

if (isset($_GET['id'])) {
    $blog_Id = $_GET['id'];

    $sql = "SELECT * FROM blog WHERE Blog_ID = $blog_Id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $blog_id = $row["Blog_ID"];
        $pic = $row["Image"];
        $content = $row["Content"];
        $user_ID = $row["User_ID"];
        $date = $row["added_date"];
        $author = $row["Author"];
        $title = $row["Title"];

        $pic_data_uri = base64_encode($pic);


        echo '

        <body class="blogcs">
        <img src="../images/small.jpg" width: 100%">
            <div class="page">
                <div class="inner-cont">
                    <div class="con3" style=" margin-bottom: 40px;">
                        <h4 style="text-align: left;">' . $title . '</h4>
                        <p class="subtext">' . $date . '</p>
                        <p class="subtext">' . $author . '</p>
                        <hr>
                        <img src="data:image/jpg;base64,' . $pic_data_uri . '">
                    </div>
                    <p>' . $content . '</p>';

        $sql_comments = "SELECT comments.*, registed_user.User_Name as comment_name
        FROM comments
        INNER JOIN registed_user ON comments.User_ID = registed_user.User_ID
        WHERE comments.Blog_ID = $blog_Id";
        $result_comments = $con->query($sql_comments);

        if ($result_comments->num_rows > 0) {
            while ($row_comment = $result_comments->fetch_assoc()) {
                $comment_name = $row_comment["comment_name"];
                $comment_content = $row_comment["Content"];

                echo '
                    <div class="comment-display">
                        <div class="name">' . $comment_name . '</div>
                        <p>' . $comment_content . '</p>
                    </div>';
            }
        } else {
            echo '<div class="comment-display">No comments found.</div>';
        }

        echo '
                    <form action="../comment_submit.php" method="POST">
                        <input type="hidden" name="blog_id" value="' . $blog_Id . '">
                        <textarea class="comment" name="comment">Type your comment here.</textarea>
                        <br>
                        <input type="submit" name="submit" value="Send">
                    </form>
                </div>
            </div>
        </body>';
    } else {
        echo "Blog post not found.";
    }
} else {
    echo "Invalid URL. Please provide a blog post ID.";
}
include 'footer.php';
?>

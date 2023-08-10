<?php
  include 'headers.php';
?>
 <!--Header end //-->

 <section class="content-main">

      <div class="content-left">
        <h6 style="font-family: vivaldi;">Recent Blogs</h6>
        <h1>Our Blogs</h1>
      </div>
  </section>
  

    <!--Popular Blog Start  //-->
    <section class="popular-blog-main">
      <div class="wrapper">

  <div class="popular-text">
    <h6>From The Blog Post</h6>
    <h3>Latest Blogs and Articles</h3>
    <p>Here are the blogs that have been posted by the users.</p>
  </div>
    
<section class="columns">
  
<?php
require "../connection.php";
$sql = "SELECT * FROM blog WHERE Available = 'approved'"; 
$result = $con->query($sql);
$count = 0;

if ($result->num_rows > 0) {
    echo '<div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px;">'; 

    while ($row = $result->fetch_assoc()) {
        $blog_id = $row["Blog_ID"];
        $pic = $row["Image"];
        $content = $row["Content"];
        $content = substr($content, 0, 50);
        $author = $row["Author"];
        $title = $row["Title"];

        $pic_data_uri = base64_encode($pic);

        echo '
            <div class="column" style="height: 438px;">
                <img src="data:image/jpeg;base64,' . $pic_data_uri . '" class="column-img" style="height: 250px;">
                <div class="column-text">
                    <h2>' . $title . '</h2>
                    <h5>' . $author . '</h5>
                    <p>' . $content . '</p>
                    <div class="btn-lea"> <a href="blog.php?id=' . $blog_id . '" class="btn-lea">Read More &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                </div>
            </div>';

        $count++;
        if ($count % 3 === 0) {
            echo '</div><div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px;">'; 
        }
    }

    echo '</div>'; 
} else {
    echo "No approved blog entries found.";
}
?>


</section>
 <footer>

    
  </footer>
</div>
    </section>
    <!--Popular Blog End  //-->
  
    <!--Footer  start //--> 
    <?php
  include 'footer.php';
?> 
    <!--Footer end //-->

</body>
</html>
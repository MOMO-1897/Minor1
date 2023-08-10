<?php
  include 'headers.php';
?>
 <!--Header end //-->
  <!--banner start //-->
  <div class="bigthing">
    <div class="bigthing-text">
      <h2>Explore Beautiful Places</h2>
      <p>Explore beautiful places and beautiful stories through Neplore.<br>
        Visit our Blog section to explore more travel stories.</p>
        <a href="about_us.php" class="btn-learn">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
      


    
  </div>
    <!--banner end //-->

    <!--About Content Start //-->
    <section class="about-content-main">
    <div class="about-content">
      <div class="about about-content-left">
        <h6>YOUR GOTO TRAVEL BLOG WEBSITE</h6>
        <h1><b>Welcome To Neplore</b></h1>
        <p>Welcome to Neplore, where we embark on a thrilling journey across Nepal,<br>
          exploring breathtaking destinations, immersing ourselves in diverse
          cultures,<br> and creating unforgettable memories along the way.
          Whether<br> you're a seasoned traveler or a dreamer longing to discover new horizons, <br>this blog is your passport to a world of wanderlust.<br><br>
Through vivid storytelling and captivating photographs, we aim to inspire<br> and guide you as you plan your next adventure. But our blog isn't just<br> about the destinations; it's about the transformative power of travel. </p>
<br>
<br>
        <a href="about_us.php" class="btn-learn">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
      <div class="about about-content-mid"><img src="../images/mid.png" class="about-content-pic1">
      </div>
    </div>
    </section>
    <!--About Content End //-->

    <!--Journey Start //-->
    <section class="journey-content-main">
      <div class="journey-content-left">
      </div>
      <div class="journey-content-right"><h6>Exiting Journey</h6>
        <h3>Join The Journey With Us </h3>
        <p>Join The Journey with Neplore And Share Your Exiting Travel Stories Sign Up with a Neplore Account Now.</p>
<br>
       <center> <a href="SignIn.php" class="btn-learn">Signup Now<i class="fa fa-arrow-right" aria-hidden="true"></i></a></center></div>
    </section>
    <!--Journey End //-->

    <!--Popular Blog Start  //-->
    <section class="popular-blog-main">
      <div class="wrapper">

  <div class="popular-text">
    <h6>From The Blog Post</h6>
    <h3>Best Blogs And Articles</h3>
    <p>Here are some popular blogs and articles posted by users.<br>
    Explore tons of recent blogs by clicking Explore More.</p>
  </div>
    
<section class="columns">
  
<?php
require "../connection.php";

$sql = "SELECT * FROM blog WHERE Available = 'approved'";
$result = $con->query($sql);
$count=1;
if ($result->num_rows > 0) {
    echo '<div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px;">'; 

    while ($row = $result->fetch_assoc()) {
        $blog_id = $row["Blog_ID"];
        $pic = $row["Image"];
        $content = $row["Content"];
        $content = substr($content, 0, 50);
        $user_ID = $row["User_ID"];
        $date = $row["added_date"];
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
            if($count==4)
            {
              break;
            }
    }

    echo '</div>'; 
} else {
    echo "No approved blog entries found.";
}
?>


</section>
 <footer>

    <center class="btn-blog"> <a href="about_us.php" class="btn-learn" style="display: inline-block;margin-bottom:30px ;">Explore More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></center>
  </footer>
</div>
    </section>
    <!--Popular Blog End  //-->
    <!--Gallery Start  //-->


    <div class="Gallery" >
      <div class="Gallery-main">
        <div class="journey-content-right gallery-right" style="background-color: white;">
          <div class="shadow" style="background-color: white;">
          <h6>Exclusive Photos</h6>
          <h3>Our Blog Photos </h3>
          <p>A visual odyssey that transports you to the most captivating 
corners of Nepal. We invite you to embark on our visual journey</p>
          
  <br>
         <center><a href="view_blog.php" class="btn-learn">Explore More &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></center>
        </div>
      </div>
        
      
;
      <div class="gallery-image">
        <img src="../images/home-gallery.jpg">
      </div>
    </div>
  </div>
     <!--Gallery Start  //-->
    <!--Footer  start //--> 
    <?php
  include 'footer.php';
?>    
    <!--Footer end //-->

</body>
</html>
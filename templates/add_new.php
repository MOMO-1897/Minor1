<?php
  include 'headers.php';
?>
<link rel="stylesheet" href="../css/contact_css.css">
    <div class="about-us-main"style=" margin: auto;
  width: 50%;
  padding: 10px;">
      <form action="add_blog.php" method="POST" enctype="multipart/form-data">
         <h2 style="font-family:'Poppins';font-size:40pt;">Add New Blog</h2>
        <input type="text" id="title" name="blogtitle" placeholder="Add Title" required>
        <br>
        <br>
         <textarea type="text" id="content" rows=12 name="blogcontent" placeholder="Add Content" required> 
         </textarea> 
         <br>
         <br>
           <br>
           <br>
           <input type="file" id="myFile" name="filename">
            <input type="submit" name="blogsubmit">
         </form>

    </div>

    
<?php
  include 'footer.php';
?>    
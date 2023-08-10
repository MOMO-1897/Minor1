<?php
  include 'headers.php';
?>
<link rel="stylesheet" href="../css/contact_css.css">
    <div class="about-us-main"style=" margin: auto;
  width: 50%;
  padding: 10px;">
      <form action="../editprofile.php" method="POST">
         <h2 style="font-family:'Poppins';font-size:40pt;">EDIT USER INFORMATION</h2>
        <input type="text" id="name" name="name" placeholder="New Name" required>
        <br>
        <br>
         <input type="text" id="email" name="email" placeholder="New E-mail" required>
         <br>
         <br>
           <input type="password" id="password" name="password" placeholder="password" class="pass" required>
           <br>
           <br>
           <input type="password" id="cpassword" name="cpassword" placeholder="password" class="pass" required>
           <br>
           <br>
           <button type="submit" class="btn-learn-contact" name="edit">Submit</button>
         </form>

    </div>
<?php
  include 'footer.php';
?>    
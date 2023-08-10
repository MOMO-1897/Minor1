<?php
  include 'headers.php';
?>
  <link rel="stylesheet" href="../css/contact_css.css">
  <section class="name-2">
    <div class="about-us-image"><img src="../images/contactt.png">

    </div>
    <div class="about-us-main">
      <form action="../contact_us.php" method="POST">
        <h6 style="font-family: 'vivaldi';">Contact Us</h6>
         <h2 style="font-family:'Poppins';font-size:40pt;">Send Us A Message</h2>
        <input type="text" id="uname" name="username" placeholder="Your Name" required>
        <br>
        <br>
         <input type="text" id="email" name="email" placeholder="Your E-mail" required>
         <br>
         <br>
           <input type="text" id="subject" name="subject" placeholder="Subject" required>
           <br>
           <br>
           <textarea id="message" name="message" placeholder="Message" style="height:200px; margin-bottom: 25px;" required></textarea>
           <br>
           <button type="submit" class="btn-learn-contact" name="Contact">Submit</button>
         </form>

    </div>

  </section>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.593381313702!2d85.33539907414608!3d27.698959725863734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199940d81663%3A0xaf36b9b58903050f!2sApex%20College!5e0!3m2!1sen!2snp!4v1691089473354!5m2!1sen!2snp" width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
<?php
include 'footer.php';
?>
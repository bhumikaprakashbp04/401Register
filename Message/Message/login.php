


<?php include 'header.php';?>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          login page 
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="logindb" method="post">
            
            <input type="text" id="uname" name="uname" placeholder="username" required> 
            
            <input type="password" id="pass" name="pass" placeholder="password" required>
            <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
            <script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');

  togglePassword.addEventListener('click', function (e) {
    // Toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
</script>


            
            <input type="submit" value="LOGIN" name="login">
        </form>
               
              
              
              
            
              <center>  <a href="register.php">Click here to register</a></center>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  



<?php include 'footer.php';?> 
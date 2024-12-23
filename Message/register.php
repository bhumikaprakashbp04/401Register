<?php include 'header.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

</head>
<body>
    <center>
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Register Page
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
        <form action="reg" method="POST">
            <label for="uname"></label>
            <div>
                <input type="text" id="uname" name="uname" placeholder="Your name" required>
              </div>
            <label for="num"></label>
            <div>
                <input type="number" id="num" name="num" placeholder="Your number" required>
              </div>
            <label for="mail"></label>
            <div>
                <input type="email" id="mail" name="mail" placeholder="Your email" required>
              </div>
            <label for="pass"></label>
            <div>
                <input type="password" id="pass" name="pass" placeholder="Your password" required>
              </div>
            <label for="password"></label>
            <div>
                <input type="password" id="password" name="password" placeholder="confirm password" required>
              </div><br>
            <input type="submit" value="REGISTER" name="reg">
        </form>
    </div>
    </div>
    </div>
    </div>
    </section>
    </center>
</body>
</html>
<?php include 'footer.php';?> 




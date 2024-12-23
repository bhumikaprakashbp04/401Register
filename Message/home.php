 <?php   
 {
        session_start();
        if (isset($_SESSION['uname']) && isset($_SESSION['password']))
    {
       $uname=$_SESSION['uname'];
    }
    else
    {
       header("location:index");   
    }
    }
    ?>
<?php include 'header2.php'; ?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Search</title>
</head>
<body>
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>EMAIL SEARCH</h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="homedb.php" method="post">
              
              <input type="text" id="uname" name="uname" placeholder="Username" required>
              <input type="submit" value="SEARCH" name="homedb">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

<?php include 'footer.php'; ?>

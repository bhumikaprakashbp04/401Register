

<?php include 'header3.php'; ?>
            
        <?php
        $id = $_GET['id'];
        include 'dbconfig.php';
        $sql="SELECT * FROM `register` WHERE `uname`=$id";
        //echo "'$id'";
        
        ?>
<html lang="en">
    <head>
          <section class="contact_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
      </div>
                <div class="row">
                  <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="form_container">
                      <form action="emaildb" method="POST">
                          
                         <input type="text" id="uname" name="name" placeholder="username"value="<?php echo $id;?>" required><br>
                         <input type="text" id="msg" class="message-box" name="message" placeholder="Message" required><br>
                         <input type="number" id="key" name="key" placeholder="key" required><br>
                         <input type="submit" value="SEND" name="send">
                          </form>
                      
                    </div>
                  </div>
                </div>
            </div>
            </section>
</head> 
</html>
<?php include 'footer.php'; ?>

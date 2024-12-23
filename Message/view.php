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

<?php
$id = $_GET['id'];
include 'dbconfig.php';
$sql = "SELECT * FROM `king` WHERE `id`='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $message = $row['message'];
                    //echo "$username , $message";
                    
                    
                }
            }

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
                      <form action="viewdb" method="POST">
                          
                        <h3>  
                         <input type="text" id="uname" name="name" placeholder="sender name" value="<?php echo $username;?>" required><br>
                         </h3>
                         <input type="text" id="msg" class="message-box" name="message" placeholder="message" value="<?php echo $message ?>" required><br>
                         <input type="number" id="key" name="key" placeholder="key" required><br>
                         <input type="submit" value="VIEW" name="send">
                         
                         
                         
                         
                        
                         
                         
                          </form>
                      
                    </div>
                  </div>
                </div>
            </div>
            </section>
</head> 
</html>

<?php include 'footer.php'; ?>
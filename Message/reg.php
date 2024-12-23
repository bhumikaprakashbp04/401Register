
<?php
 if(isset($_POST['reg']))
 {
     $name=$_POST['uname'];
     $phno=$_POST['num'];
     $email=$_POST['mail'];
     $pass=$_POST['pass'];
     $cpass=$_POST['password'];
     //echo "$name,$phno,$email,$pass";
     
     if($pass==$cpass)
     {
         $conn=new mysqli('localhost','root','','reg');
         $hash= password_hash($pass,PASSWORD_DEFAULT);
         $sql="INSERT INTO `register`(`username`, `number`, `email`, `password`) VALUES ('$name','$phno','$email','$hash')";
     //    echo "INSERT INTO `register`(`username`, `number`, `email`, `password`) VALUES ('$name','$phno','$email','$pass')";
                 if(mysqli_query($conn,$sql))
                 {          
                   
                     echo "<script>alert(\"REGISTRED SUCSSFULLY\");</script>";
                     echo "<META http-equiv=\"refresh\"content=\"0;login\">";
                     
                 }
                 
                 else
                {
                echo "<script >alert(\" REGISTRED UNSUCSSFULLY\");</script>";
                echo "<META http-equiv=\"refresh\"content=\"0;register\">";
         
                }
 }
 else 
     {
      echo "<script >alert(\" REGISTRED UNSUCSSFULLY\");</script>";
      echo "<META http-equiv=\"refresh\"content=\"0;register\">";
     
      }
     
    
     
 }

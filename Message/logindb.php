
<?php
        if(isset($_POST['login']))
        {
            $uname=$_POST['uname'];
            $password=$_POST['pass'];
            //echo "$password $uname";
            include 'dbconfig.php';
            $sql="SELECT * FROM `register` WHERE `email`='$uname'";
            //echo "SELECT * FROM `register` WHERE `email`='$uname'";
            
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
             while($row=$result->fetch_assoc())
            {
                 $hashpassword=$row['password'];
                 if(password_verify($password,$hashpassword))
                 {
                     session_start();
                     $_SESSION['uname']=$uname;
                     $_SESSION['password']=$hashpassword;
                   
                     
                     echo "<META http-equiv=\"refresh\" content=\"0;home\">";
                      // echo "<META http-equiv=\"refresh\" content=\"0;emaildb?id=$uname\">";
                 }
                 else {
                     echo "<script>alert(\"USERNAME PASSWORD DOESNOT MATCH \");</script>";
                     echo "<META http-equiv=\"refresh\"content=\"0;login\">";
                 }
                 
            }
           }
             else
             {
               echo "<script>alert(\"USERNAME PASSWORD DOESNOT MATCH \");</script>";
               echo "<META http-equiv=\"refresh\"content=\"0;login\">";
             }
       }
        else
        {
            header("location:index");
        }
        ?>
   
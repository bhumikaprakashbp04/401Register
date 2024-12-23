<?php
        if(isset($_POST['homedb']))
        {
           $uname=$_POST['uname'];
            //echo "$uname";
            
            include 'dbconfig.php';
            $sql="SELECT * FROM `register` WHERE `email`='$uname'";
            //echo "SELECT * FROM `register` WHERE `email`='$uname'";
            
            $result=$conn->query($sql);
            if($result->num_rows>0)
           {
               
               echo "<META http-equiv=\"refresh\"content=\"0;email?id=$uname\">";
               
           }
             else
             {
               echo "<script>alert(\"EMAIL IS NOT FOUND\");</script>";
               echo "<META http-equiv=\"refresh\"content=\"0;home\">";
             }
       }
        else
        {
            header("location:home");
        }
        ?>

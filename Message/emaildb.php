


<?php
    {
    session_start();
    $uname=$_SESSION['uname'];
   
    $rname=$_POST['name'];
    $message=$_POST['message'];
    $key=$_POST['key'];
     
     include 'dbconfig.php';
     //Encryption function
    function encryptData($data, $key)
     {
        $method = 'aes-256-cbc';
        $ivLength = openssl_cipher_iv_length($method);
        $iv = openssl_random_pseudo_bytes($ivLength);
        $encrypted = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
        $encrypted = base64_encode($iv . $encrypted);
        return $encrypted;
     }

           $data = $message; // Data to encrypt

         $encryptedData = encryptData($data, $key);
         //echo "Encrypted data: $encryptedData\n";
     $sql="INSERT INTO `king`(`username`, `rname`, `message`) VALUES ('$uname','$rname','$encryptedData')";
     //echo "INSERT INTO `king`(`username`, `rname`, `message`) VALUES ('$name','$uname','$message')";
       
         
     if(mysqli_query($conn,$sql))
         {          
          echo "<script>alert(\"MESSAGE SENT\");</script>";
          echo "<META http-equiv=\"refresh\"content=\"0;home\">";
         }
                 
     else
         {
          echo "<script >alert(\"MESSAGE NOT SENT\");</script>";
          echo "<META http-equiv=\"refresh\"content=\"0;email\">";
         }
 }
 
 
 ?>
             
    


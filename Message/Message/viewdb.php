<?php include "header3.php" ?>

<?php
        if(isset($_POST['send']))
        {
            $username = $_POST['name'];
            $message = $_POST['message'];
            $key = $_POST['key'];
           // echo "$username $message $key";
        
     
     
     
// Decryption function
function decryptData($data, $key) {
    $method = 'aes-256-cbc';
    $data = base64_decode($data);
    $ivLength = openssl_cipher_iv_length($method);
    $iv = substr($data, 0, $ivLength);
    $encrypted = substr($data, $ivLength);
    $decrypted = openssl_decrypt($encrypted, $method, $key, OPENSSL_RAW_DATA, $iv);
    return $decrypted;
}

$key = $key; // Change this to your secret key
$data = $message; // Encrypted data received from encryption process

$decryptedData = decryptData($data, $key);

//echo "Decrypted data: $decryptedData\n";
//echo "$message";

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
                      <form>
                          
                         
                          <h3><input type="text" id="uname" name="name" placeholder="sender name"value="<?php echo $username;?>" required><br>
                              </h3>
                         <input type="text" id="msg" class="message-box" name="message" placeholder="Message" value="<?php echo " $decryptedData\n";;?>" required><br>


                          </form>
                      
                    </div>
                  </div>
                </div>
            </div>
            </section>
</head> 
</html><br>




<?php include "footer.php" ?>
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
<?php include 'header3.php'; ?> 
   
      
<html lang="en">
    <center>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INBOX</title>
    </center>
    <style>
 
       
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f5f5f5;
        }
        
        
    </style>
    
    
</head>
<body>
    <center>
    <div class="container">
        <h1>INBOX</h1>
        <table>
            <tr>
                
                <th>Sender Name</th>
                <th>Message</th>                
                <th>Actions</th>
            </tr>
            <?php
            include 'dbconfig.php';
            $sql = "SELECT * FROM `king` WHERE `rname`='$uname'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $message = $row['message'];
                   
                    echo "<tr>
                            
                            <td>$username</td>
                            <td>$message</td>
                            <td>
                                <a href='view?id=$id'>view/</a>
                                <a href='viewdb?id=$id'></a>
                                <a href='delete?id=$id'>delete</a>
                               
                              
                            </td>
                            
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found.</td></tr>";
            }
            ?>
        </table>
       
    </div>
    </center>
</body>
</html><br><br>












<?php include"footer.php";  ?>




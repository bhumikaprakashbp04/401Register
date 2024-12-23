<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$id = $_GET['id'];
include 'dbconfig.php';
//echo "$id";
$sql="DELETE FROM `king` WHERE `id`='$id'"; 
if(mysqli_query($conn,$sql))
{
    
    echo "<script>alert(\"DELETED\");</script>";
    echo "<META http-equiv=\"refresh\"content=\"0;receive\">";
}
else
{
    echo "<script >alert(\"NOT DELETED\");</script>";
    echo "<META http-equiv=\"refresh\" content=\"0;receive\">";
}
?>

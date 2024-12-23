<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    $_SESSION['uname']=null;
    $_SESSION['pass']=null;
    header("location:login");
?>

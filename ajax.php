<?php
    //include ("../../inc/config.inc.php");
    // CLIENT INFORMATION

    $fname        = htmlspecialchars(trim($_POST['fname']));

    $lname        = htmlspecialchars(trim($_POST['lname']));

    $addClient  = "INSERT INTO clients (fname,lname) VALUES ('$fname','$lname')";

    mysql_query($addClient) or die(mysql_error());

?>
<?php
    $dbuser="root";
    $dbname="exam";
    $password="";

    //create connection
    $conn=mysqli_connect("localhost",$dbuser,$password,$dbname);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  
    
?>
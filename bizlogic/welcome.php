<?php
 //connection create
 include("./includes/connection.php");
 //create the session
 session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        exit;
    }else{
        $user=$_SESSION['username'];
    }

    
    // Prepare a select statement
    $sql="SELECT name,username,email from user";
 
    $result=mysqli_query($conn,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($result)){
        $data[]=$row;
    }


    echo mysqli_error($conn);
    echo json_encode($data);

?>
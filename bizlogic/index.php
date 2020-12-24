<?php
    //connection create
    include("./includes/connection.php");
    //create session
    session_start();

    //get data
    if($_SERVER['REQUEST_METHOD'] == "POST"){
   

        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
            $json=$username_err;
        } else{
            $username = trim($_POST["username"]);
        }
    
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
            $json=$password_err;
        } else{
            //encrypt the password with md5
            $pass = md5(trim($_POST["password"]));
        }
    
        // Validate credentials
        if(empty($username_err) && empty($password_err)){

            // Prepare a select statement
            $sql="SELECT * FROM user where username='$username' AND password='$pass'";
    
            $result=mysqli_query($conn,$sql);
    
            if(mysqli_num_rows($result)>0){
                $row = mysqli_fetch_array($result);
                $json=$row['username']; 
                $_SESSION["loggedin"] = true;   
                $_SESSION["username"] = $row['username'];
            }else{
            $json = "Username or Password Incorrect!!";
            }
        }
    
    }else{
            $json = array("status" => 0, "msg" => "Request method not accepted");
    }
    
    
    
    @mysqli_close($conn);
    header('Content-type: application/json');
    echo json_encode($json);
   

?>
<?php 
session_start(); 
include "conn.php";

if (isset($_POST['name']) && isset($_POST['num'])
    && isset($_POST['loc'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$num = validate($_POST['num']);

	$loc = validate($_POST['loc']);
	

	$user_data = 'name='. $name. '&name='. $name;


	if (empty($uname)) {
		header("Location: logun.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: logun.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: logun.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: logun.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: logun.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM apply WHERE user_name='$name' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: logun.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: logun.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: logun.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: logun.php");
	exit();
}
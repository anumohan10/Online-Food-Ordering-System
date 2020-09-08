<?php

$name = $_POST['name'];

$address = $_POST['add'];

$email = $_POST['email'];

$password = $_POST['pass'];



if(!empty($name) || !empty($address) || !empty($email) || !empty($password)) 
{
 $host = "35.224.76.162";
    
  $dbUsername = "anusree";
    
  $dbPassword = "1234";
    
  $dbname = "mystore";
    
	//create connection
    
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
  if(mysqli_connect_error()) 
	{
     
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

	}
 	else{
     
	$SELECT = "SELECT email From users1 Where email = ? Limit 1";
     
	$INSERT = "INSERT Into users1 (name, address, email, password) values(?, ?, ?, ?)";
     
	//Prepare statement
     
	$stmt = $conn->prepare($SELECT);
     
	$stmt->bind_param("s", $email);
     
	$stmt->execute();
 
        $stmt->bind_result($email);
     
	$stmt->store_result();
     
	$rnum = $stmt->num_rows;
     
	if($rnum==0){
      
	$stmt->close();
      
	$stmt = $conn->prepare($INSERT);
      
	$stmt->bind_param("ssss", $name, $address, $email, $password);
      
	$stmt->execute();
      
	echo "You have registered sucessfully";
     
	}else{
      
	echo "Someone already register using this email";
     
	}
     
	$stmt->close();
     
	$conn->close();
    
	}

} 
	else{
 
		echo "All field are required";
 
		die();

	}

?>



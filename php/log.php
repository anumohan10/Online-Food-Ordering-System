<?php
$hostname="35.224.76.162";
$username="anusree";
$password="1234";
$dbname="mystore";
$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error)
      echo "Connection Failed".$conn->connect_error;
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname=$_POST['email'];
    $password=$_POST['pass'];
 
 if(empty($uname))
 {
      echo "Email is empty<br>";
   }
  
  else
  {
$st=$conn->prepare("INSERT INTO loginform1 VALUES (?,?)");
$st->bind_param("ss",$uname,$password);
$st->execute();
$st->close();
$conn->close();
echo "You have successfully logged in!";
  }
} 
?>

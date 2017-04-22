<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$servername = "mysql.hostinger.in";
$username = "u177424340_root";
$password = "Raghav@01";
$database = "u177424340_code";
//create connection
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);

}
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO userdata(email,password,username) 
	                VALUES ('$email','$password','$username')";
if ($conn->query($sql) === TRUE) 
{
     session_start();
     $_SESSION["Name"] = $_POST["username"];
     $_SESSION["email"] = $_POST['email'];
$sql="INSERT INTO `image`(email) VALUES('$email')";
     $result = $conn->query($sql);
     $result=mysqli_query($conn,$sql);
    
     header('location:home.php');

} 
else 
{
	echo  "<script>alert(\"Email id already exists!!!!\")</script><br>"; 
	echo "<script>location.replace(\"index.php\")</script><br>";
    echo "<script>Error: </script>" . $sql . "<script><br></script>" . $conn->error;
}
}

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
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$folder = "img/";
$email=$_SESSION['email'];

move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);

$sql="UPDATE image SET ImageColumnName='".$_FILES['filep']['name']."' where email='$email' ";
$result = $conn->query($sql);
$result=mysqli_query($conn,$sql);

if($result) { 
    echo "<script>alert(\"Uploded\")</script><br>"; 
header("Location: home.php");
 }
else {

//Gives and error if its not
echo "<script>alert(\"sorry\")</script><br>";
header("Location: home.php");
}
}
}
?>

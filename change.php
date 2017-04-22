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
//include "log.php";
$email=$_SESSION['email'];
$old_pwd=$_POST['old'];
$new_pwd=$_POST['new'];
$cnew_pwd=$_POST['cnew'];
$sql="SELECT * from userdata where email='$email' ";
$result = $conn->query($sql);
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
  {
  if(!strcmp($old_pwd,$row['password'])==0)
  { 
	echo  "<script>alert(\"Wrong Old password\")</script><br>"; 
//	echo "<script>location.replace(\"profile.php?option=2\")</script><br>";
  }
 else if(!strcmp($new_pwd,$cnew_pwd)==0)
  {
    echo  "<script>alert(\"Passwords dont match\")</script><br>"; 
//    echo "<script>location.replace(\"profile.php?option=2\")</script><br>";
  }
 else
 {
//$sql=mysqli_query("UPDATE loveeconnect SET password = '$new_pwd' WHERE email ='$email'");
$sql="UPDATE userdata SET password = '$new_pwd' WHERE email ='$email'";
$result = $conn->query($sql);
$result=mysqli_query($conn,$sql);
echo "<script>alert(\"password successfully changed\")</script><br>";
session_unset();
session_destroy();
echo "<script>location.replace(\"index.php\")</script><br>";

break; 
}
}
}
?>
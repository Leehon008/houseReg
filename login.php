<?php

include "dbCon.php";

session_start();
if(isset($_POST['submit_login']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($conn,$_POST['login_name']); 
$password=md5(mysqli_real_escape_string($conn,$_POST['login_pwd'])); // Encrypted Password
$sql="SELECT * FROM admin WHERE Uname='$username' and Upass='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
//die($sql." the count is ".$count);
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
	$row = mysqli_fetch_assoc($result);
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["name"] = $row["Uname"];
		$_SESSION['logged']=1;
			echo "<script>alert('wagona');</script>";
}
header("location: home.php");


}

?>
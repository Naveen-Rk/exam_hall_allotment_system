<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

</head>
<body>
<?php
 require('connect.inc.php');
 session_start();
 $ip_addr=$_SERVER['REMOTE_ADDR'];
$q="INSERT INTO visitors VALUES('$ip_addr')";

mysqli_query($conn,$q);
 // If form submitted, insert values into the database.
 //echo $_POST['username'];
 if (isset($_POST['username'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysqli_real_escape_string($conn,$username);
 $password = stripslashes($password);
 $password = mysqli_real_escape_string($conn,$password);
 $query = "SELECT id FROM `users` WHERE username='$username' and password='$password'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);
 if($rows==1){
	 $user_id=mysqli_fetch_assoc($result);
 $_SESSION['user_id'] = $user_id['id'];
 header("Location: core.php"); // Redirect user to index.php
 }else{
 header("Location: wrong.html");
 }
 }
?>

</body>
</html>



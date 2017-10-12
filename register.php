<!DOCTYPE html>
<html>
<!--<style>
body{ background:#e6f7ff ;
      color:black;

}
form{
      position:fixed;
      top:200px;
      left:330px;
}
</style>-->
<head>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>
<!--<h1 align="center">EXAM SEATING ARRANGEMENT</h1>-->
<?php
echo "register.php";
 require('connect.inc.php');
 
 // If form submitted, insert values into the database.
 //echo "connected";
 if (isset($_POST['username'])){
 //echo "all set";
 $id=$_POST['id'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysqli_real_escape_string($conn,$username);
 $email = stripslashes($email);
 $email = mysqli_real_escape_string($conn,$email);
 $password = stripslashes($password);
 $password = mysqli_real_escape_string($conn,$password);
 echo $query = "INSERT INTO users (id,field,username,password) VALUES('$id','$email','$username','$password')";
 $result = mysqli_query($conn,$query);
 if($result){
 header("Location: success.html");
 //echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.html'>Login</a></div>";
 }
 }
 
 else{
?>

<?php } ?>


</body>
</html>
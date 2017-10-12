<?php
include('connect.inc.php');
//include 'nlogin.html';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$ref=$_SERVER['HTTP_REFERER'];


function loggedin()
{ //echo "to check";
  if(isset($_SESSION['user_id']))
          return true;
  else return false;

 }
 function getuser($field)
 { //echo $field;
   //echo "to get username";
   global $conn;
   $id=$_SESSION['user_id'];
   //echo $id;
  $query = "SELECT field FROM `users` WHERE id='$id'";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_num_rows($result);
 if($rows==1){
 $fi=mysqli_fetch_assoc($result);
 $res=$fi['field'];
 return $res;
 }
 }



  ?>
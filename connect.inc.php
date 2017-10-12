<?php
$conn_error='could not connect';
	define('conn_SERVER', 'localhost');
   define('conn_USERNAME', 'root');
   define('conn_PASSWORD', '');
   define('conn_DATABASE','ipp');
 $conn = mysqli_connect(conn_SERVER,conn_USERNAME,conn_PASSWORD,conn_DATABASE);
if(!$conn){
die($conn_error);	
}



?>
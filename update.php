<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>View:: Seating Arragement</title>
<meta charset="uft=8"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />
<style>
.con{
	padding-top:8px;
	padding-left:100px;
	padding-right:150px;
	padding-bottom:1000px;
	height:550px;
	background-image:url(images/brown.png);
	background-position:center top;
	background-repeat:repeat-y;
	width:100%;
	height:700px;
	color:white;
	background-attachment:scroll;
	
}
</style>
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html">Seating Arrangement </a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 
						<li class="hvr-sweep-to-bottom"><a href="roomdetail.html">Room Arrangement</a></li>
						<li class="hvr-sweep-to-bottom"><a href="update.html" class="scroll">Update Room</a></li>
						<li class="hvr-sweep-to-bottom"><a href="view.html" class="scroll">View Room</a></li>
						<li class="hvr-sweep-to-bottom"><a href="logout.php" class="scroll">Logout</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>


<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1>Update Room</h1>
	
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
 
      
	  
	  
      
      <!--<div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default btn-info">Submit</button>
        </div>
   -->
    </form>
  </div>
 
	<!--//forms-->
	</div>

<?php
require "connect.inc.php";
include "stylee.css";
echo "<style>table{ border:red;} table,th,td{ border:1px solid black;} th,td{ text-align:center; width:100px; height:50px;}</style>";
$r=$_POST['roomno'];
$o=$_POST['or'];
$n=$_POST['nr'];     $i=1;
$q1="SELECT*FROM room$r";
$q2=@mysqli_query($conn,$q1) or die(mysqli_error($conn));
$rows=mysqli_num_rows($q2);
$cols=mysqli_num_fields($q2);
while($i<$cols)
{ $q="UPDATE  room$r SET col$i=$n WHERE col$i=$o";
  $ans=mysqli_query($conn,$q);
  $i++;
}
$rt="SELECT*FROM room$r";
$result = @mysqli_query($conn,$rt) or die(mysqli_error($conn));
echo "<br>";
echo "ROOM".$r;

if($cols==9)
{
echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
<th>col6</th>
<th>col7</th>
<th>col8</th>
</tr>";
$t=0;
 while($t!=$rows)
 {  $row = mysqli_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";
echo "<td>" . $row['col6'] . "</td>";
echo "<td>" . $row['col7'] . "</td>";
echo "<td>" . $row['col8'] . "</td>";
echo "</tr>";
$t++;
}
}

if($cols==8)
{
echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
<th>col6</th>
<th>col7</th>
</tr>";
$t=0;
 while($t!=$rows)
 {  $row = mysqli_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";
echo "<td>" . $row['col6'] . "</td>";
echo "<td>" . $row['col7'] . "</td>";

echo "</tr>";
$t++;
}
}

if($cols==7)
{
echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
<th>col6</th>
</tr>";
$t=0;
 while($t!=$rows)
 {  $row = mysqli_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";
echo "<td>" . $row['col6'] . "</td>";

echo "</tr>";
$t++;
}
}
if($cols==6)
{
echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
</tr>";
$t=0;

  while($t!=$rows)
 {  $row = mysqli_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";
//echo "<td>" . $row['col6'] . "</td>";
echo "</tr>";
$t++;
}
}
if($cols==5)
{
echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
</tr>";
$t=0;

   while($t!=$rows)
 {  $row = mysqli_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
//echo "<td>" . $row['col5'] . "</td>";
//echo "<td>" . $row['col6'] . "</td>";
echo "</tr>";
$t++;
}
}
echo "</table>";



?>

	</div>
</div>
</div></div>

</body>
</html>

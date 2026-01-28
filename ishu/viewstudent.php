<?php
session_start(); 
      include "database.php";
function countrecord($sql,$db)
{
	$res=$db->query($sql);
	return $res->num_rows;
}
if(!isset($_SESSION["AID"]))
{
	header("location:alogin.php");
}



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
	<div id="container">
	<div id="header">
	<h1>E-library management System</h1>
	</div>
	<div id="wrapper">
	<h3 id="heading">view students details</h3>
	<div id="center">
<ul class="record">
   <li>Total students  :<?php echo countrecord("select * from student",$db);?></li>
   <li>Total books     :<?php echo countrecord("select * from book",$db);?></li>
   <li>Total request   :<?php echo countrecord("select * from request",$db);?></li>
   <li>Total comments  :<?php echo countrecord("select * from comment",$db);?></li>
</ul>
	</div>
	</div>
	<div id="navi">
	<?php
	include "admin sidebar.php";
	?>
    </div>
    <div id="footer">
	<p>copyright &copy; ISHU 2025 pro</p></div>
	</body>
	<title>abi</title>
</html>

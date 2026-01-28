<?php
session_start(); 
      include "database.php";
if(!isset($_SESSION["ID"]))
{
	header("location:ulogin.php");
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
	<h3 id="heading">welcome<?php echo $_SESSION["NAME"];?></h3>
	</div>

	<div id="navi">
	<?php
	include "user sidebar.php";
	?>
    </div>
    <div id="footer">
	<div><p>copyright &copy; ISHU 2025 pro</p></div>
	</body>
	<title>abi</title>
</html>

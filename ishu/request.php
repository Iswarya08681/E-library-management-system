<?php
session_start(); 
      include "database.php";
if(!isset($_SESSION["ID"]))
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
	<h3 id="heading">New Book Request</h3>
	<div id="center">
	<?php
	if(isset($_POST["submit"]))
	{
	      $sql="insert into request(ID,MES,LOGS)values ({$_SESSION["ID"]},'{$_POST["mess"]}',now())";
	     $db->query($sql);
		 echo "<p class='success'>Request sent to admin</p>";
	}
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	 <label>MESSAGE</label>
	 <textarea required name="mess"></textarea>
	 <button type="submit" name="submit">SEND MESSAGE</button>
	 </form>
	</div>
	</div>
	<div id="navi">
	<?php
	include "user sidebar.php";
	?>
    </div>
    <div id="footer">
	<p>copyright &copy; ISHU 2025 pro</p></div>
	</div>
	</body>
	<title>abi</title>
</html>

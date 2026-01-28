<?php
session_start();
      include "database.php";
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
	<h3 id="heading">ADMIN LOGIN HERE</h3>
	<div id="center">
	<?php
	if (isset($_POST["submit"]))
	{
		 $sql="SELECT * FROM admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
		 $res=$db->query($sql);
		 if($res->num_rows>0)
		 {
			 $row=$res->fetch_assoc();
			 $_SESSION["AID"]=$row["AID"];
			 $_SESSION["ANAME"]=$row["ANAME"];
			 header("location:ahome.php");
		 }
		 else
		 {
			
			 echo "<p class='error'>invalid user detail</p>";
		 }
		 }
	?>
		
	<form action="alogin.php" method="post">
	      <label>USER NAME</label>
	      <input type="text" name="aname" required>
	      <label>password</label>
	<input type="password" name="apass" required>
	<button type="submit" name="submit">LOGIN NOW</button>
	</form>
	</div>
	</div>
	<div id="navi">
	<?php
	include "sidebar.php";
	?>
    </div>
    <div id="footer">
	<p>copyright &copy; ISHU 2025 pro</p></div>
	</body>
	<title>abi</title>
</html>
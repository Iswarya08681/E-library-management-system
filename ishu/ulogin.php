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
	<h3 id="heading">USER LOGIN HERE</h3>
	<div id="center">
	<?php
	if (isset($_POST["submit"]))
	{
		 $sql="SELECT * FROM student where NAME='{$_POST["name"]}' and PASS='{$_POST["pass"]}'";
		 $res=$db->query($sql);
		 if($res->num_rows>0)
		 {
			 $row=$res->fetch_assoc();
			 $_SESSION["ID"]=$row["ID"];
			 $_SESSION["NAME"]=$row["NAME"];
			 header("location:uhome.php");
		 }
		 else
		 {
			
			 echo "<p class='error'>invalid user detail</p>";
		 }
		 }
     ?>
	
		
	<form action="ulogin.php" method="post">
	      <label>NAME</label>
	      <input type="text" name="name" required>
	      <label>password</label>
	<input type="password" name="pass" required>
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
	</div>
	</body>
	<title>abi</title>
</html>
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
	<h3 id="heading">change password</h3>
	<div id="center">
	<?php
	if(isset($_POST["submit"]))
	{
	     $sql="SELECT * from student WHERE PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
	     $res=$db->query($sql);
		 if($res->num_rows>0)
		 {
		 $s="update student set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
		 $db->query($s);
		 echo "<p class='success'>passwod changed successfully</p>";
		 }
		 else
		 {
			 echo "<p class='error'>invalid password</p>";
	}
	}
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	 <label>old password</label>
	 <input type="pasword"name="opass" required>
	 <label>New password</label>
	 <input type="password"name="npass" required>
	 <button type="submit" name="submit">update password</button>
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

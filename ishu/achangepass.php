<?php
session_start(); 
      include "database.php";
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
	<h3 id="heading">change password</h3>
	<div id="center">
	<?php
	if(isset($_POST["submit"]))
	{
	     $sql="SELECT * from admin WHERE APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}'";
	     $res=$db->query($sql);
		 if($res->num_rows>0)
		 {
		 $s="update admin set APASS='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
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
	include "admin sidebar.php";
	?>
    </div>
    <div id="footer">
	<p>copyright &copy; ISHU 2025 pro</p></div>
	</div>
	</body>
	<title>abi</title>
</html>

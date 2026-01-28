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
	<h3 id="heading">new user registration</h3>
	<div id="center">
	<?php
	if(isset($_POST["submit"]))
	{
			 $sql="insert into book(NAME,PASS,MAIL,DEP) values('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dep"]}')";
			 $db->query($sql);
			 echo "<p class='success'>user registration success</p>";
	}
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	 <label>Name</label>
	 <input type="text"name="name" required>
	 <label>Password</label>
	 <input type="password" name="pass" required>
	 <label>Email</label>
	 <input type="email"name="mail" required>
	 <select name="dep" required>
	 <option value="">Select</option>
	 <option value="CSE">CSE</option>
	 <option value="AIDS">AIDS</option>
	 <option value="MECH">MECH</option>
	 <option value="civil">CIVIL</option>
	 </select>
	 <button type="submit" name="submit">Register Now</button>
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
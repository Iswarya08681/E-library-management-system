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
	<h3 id="heading">upload new books</h3>
	<div id="center">
	<?php
	if(isset($_POST["submit"]))
	{
	     $target_dir="upload/";
		 $target_file=$target_dir.basename($_FILES["efile"]["name"]);
		 if( move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
		 {
			 $sql="insert into book(BTITLE,KEYWORDS,FILE) values('{$_POST["bname"]}','{$_POST["keys"]}','{$target_file}')";
			 $db->query($sql);
			 echo "<p class='success'>book uploaded successfully</p>";
		 }
		 else
		 {
			 echo "<p class='error'>Error in upload</p>";
	}
	}
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" >
	 <label>book title</label>
	 <input type="pasword"name="bname" required>
	 <label>keywords</label>
	 <textarea name="keys" required></textarea>
	 <label>upload file</label>
	 <input type="file" name="efile" required>
	 <button type="submit" name="submit">update books</button>
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
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
	<h3 id="heading">search books</h3>
	<div id="center">
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	 <label>Enter Book Name Or Keywords</label>
	 <input type="text" required name="name"></input>
	 <button type="submit" name="submit">Search Now</button>
	 </form>
	</div>
	<?php
	if(isset($_POST["submit"]))
	{
	  $sql="SELECT * FROM book where BTITLE like'%{$_POST["name"]}%' or keywords like '%{$_POST["name"]}%'";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			echo "<table>
			<tr>
			      <th>SNO</th>
			      <th>BOOK NAME</th>
			      <th>KEYWORDS</th>
			      <th>LOCATION</th>
				  <th>COMMENT</th>
			</tr>";
			     $i=0;
			while($row=$res->fetch_assoc())
			{
				$i++;
				echo"<tr>";
			    echo"<td>{$i}</td>";
			    echo"<td>{$row["BTITLE"]}</td>";
			    echo"<td>{$row["KEYWORDS"]}</td>"; 
			    echo"<td><a href='{$row["FILE"]}' target='_blank'>View</a></td>";
			    echo"<td><a href='comment.php?id={$row["BID"]}'>GO</a></td>";
				echo"</tr>";
			}
			     echo "</table>";
		}
		else
		{
			echo "<p class='error'> No books records found</p>";
		}
	}
	?>		
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
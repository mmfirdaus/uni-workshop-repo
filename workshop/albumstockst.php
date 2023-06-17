<!doctype html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop1";

$conn = new mysqli($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}5.
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
	<h1> BROCK MUSIC STORE STOCKS</h1>
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
	<h2>STOCKS<a href = "addstocksform.php" class = "button">ADD STOCKS</a><a href = "searchstockstaff.php" class = "button">SEARCH ALBUM</a><a href = "deletestocksform.php" class = "button">DELETE STOCKS</a></h2>
	<?php

 $sql = "SELECT * FROM album";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

	echo "<TABLE border='3'>";
	
	    echo "<TR><TD style='font-size:40px'>";
		echo "ALBUM NAME";
		echo "</TD><TD style='width:200px;font-size:40px'>";
		echo "ALBUM ID";
		echo "</TD><TD style='width:200px;font-size:40px'>";
		echo "NO OF STOCKS";
	
	while ($row = mysqli_fetch_array($result))
	{
	    echo "<TR><TD style='font-size:40px'>";
		echo "<img src=\"".$row["album_png"]."\" width=\"240\" height=\"240\"><br>";
		echo $row["album_name"];
		echo "</TD><TD style='width:200px;font-size:40px'>";
		echo $row["album_id"];
		echo "</TD><TD style='width:200px;font-size:50px'>";
		echo $row["no_stock"];
		
	}
	echo "</TABLE>";
}
?>
</div>



</section>
</body>
</html>
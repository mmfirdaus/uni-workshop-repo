<!doctype html>
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
	<h1>BROCK MUSIC STORE REPORT</h1>
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
<h2>REPORT<a href = "stockreport.php  "  class = "button">STOCK REPORT</a><a href = "ratingreport.php "  class = "button">RATING REPORT</a></h2>
<h3> BEST SELLING ALBUM</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop1";

$conn = new mysqli($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "select album.album_name as t from sale join album on sale.album_id=album.album_id group by sale.album_id order by sum(amount) DESC";
$result2 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result2) > 0) {

	echo "<TABLE border='1'>";
	
	    echo "<TR><TD style='width:70px;font-size:20px'>";
		echo "RANK";
		echo "</TD><TD style='width:200px;font-size:20px'>";
		echo "ALBUM NAME";

	$i=1;
	while ($data2 = mysqli_fetch_array($result2) )
	{
	    echo "<TR><TD style='height:40px;width:70px;font-size:20px'>";
		echo "$i";
		echo "</TD><TD style='width:200px;font-size:20px'>";
		echo $data2['t'];

		$i++;
	}
	echo "</TABLE>";

}
?>
<h3> HIGHEST GROSSING ALBUM </h3>
<?php

$sql = "select album.album_name as t from sale join album on sale.album_id=album.album_id group by sale.album_id order by sum(amount*album.price) DESC";
$result2 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result2) > 0) {

	echo "<TABLE border='1'>";
	
	    echo "<TR><TD style='width:70px;font-size:20px'>";
		echo "RANK";
		echo "</TD><TD style='width:200px;font-size:20px'>";
		echo "ALBUM NAME";

	$i=1;
	while ($data2 = mysqli_fetch_array($result2) )
	{
	    echo "<TR><TD style='height:40px;width:70px;font-size:20px'>";
		echo "$i";
		echo "</TD><TD style='width:200px;font-size:20px'>";
		echo $data2['t'];

		$i++;
	}
	echo "</TABLE>";

}

?>



</section>

</body>
</html>
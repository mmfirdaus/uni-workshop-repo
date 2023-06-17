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
	<h1>UPDATE ALBUM DETAILS</h1>
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
$albumname= $_POST["name"];
$albumprice= $_POST["price"];
$stocknum= $_POST["stocknum"];
$releaseyear= $_POST["release"];
$albumgenre= $_POST["genre"];
$artistname= $_POST["arname"];
$albumrating= $_POST["rating"];
$albumlocation= $_POST["location"];
$albumpng= $_POST["pngfile"];

$sql = "UPDATE album SET album_name = '$albumname', price = '$albumprice',
		no_stock = '$stocknum', release_year = '$releaseyear', genre = '$albumgenre', artist_name = '$artistname', rating = '$albumrating',
		album_location = '$albumlocation', album_png = '$albumpng' WHERE album_id = '$albumid' ";


if (mysqli_query($conn, $sql)) 
{
    echo "Album Updated ";
} else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
</div>

</section>
</body>
</html>


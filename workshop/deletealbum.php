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
	<h1> DELETE ALBUM DETAILS</h1>
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


$id= $_GET["id"];
$sql = "DELETE FROM album WHERE album_id='$id'";
$sql2 = "Delete from sale where album_id='$id'";

if (mysqli_query($conn, $sql2))
{
    echo "Sales deleted ";
	echo "<br>";
} else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql))
{
    echo "Album deleted ";
} else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</div>



</section>
</body>
</html>








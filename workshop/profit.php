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
	<h1>BROCK MUSIC STORE PROFIT</h1>
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
	<h2>PROFIT<a href = "addsalesform.php" class = "button">ADD SALES</a><a href = "salesreport.php  "  class = "button">SALES REPORT</a><a href = "profitreport.php "  class = "button">PROFIT REPORT</a></h2>
	

	<?php
		$aid = "SELECT * FROM album";
		$aidcon = mysqli_query($conn, $aid);
		while ($row = mysqli_fetch_array($aidcon))
		{
			$albumid[] = $row['album_id'];
		}
		
		$na = "select COUNT(album_id) as al from album";
		$numalb = mysqli_query($conn, $na);
		$numberalbum = mysqli_fetch_array($numalb);
		$numberofalbum = $numberalbum['al'];
		$i = 0;
		do
		{
		$sql = "SELECT sum(amount) as total from sale where album_id = '$albumid[$i]'";
		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($result);
		$totalsale[] = $data['total'];
		$i++;
		} while ($i<($numberofalbum));
		
echo "<TABLE>";
		echo "<TABLE border='1'>";
		echo "<TR><TD>";
		echo "ALBUM NAME";
		echo "</TD><TD>";
		echo "ALBUM ID";
		echo "</TD><TD>";
		echo "TOTAL SALES";
		echo "</TD><TD>";
		echo "WEEKLY SALES";
		echo "</TD><TD>";
		echo "MONTHLY SALES";

		$sql2 = "SELECT * FROM album";
		$result2 = mysqli_query($conn, $sql2);
		$jk = 0;
		while ($row = mysqli_fetch_array($result2))
		{
		echo "<TR><TD style='height:40px'>";
		echo $row["album_name"];
	    echo "</TD><TD>";
		echo $row["album_id"];
		echo "</TD><TD>";
		echo $totalsale[$jk];
		echo "</TD><TD>";
		echo "<a href=\"weeklysales.php?id=".$row["album_id"]."\">Week</a> ";
		echo "</TD><TD>";
		echo "<a href=\"monthlysales.php?id=".$row["album_id"]."\">Month</a>";
		$jk++;
		}
	
		
		echo "</TABLE>";	
		echo "<br>";
?>


<?php
		$aid = "SELECT * FROM album";
		$aidcon = mysqli_query($conn, $aid);
		while ($row = mysqli_fetch_array($aidcon))
		{
			$albumid[] = $row['album_id'];
		}
		
		$na = "select COUNT(album_id) as al from album";
		$numalb = mysqli_query($conn, $na);
		$numberalbum = mysqli_fetch_array($numalb);
		$numberofalbum = $numberalbum['al'];
		$i = 0;
		do
		{
		$sql = "SELECT sum(amount) as total from sale where album_id = '$albumid[$i]'";
		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($result);
		$totalsale[] = $data['total'];
		$i++;
		} while ($i<($numberofalbum));
		
echo "<TABLE>";
		echo "<TABLE border='1'>";
		echo "<TR><TD>";
		echo "ALBUM NAME";
		echo "</TD><TD>";
		echo "ALBUM ID";
		echo "</TD><TD>";
		echo "PRICE (RM) ";
		echo "</TD><TD>";
		echo "TOTAL SALES";
		echo "</TD><TD>";
		echo "TOTAL PROFIT";
		echo "</TD><TD>";
		echo "WEEKLY PROFIT";
		echo "</TD><TD>";
		echo "MONTHLY PROFIT";
		$sql2 = "SELECT * FROM album";
		$result2 = mysqli_query($conn, $sql2);
		$jk = 0;
		while ($row = mysqli_fetch_array($result2))
		{
	   echo "<TR><TD style='height:40px'>";
		echo $row["album_name"];
	    echo "</TD><TD>";
		echo $row["album_id"];
		echo "</TD><TD>";
		echo $row["price"];
		echo "</TD><TD>";
		echo $totalsale[$jk];
		echo "</TD><TD>";
		$total = $totalsale[$jk];
		$pro = $row["price"];
		$totalpro = $total*$pro;
		echo $totalpro;
		echo "</TD><TD>";
		echo "<a href=\"weeklyprofit.php?id=".$row["album_id"]."\">Week</a> ";
		echo "</TD><TD>";
		echo "<a href=\"monthlyprofit.php?id=".$row["album_id"]."\">Month</a>";
		$jk++;
		}
	
		
		echo "</TABLE>";	
?>
	 
	
</div>
</section>
</body>
</html>
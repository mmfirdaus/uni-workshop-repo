<!doctype html>
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
<h2>REPORT</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop1";

$conn = new mysqli($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from album";
$result = mysqli_query($conn,$sql);


$albumid = array();
$stock = array();
$i = 0;
while ($row = mysqli_fetch_array($result))
{
	$albumid[$i] = $row["album_id"];
	
	$sql2 = "select no_stock from album where album_id ='".$row["album_id"]."'";
	$result_order = mysqli_query($conn,$sql2);
	$row_order = mysqli_fetch_row($result_order);
	$stock[$i] = $row_order[0];
	$i++;
}
?>

<script type="text/javascript" src="loader.js"></script>
<script type="text/javascript">
	google.charts.load('current',{'packages':['bar']} );
    google.charts.setOnLoadCallback(drawChart);
	
	function drawChart()
	{
		var data = google.visualization.arrayToDataTable([
			['ALBUM ID','stocks '],
			<?php
			for($j = 0; $j<$i;$j++)
			{
				echo "['".$albumid[$j]."',".$stock[$j]."],";
			}
			?>
	]);
		var options ={
			chart: {
				title:'Stock Report',
				subtitle:'Stocks left',
			},
			bars:'vertical'//required bar chart.
		};
		
		var chart = new google.charts.Bar(document.getElementById('barchart'));
		
		chart.draw(data,google.charts.Bar.convertOptions(options));
	}
</script>
<div id="barchart" style="width: 1000px; height: 500px;"></div>

<?php


$conn6 = new mysqli("localhost","root", "","workshop1");
if (!$conn6) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<br>";
echo "GUIDE";

$sql6 = "SELECT * FROM album";
$result6 = mysqli_query($conn6, $sql6);
if (mysqli_num_rows($result6) > 0) {

	echo "<TABLE border='1'>";
	
	    echo "<TR><TD>";
		echo "ALBUM NAME";
		echo "</TD><TD>";
		echo "ALBUM ID";
		
	
	while ($row6= mysqli_fetch_array($result6))
	{
	    echo "<TR><TD>";
		echo $row6["album_name"];
		echo "</TD><TD>";
		echo $row6["album_id"];
		
		
	}
	echo "</TABLE>";
}
?>



</section>

</body>
</html>
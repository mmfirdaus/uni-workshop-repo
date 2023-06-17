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
	$conn = mysqli_connect("localhost", "root", "");
	
	$db = mysqli_select_db($conn, "workshop1");
	
	$sql = "SELECT * FROM album";
	
	$records = mysqli_query($conn,$sql);
	
?>
<table>
	<tr>
		
		<th>Name</th>
		<th>Price</th>
		<th>Stock no</th>
		<th>Release Year</th>
		<th>Genre</th>
		<th>Artist Name</th>
		<th>Rating</th>
		<th>Location</th>
		<th>PNG File</th>
	</tr>
	<?php
	while($row = mysqli_fetch_array($records))
	{
		echo "<tr><form action = updatealbum.php method = post>";
		echo "<td><input type = text name = name value = '".$row['album_name']."'</td>";
		echo "<td><input type = text name = price value = '".$row['price']."'</td>";
		echo "<td><input type = text name = stocknum value = '".$row['no_stock']."'</td>";
		echo "<td><input type = text name = release value = '".$row['release_year']."'</td>";
		echo "<td><input type = text name = genre value = '".$row['genre']."'</td>";
		echo "<td><input type = text name = arname value = '".$row['artist_name']."'</td>";
		echo "<td><input type = text name = rating value = '".$row['rating']."'</td>";
		echo "<td><input type = text name = location value = '".$row['album_location']."'</td>";
		echo "<td><input type = text name = pngfile value = '".$row['album_png']."'</td>";
		echo "<input type = hidden name = id value = '" .$row['album_id']."'>";
		echo "<td><input type = submit>";
		echo "</form></tr>";
	}
	?>
</table>

</div>

</section>
</body>
</html>

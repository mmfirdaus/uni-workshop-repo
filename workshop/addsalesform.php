<!doctype html>
<?php
	$conn = mysqli_connect("localhost", "root", "");
	
	$db = mysqli_select_db($conn, "workshop1");
	
	$sql = "SELECT * FROM album";
	
	$records = mysqli_query($conn,$sql);
	
	$sql2 = "SELECT * FROM staff";
	
	$records2 = mysqli_query($conn,$sql2); 
	
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome Admin</title>
<style>
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
	color: #2F4F4F;
}



</style>
</head>
<body>
<section>


<div class="header">
	<h1>ADD ALBUM SALES</h1>
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
<form action = addsales3.php method = post>
<label> Album </label>
</br>
<select name="id">
<?php while ($row= mysqli_fetch_array($records)):;?>
<option value="<?php echo $row[0];?>">
<?php echo "["; echo $row[1]; echo "] ";echo $row[0];?>
</option>
<?php endwhile;?>
</select>
</br>
</br>
<label> Staff </label>
</br>
<select name="sid">
<?php while ($row2= mysqli_fetch_array($records2)):;?>
<option value="<?php echo $row2[0];?>">
<?php echo $row2[0];?>
</option>
<?php endwhile;?>
</select>
</br>
</br>
<label> Date </label>
</br>
<input type = date name = date>
</br>
</br>
<label> Amount </label>
</br>
<input type = text name = amount >
</br>
</br>
<input type = submit>
</form>	



</div>


</section>
</body>
</html>

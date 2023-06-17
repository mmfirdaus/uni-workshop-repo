<!doctype html>
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
	<h1>ADD ALBUM DETAILS</h1>
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
	<form method="post" action="addalbum.php">
<pre>Album ID (A9999):        <input type="Text" name="id"><br></pre>
<pre>Album name:              <input type="Text" name="name"><br></pre>
<pre>Price (99.99):           <input type="number" name="price"><br></pre>
<pre>Stock Number:            <input type="number" name="stocknum"><br></pre>
<pre>Release Year (YYYY):     <input type="number" name="release" max="2100"><br></pre>
<pre>Genre:                   <select size="1" name="genre"><br></pre>
<option selected value="Hip-Hop">Hip-Hop</option>
<option value="Pop">Pop</option>
<option value="Pop Rock">Pop Rock</option>
<option value="Rock">Rock</option>
<option value="RnB">RnB</option>
<option value="Electronic">Electronic</option>
<option value="Soundtrack">Soundtrack</option>
</select>
<pre>Artist Name:             <input type="Text" name="arname"><br></pre>
<pre>Rating (9.99):           <input type="number" name="rating" step="0.01"min="0.00" max="9.99"><br></pre>
<pre>Album Location:          <select size="1" name="location"><br></pre>
<option selected value="H1">H1</option>
<option value="H2">H2</option>
<option value="H3">H3</option>
<option value="K4">K4</option>
<option value="K5">K5</option>
<option value="K6">K6</option>
<option value="M7">M7</option>
<option value="M8">M8</option>
<option value="M9">M9</option>
</select>
<pre>Album PNG file (aaa.png):<input type="Text" name="pngfile"><br></pre>
<input type="Submit" name="submit" value="Enter information">
</form>
</div>

</section>
</body>
</html>

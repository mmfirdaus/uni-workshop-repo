<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body{
	background-image: url("loginocean.png");
}
.button {
  background-color: #023542;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}
.button:hover {opacity: 1}
.login{
width:500px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
color: #023542;
background-color: #fff;
border-radius:70px;
border:5px solid #07B3DE;
padding:20px 50px 45px;
margin-top:90px;	
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;	
}
input[type=submit]{
width:102%;
background-color:#023542;
color:#E5EAEC;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;	
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Brock Music Store<br/> Login System</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Staff ID" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" class="button" value="LOGIN" name="submit1"><br/><br/>
<input type="submit" class="button" value="PUBLIC" name="submit2"><br/>

<span><?php echo $error; ?></span>
</body>
</html>
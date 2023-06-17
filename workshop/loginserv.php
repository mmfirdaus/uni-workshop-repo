<?php
$error='';
if(isset($_POST['submit1'])){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is Invalid";
	}
	else
	{
	
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
		$conn = mysqli_connect("localhost", "root", "");
		
		$db = mysqli_select_db($conn, "workshop1");
		
		$query = mysqli_query($conn, "SELECT * FROM staff WHERE staff_password='$pass' AND staff_id='$user'");
		
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			header("Location: welcomeadmin.php"); 
		}
		else
		{
			$error = "Username of Password is Invalid";
		}
		mysqli_close($conn);
	}
}

else if (isset($_POST['submit2'])){
	header("Location: welcomepublic.php"); 
	
}

?>
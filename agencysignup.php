<?php 
session_start();

	include("agencyconnection.php");
	include("agencyfunctions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email_id = $_POST['email'];
		// $type = $_POST['ac'];

		if(!empty($user_name) && !empty($password) && !empty($email_id) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO agency (user_id,user_name,password,email_id) VALUES ('$user_id','$user_name','$password','$email_id')";

			mysqli_query($con, $query);

			header("Location: agencylogin.php");
			die;
		}else
		{
			echo "Please enter valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
	}

	#box{
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<h1>AGENCY SIGN UP</h1>
			USER NAME : <input id="text" type="text" name="user_name"><br><br>
			PASSWORD : <input id="text" type="password" name="password"><br><br>
			EMAIL ID : <input id="text" type="email" name="email"><br><br>
			TYPE : <select name="type" id="ac">
				<option value="agent">agent</option>
				<option value="customer">customer</option>
			</select><br><br>
			<input id="button" type="submit" value="Signup"><br><br>
			<a href="agencylogin.php">Click to Login</a><br><br>
			<a href="car rental agency.html">Home</a>
		</form>
	</div>
</body>
</html>
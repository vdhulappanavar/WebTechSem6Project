<html>
	<head>
		<title>List Users</title>
		<style>
			body{
				background-color: #faebd7;			
				margin:0px;
				padding:0px;
			}
			
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #333;
			}

			li {
				float: left;
			}

			li a, .dropbtn {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			li a:hover, .dropdown:hover .dropbtn {
				background-color: red;
			}

			li.dropdown {
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}

			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
			}

			.dropdown-content a:hover {background-color: #f1f1f1}

			.dropdown:hover .dropdown-content {
				display: block;
			}			
		</style>
		
	</head>
	
	<body>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="register_art.html">Add User</a></li>
			<li><a href="show_users.php">List Users</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="add_art.php">Add Art</a></li>
			<li><a href="art.html">art</a></li>
		</ul>		
		<br>
	</body>

</html>




<?php
	include "connect.php";
	$loggedin = 0;
	//echo "hi";
	
	//echo $_POST["artist_name"];
	$a = $_POST["artist_name"];
	//echo $a."<br>";
	$query = "select * from artist_user where emailid='$a'";
	$result = mysqli_query($con , $query) or die("couldnt update the info");
	$user = mysqli_fetch_array($result , MYSQLI_ASSOC);
	//echo $user."test";
	//echo $result.length;
	if($user)  {
			if($user['password'] == $_POST["artist_password"])
			{
				echo "Logged in";
				
				$loggedIn = 1;
				$loggedinemailid = $_POST["artist_name"];
				$loggedinname = $user['firstname']." ".$user['lastname'];
			}
			else	
				echo "Sorry Password Entered was wrong";
	}
	else
		echo "Sorry user doesnt exist";
		
?>
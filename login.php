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
			
			<li><a href="art.html">art</a></li>
		</ul>		
		<br>
	</body>

</html>


<?php
	include "connect.php";
	
	
	
	
	if($loggedIn)	
	{
		echo "Already Logged in want to logout?";
		echo "<a href='logout.php'>LOGOUT</a>";
		
	
	}
	
	else
	{
		echo "<form method='POST' action='login_auth.php'>email ID : <input type='text' name='artist_name'><br><br>password:<input type='password' name='artist_password' ><input type='submit'></form>";
	}
	
	function foo()
	{
		return "trying";
	}
	
?>

<script>
		var foo1 = <?php foo()?>
		console.log("in js");
		console.log(foo1);
</script>
	



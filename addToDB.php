

<html>
	<head>
		<title>Add Art</title>
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
			<li><a href="#">Add User</a></li>
			<li><a href="show_users.php">List User</a></li>
			<li><a href="login.php">Login</a></li>
			
			<li><a href="art.html">art</a></li>
		</ul>		
		<br>
		
		
		<div align="center">
			<form method="POST" action="addToDB.php">
				Email_ID : <input type="text" name = "artist_email_id" id = "artist_email_id" onblur="emailID_authentication()"><div id="emailID_authentication"></div><br><br>
				
				
				Password : <input type="text" name = "artist_password" id="artist_password" ><br><br>
			
				Artist Name => First Name : <input type="text" name="artist_firstname"  id="artist_firstname"> 	Last Name : <input type="text" name="artist_lastname"  id="artist_lastname"> <br> <br>
				Artist Date Of Birth : <input type="date" name="aetist_dob" id="artist_dob"> <br><br>
				Category : 
					<select name="category">
						<option value='Pencil Sketch'>Pencil Sketch</option>
						<option value='Painting'>Painting</option>
						<option value="Mordern Art">Mordern Art</option>
						<option value="craft"> Craft</option>
					</select><br> <br>
				<br> <br>
				
				<input type="submit" name="submit" value="submit" id="submit" disabled>				
				
			</form>
		</div>
	</body>
</html>
	<?php			
				include "connect.php";
				/*if($loggedIn)
					echo "hi";
				else
					echo "bye<br>";*/
				$artist_firstname = $_POST['artist_firstname'];
				$artist_lastname = $_POST['artist_lastname'];
				$artist_name = $artist_firstname." ". $artist_lastname;
				$artist_dob = $_POST['artist_dob'];
				$artist_password= $_POST['artist_password'];
				$category = $_POST['category'];
				$artist_email_id =  $_POST['artist_email_id'];
				
				
				echo $artist_name;
				
				$query = "INSERT INTO `artist_user` (`emailId`, `dob`, `password`, `firstname`, `lastname`, `category`) VALUES ('$artist_email_id', '$artist_dob', '$artist_password', '$artist_firstname', '$artist_lastname', '$category')";
				mysqli_query($con , $query) or die("couldnt update the info");
				/*echo"<br>".$art_name."<br>";
				$query= "select * from art_info where artist_name='$artist_name'";
				
				$result = mysqli_query($con , $query);
				$art_id=mysqli_num_rows($result);
				$art_id = $art_id+1;
				
				$art_id = $artist_firstname[0].$artist_lastname[0].$art_id;
				
				echo $art_id;
				*/



			
			?>
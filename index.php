<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		$logged_in=true;
	}
	else
	{
		$logged_in=false;
	}
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Music Player</title>
	<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css"
		/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/?family=Roboto&display=swap"/>
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/sidebar.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src="js.js"></script>
	<style type="text/css">
		.sign{
			text-decoration: none;
			background-color: black;
		  	color: white;
		  	padding: 10px 15px;
		  	width: 10%;
		  	height: 15%;
		  	text-decoration: none;
		  	display: inline-block;
		  	margin-bottom: 10px;
		  	border-radius: 75px;
		  	text-align: center;
		  	transition: 0.4s ease-in-out;
		}
		.sign:hover{
			text-decoration: none;
			background-color: white;
		  	color: black;
		  	padding: 10px 15px;
		  	width: 10%;
		  	height: 15%;
		  	text-decoration: none;
		  	display: inline-block;
		  	margin-bottom: 10px;
		  	border-radius: 75px;
		  	text-align: center;
		}
		.log{
			text-decoration: none;
			background-color: black;
		  	color: white;
		  	padding: 10px 15px;
		  	width: 10%;
		  	height: 15%;
		  	text-decoration: none;
		  	display: inline-block;
		  	margin-bottom: 10px;
		  	border-radius: 75px;
		  	text-align: center;
		  	transition: 0.4s ease-in-out;
		}
		.log:hover{
			text-decoration: none;
			background-color: white;
		  	color: black;
		  	padding: 10px 15px;
		  	width: 10%;
		  	height: 15%;
		  	text-decoration: none;
		  	display: inline-block;
		  	margin-bottom: 10px;
		  	border-radius: 75px;
		  	text-align: center;
		}
	</style> -->
</head>
<body>
	<?php
		if($logged_in)
		{
			include('dbcon.php');
			$id=$_SESSION['id'];
			$sql="SELECT * FROM `users` WHERE `id`='$id'";
			$run=mysqli_query($con,$sql);
			$data=mysqli_fetch_assoc($run);
			?>
			<div id="profile" class="sidebar">
				<aside class="sidebar">
					<nav>
						<ul class="sidebar__nav">
							<li>
								<a href="account.php" class="sidebar__nav__link">
									<i class="mdi mdi-account-circle"></i>
									<span class="sidebar__nav__text"><?php echo $data['name']; ?></span>
								</a>
							</li>
							<li>
								<a href="favourites.php" class="sidebar__nav__link">
									<i class="mdi mdi-heart"></i>
									<span class="sidebar__nav__text">Favourites</span>
								</a>
							</li>
							<li>
								<a href="userplaylists.php" class="sidebar__nav__link">
									<i class="mdi mdi-playlist-play"></i>
									<span class="sidebar__nav__text">Playlists</span>
								</a>
							</li>
							<li>
								<a href="createplaylist.php" class="sidebar__nav__link">
									<i class="mdi mdi-playlist-plus"></i>
									<span class="sidebar__nav__text">Create playlist</span>
								</a>
							</li>
							<li>
								<a href="logout.php" class="sidebar__nav__link">
									<i class="mdi mdi-logout-variant"></i>
									<span class="sidebar__nav__text">Log out</span>
								</a>
							</li>
						</ul>
					</nav>
				</aside>
			</div>
			<?php
		}
		else
		{
			?>
			<div id="profile" class="sidebar">
				<aside class="sidebar">
					<nav>
						<ul class="sidebar__nav">
							<li>
								<a href="login.php" class="sidebar__nav__link">
									<i class="mdi mdi-login-variant"></i>
									<span class="sidebar__nav__text">Log-in</span>
								</a>
							</li>
							<li>
								<a href="signup.php" class="sidebar__nav__link">
									<i class="mdi mdi-new-box"></i>
									<span class="sidebar__nav__text">Sign-up</span>
								</a>
							</li>
							<li>
								<a class="sidebar__nav__link">
								</a>
							</li>
						</ul>
					</nav>
				</aside>
			</div>
			<?php
		}
	?>
	<main class="main">
	<center>
		<form action="search.php" method="post" class="textbox">
			<input onchange="validateKeyword()" id="searchBox" class="button" type="text" name="stext" placeholder="Search" required>			
		</form>
	</center>
	<h1 align="center">Have a great day with Music</h1>
	<table align = 'center'>
		<tr>			
			<td><div class="zoom"><a href="category/romance.php">
				<img src="photos/caticon/romance.jpg" style="width:400px;height:200px;border:0;" align = 'center'>
			</a></div></td>
			
			<td><div class="zoom"><a href="category/party.php">
				<img src="photos/caticon/party.jpg" style="width:400px;height:200px;border:0;" align = 'center'>
			</a></div></td>

			<td><div class="zoom"><a href="category/dance.php">
				<img src="photos/caticon/dance.jpg" style="width:400px;height:200px;border:0;" align = 'center'>
			</a></div></td>
		</tr>

		<tr>
			<td><div class="zoom"><a href="category/bhakti.php">
				<img src="photos/caticon/bhakti.jpg" style="width:400px;height:200px;border:0;" align = 'center'>
			</a></div></td>

			<td><div class="zoom"><a href="category/edm.php">
				<img src="photos/caticon/edm.jpg" style="width:400px;height:200px;border:0;" align = 'center'>
			</a></div></td>

			<td><div class="zoom"><a href="category/english.php">
				<img src="photos/caticon/english.jpg" style="width:400px;height:200px;border:0;" align = 'center'>
			</a></div></td>
		</tr>
	</table>
	</main>
	<script type="text/javascript">
		function validateKeyword(){
			console.log("is running");
			var btn = document.getElementById('searchBox');
			btn.value = btn.value.trim();
			if(btn.value.length == 1)
			{
				alert('Enter some valid keyword!!');
				btn.value = "";
			}
		}
	</script>
</body>
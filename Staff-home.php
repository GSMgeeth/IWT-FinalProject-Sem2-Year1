<?php
	session_start();
?>

<?php
	if (isset($_SESSION['u_id']))
	{
?>
		<!DOCTYPE html>

		<html>
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width,initial-scale=1.0">
				<title>Home-Staff</title>
				<link href="Styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
				<script src="Scripts/jquery.min.js" type="text/javascript"></script>
				<script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
				<link href="Styles/Default.css" rel="stylesheet" type="text/css"/>
				<link href="Styles/staff-home-style.css" rel="stylesheet" type="text/css"/>
			</head>
			<body>
				<div class="header">
					<div class="logo"><h2>Logo</h2></div>
					<div class="title01"><h2><i><span>W</span>ax<span>W</span>ing</i></h2></div>
					<div class="title02"><h2>Explore The Wonder Of Asia</h2></div>
					<div class="links">
						<form action="Includes/logout-inc.php" method="POST">
						<button type="submit" name="logout">Logout</button>
						</form>
					</div>
				</div>
				<div class="navi">
					<ul>
						<li class="navi_inactive"><a href="index.php">Home</a></li>
						<li class="navi_inactive"><a href="Categories.php">Categories</a></li>
						<li class="navi_inactive"><a href="packages.php">Packages</a></li>
						<li class="navi_inactive"><a href="vehicles.php">Vehicles</a></li>
						<li class="navi_inactive"><a href="#">About Us</a></li>
						<li class="navi_inactive"><a href="#">Contact Us</a></li>
						<li class="navi_active"><a href="Staff-home.php">Staff</a></li>
					</ul>
				</div>
				<div class="body">
					<div class="ccontent">
						<a href="manage-packages.php"><div class="citem">
							<img src="Images/image1.jpg" alt="myImage">
							<div class="tit">Add/Delete Packages</div>
						</div></a>
						<a href="manage-vehicle.php"><div class="citem">
							<img src="Images/image1.jpg" alt="myImage">
							<div class="tit">Add/Delete Vehicles</div>
						</div></a>
						 <a href="manage-categories.php"><div class="citem">
							<img src="Images/image1.jpg" alt="myImage">
							<div class="tit">Add/Delete Categories</div>
						</div></a>
						 <div class="citem">
							<img src="Images/image1.jpg" alt="myImage">
							<div class="tit">Manage Members</div>
						</div>
				</div>
				<div class="footer">
					<div class="ourScope">
						<h3>Our Scope</h3>
						<p>  Multimedia comes in many different formats. It can be almost anything you can hear or see.
							Examples: Pictures, music, sound, videos, records, films, animations, and more.
							Web pages often cok;jt ledjr jle leihrf ljcf dtgvb edde
						</p>
					</div>
					<div class="sosialLinks">
						<div class="sicons">

							<a href="#"> <img src="Images/twitter-square-black-and-white-logo-962E683117-seeklogo.com.png"></a>
							<a href="#"> <img src="Images/facebook-symbol_318-37686.jpg"></a>
							<a href="#"> <img src="Images/youtube_1.svg"></a>
						</div>
					</div>
				</div>
			</body>
		</html>
<?php
	}
?>


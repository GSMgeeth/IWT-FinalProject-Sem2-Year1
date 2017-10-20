<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Styles/signup.css">
	<style>
	body
	{
		background-image: url("Images/pattern5.png");
	}
	
	.main-wrapper ul li a h2
	{
		font-size: 24px;
		text-align: left;
		font-weight: bold;
		color: #666666;
	}
	
	.main-wrapper ul li a h2 span
	{
		color:  #6cf;
	}
	</style>
</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href="index.php"><h2><i><span>W</span>ax<span>W</span>ing</i></h2></a></li>
				</ul>
				<div class="nav-login">
				
					<?php
					if (isset($_SESSION['u_id']))
					{
                    ?>
                        <form action="includes/logout-inc.php" method="POST">
						<button type="submit" name="logout">Logout</button>
						</form>
                    <?php
					}
					else
					{
                    ?>
                        <form action="Includes/login-inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="Password">
							<button type="submit" name="login">Login</button>
						</form>
                    <?php
					}
					?>
					
				</div>
			</div>
		</nav>
	</header>
	<section class="main-container">
		<div class="main-wrapper">
			<h2><center>Sign up</center></h2>
			<form class="sign-form" action="includes/signup-inc.php" method="POST">
				<input type="text" name="first" placeholder="Firstname">
				<input type="email" name="email" placeholder="E-mail">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit-staff">Sign up</button>
			</form>
		</div>
	</section>
	
<?php
	include_once 'footer.php';
?>

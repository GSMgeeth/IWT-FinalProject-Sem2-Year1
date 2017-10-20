<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="Scripts/validateSignUp.js"></script>
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
		<nav  style="height: 65px;">
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
							<a style="padding-top: 5px;" class="forget" href='Password_reset.php'> Forget password?</a>
						</form>
							<?php
							if (isset($_GET['login']))
							{
								$error_msg = ""; 
								$error = $_GET['login'];
								
								if ($error !== 'success')
								{
									if ($error === 'empty')
									{
										$error_msg = "Fields can't be empty!";
									}
									elseif ($error === 'error')
									{
										$error_msg = "Invalid username!";
									}
									elseif ($error === 'errorpw')
									{
										$error_msg = "Invalid password!";
									}
							?>	
									<div style="padding-top: 10px; color: red;">
										<?= $error_msg ?>
									</div>
							<?php
								}
							}
							?>
                    <?php
					}
					?>
				</div>
			</div>
		</nav>
	</header>

<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Styles/manage-category-style.css">
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
	
	.manage-form textarea
	{
		width: 90%;
		height: 70px;
		padding: 0px 5%;
		margin-bottom: 4px;
		border: none;
		background-color: #fff;
		font-family: arial;
		font-size: 16px;
		color: #111;
		line-height: 40px;
	}
	
	.manage-form .float1
	{
		float: right;
	}
	
	.manage-form .float2
	{
		float: left;
	}
	</style>
</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href="Staff-home.php"><h2><i><span>W</span>ax<span>W</span>ing</i></h2></a></li>
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
			<h2><center>Add packages</center></h2>
			<form class="manage-form" action="Includes/manage_package-inc.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="name" placeholder="Name">
				<input type="number" min="0"  name="price" placeholder="Price">
				<input type="text" name="category" placeholder="Category name">
				<textarea name="description" placeholder="Description"></textarea>
				<input type="file" name="fileToUpload" placeholder="Image">
				<button type="submit" name="add">Add</button>
			</form>
		</div>
		
		<script>
			function confirmation()
			{
				return confirm("Do you really need to delete?");
			}
		</script>
		
		<div class="main-wrapper">
			<h2><center>Delete/Modify packages</center></h2>
			<form class="manage-form" action="Includes/manage_package-inc.php" onsubmit="return confirmation();" method="POST">
				<input type="text" name="name" placeholder="Name">
				<button class="float1" type="submit" name="delete">Delete</button>
			</form>
		</div>
	</section>
	
<?php
	include_once 'footer.php';
?>

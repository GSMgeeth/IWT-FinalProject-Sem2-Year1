<?php
	include_once 'header.php';
	require './Includes/dbh-inc.php';
?>

	<section class="main-container">
		<div class="main-wrapper">
			<h2><center>Sign up</center></h2>
			<form class="sign-form" name="myform" action="includes/signup-inc.php" method="POST">
				<input type="text" name="first" placeholder="Firstname" value="<?php if (isset($_GET['first'])) echo $_GET['first'] ?>">
				<input type="text" name="country" placeholder="Country" value="<?php if (isset($_GET['country'])) echo $_GET['country'] ?>">
                <input type="text" name="tel" placeholder="Telephone" value="<?php if (isset($_GET['tel'])) echo $_GET['tel'] ?>">
				<input type="email" name="email" placeholder="E-mail" value="<?php if (isset($_GET['email'])) echo $_GET['email'] ?>">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Sign up</button>
			</form>
		</div>
	</section>
	<?php
		if (isset($_GET['signup']))
		{
			$error_msg = ""; 
			$error = $_GET['signup'];
			
			if ($error !== 'success')
			{
				if ($error === 'empty')
				{
					$error_msg = "Fields can't be empty!";
				}
				elseif ($error === 'invalid')
				{
					$error_msg = "Invalid name!";
				}
				elseif ($error === 'email')
				{
					$error_msg = "Invalid email!";
				}
				elseif ($error === 'usertaken')
				{
					$error_msg = "Username already taken!";
				}
	?>
				<div style="padding-top: 10px; color: red;">
				<center><strong>Warning! </strong><?= $error_msg ?></center>
				</div>
	<?php
			}
		}
	?>
	
<?php
	include_once 'footer.php';
?>

<?php
	session_start();
	require 'Includes/dbh-inc.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Categories</title>
        <link href="Styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Scripts/jquery.min.js" type="text/javascript"></script>
        <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
        <link href="Styles/Default.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/Categories.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="header">
            <div class="logo"><h2>Logo</h2></div>
            <div class="title01"><h2><i><span>W</span>ax<span>W</span>ing</i></h2></div>
            <div class="title02"><h2>Explore The Wonder Of Asia</h2></div>
            <div class="links">
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
			<form action="signup.php" method="POST">
			<button type="submit" name="L&S">Log in / Sign up</button>
			</form>
			<?php
			}
			?>
			</div>
        </div>
        <div class="navi">
            <ul>
                <li class="navi_inactive"><a href="index.php">Home</a></li>
                <li class="navi_active"><a href="#">Categories</a></li>
                <li class="navi_inactive"><a href="Packages.php">Packages</a></li>
                <li class="navi_inactive"><a href="Vehicles.php">Vehicles</a></li>
                <li class="navi_inactive"><a href="#">About Us</a></li>
                <li class="navi_inactive"><a href="#">Contact Us</a></li>
				 <?php
                if (isset($_SESSION['u_type']) && $_SESSION['u_type'] === 'admin') {
                    ?>
                    <li class="navi_inactive"><a href="Staff-home.php">Staff</a></li>
                    <?php
                }
				else if (isset($_SESSION['u_type']) && $_SESSION['u_type'] === 'member')
				{
					?>
					<li class="navi_inactive"><a href="#">My profile</a></li>
					<?php
				}
                ?>
            </ul>
        </div>
        <div class="body">
            <div class="ccontent" style="min-height: 550px;">
			<?php
				$sql = "SELECT * FROM category";
				$result = mysqli_query($conn, $sql);
				if ($result)
				{	
					$resultCheck = mysqli_num_rows($result);
					
					if ($resultCheck > 0)
					{
						$i = 0;
						while ($row = mysqli_fetch_assoc($result))
						{	$i++;
			?>
							<div class="citem">
								<img src="Images/img<?=$i?>.jpg" alt="myImage">
								<div class="title"><?= $row['name'] ?></div>
								<div class="tit"><?= $row['name'] ?></div>
								<div class="description">
									<p>
										<?= $row['des'] ?>
									</p>
								</div>
							</div>
			<?php
						}
					}
					else
					{
						header("Location: ../Categories.php?entity=empty");
						exit();
					}
				}
				else
				{
					echo "error: ".$sql."<br>".mysqli_error($conn);
				}
			?>
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

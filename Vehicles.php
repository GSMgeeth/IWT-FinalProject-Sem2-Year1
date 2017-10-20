<!DOCTYPE html>
<?php
	session_start();
	require './Includes/dbh-inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vehicles</title>
        <link href="Styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <link href="Styles/input_n_style.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/Default.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/animate.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/Vehicles.css" rel="stylesheet" type="text/css"/>
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
                <li class="navi_inactive"><a href="Categories.php">Categories</a></li>
                <li class="navi_inactive"><a href="Packages.php">Packages</a></li>
                <li class="navi_active ">Vehicles</li>
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
					<li class="navi_inactive"><a href="customer_home.php">My profile</a></li>
					<?php
				}
                ?>
            </ul>
        </div>
        <div class="body" style="min-height: 550px;">
            <div class="pswraper">
                <form>
                    <?php
                    $sql = "SELECT * FROM vehicle";
                    $result = getData($sql, $conn);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="pwraper">
                                <div class="iwraper">
                                    <img src="Images/3D-nature-landscape-photo-of-mountaint.jpg">
                                    <p class="price" ><strong>Price : Rs.<?= $row['price'] ?>.00</strong></p>
                                </div>
                                <div class="cwraper">
                                    <p class="description"><i><?= $row['name']?></i></p>
									
                                    <p class="label label-primary">Available</p>
									
                                    <br>
                                    <br>
                                    <span class="label label-default">Amount :</span>  <div class="quantity">
                                        <input type="number" min="0" max="9" step="1" value="0">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <input type="submit" value="Hire" class=" btn btn-success">
                    </form>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger" style="margin: 40px;margin-bottom: 365px;">
                        <strong>Sorry !</strong> There are no any vehicles to rent!!!
                    </div>
                    <?php
                }
                ?>



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
        <script src="Scripts/jquery.min.js" type="text/javascript"></script>
        <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="Scripts/input_n_script.js" type="text/javascript"></script>
    </body>
</html>

<?php
	session_start();
	require './Includes/dbh-inc.php';
?>

<?php
	if (isset($_GET['deleteMem']))
	{
		$sql = "update member set status='deactive' where uname='".$_SESSION['u_uid']."'";
		if (mysqli_query($conn, $sql))
		{
			header('Location: Includes/logout-inc.php?deleteMem=true');
		}
	}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Customer-home</title>
        <link href="Styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Scripts/jquery.min.js" type="text/javascript"></script>
        <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
        <link href="Styles/Default.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/staff-home-style.css" rel="stylesheet" type="text/css"/>
		
    </head>
    <body>
        <div class="header">
            <div class="logo"><h2>Logo</h2></div>
            <a href="index.php"><div class="title01"><h2><i><span>W</span>ax<span>W</span>ing</i></h2></div></a>
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
                <li class="navi_inactive"><a href="Vehicles.php">Vehicles</a></li>
                <li class="navi_inactive"><a href="#">About Us</a></li>
                <li class="navi_inactive"><a href="#">Contact Us</a></li>
                <li class="navi_active"><a href="#">My Profile</a></li>
            </ul>
        </div>
        <div class="body">
            <div class="ccontent">
                <a href="member_cart.php">
                    <div class="citem">
                        <img src="Images/image1.jpg" alt="myImage">
                        <div class="tit">My Cart</div>
                    </div>
                </a>
                <a href="customer_past_orders.php">
                    <div class="citem">
                        <img src="Images/image1.jpg" alt="myImage">
                        <div class="tit">My Past Orders</div>
                    </div>
                </a>
                <a href="Update_customer.php">
                    <div class="citem">
                        <img src="Images/image1.jpg" alt="myImage">
                        <div class="tit">Update My Profile</div>
                    </div>
                </a>
				<script>
					function confirmation()
					{
						if (confirm("Do you really need to delete?"))
						{
							$('#deactive').submit();
						}
					}
				</script>
                <form id="deactive" action="customer_home.php" method="GET">
					<input type="text" name="deleteMem" value="true" hidden="">
                    <div class="citem" onclick="confirmation()">
                        <img src="Images/image1.jpg" alt="myImage">
                        <div class="tit">Deactivate My Accout</div>
                    </div>
		
                </form>
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
		<?php
		if (isset($_GET['payment']))
		{
		?>
			<script>
				alert("payment succussful!!!");
			</script>
		<?php
		}
		?>
    </body>
</html>



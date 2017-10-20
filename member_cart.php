<?php
	session_start();
	include_once 'Includes/dbh-inc.php';
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Home</title>
        <link href="Styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Scripts/jquery.min.js" type="text/javascript"></script>
        <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
        <link href="Styles/Default.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/home.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/animate.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php
        if (!isset($_SESSION['u_type'])) {
            ?>
            <div class="header">
                <div class="logo"><h2>LOGO</h2></div>
                <div class="title01"><h2><i><span>W</span>ax<span>W</span>ing</i></h2></div>
                <div class="title02"><h2>Explore The Wonder Of Asia</h2></div>
                <div class="links">
                    <form action="signup.php" method="POST">
                        <button type="submit" name="L&S">Log in / Sign up</button>
                    </form>
                </div>
            </div>
            <?php
        } else {
            ?>
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
            <?php
        }
        ?>
        <div class="navi">
            <ul>

                <li class="navi_inactive"><a href="index.php">Home</a></li>
                <li class="navi_inactive"><a href="categories.php">Categories</a></li>
                <li class="navi_inactive"><a href="Memories.php">Packages</a></li>
                <li class="navi_inactive"><a href="Vehicles.php">Vehicles</a></li>
                <li class="navi_inactive"><a href="#">About Us</a></li>
                <li class="navi_inactive"><a href="#">Contact Us</a></li>
                <li class="navi_inactive"><a href="customer_home.php">My Profile</a></li>
                <li class="navi_active ">My Cart</li>
                <?php
                if (isset($_SESSION['u_type']) && $_SESSION['u_type'] === 'admin') {
                    ?>
                    <li class="navi_inactive"><a href="Staff-home.php">Staff</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="body" style="min-height: 550px;">
            <div class="container">
                <h2>Package Orders</h2>     
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Package</th>
                            <th>Date</th>
                            <th>Fee</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$sql = "SELECT * FROM package_booking where status='pending'";
					$result = mysqli_query($conn, $sql);
					if ($result)
					{	
						$resultCheck = mysqli_num_rows($result);
						
						if ($resultCheck > 0)
						{
							while ($row = mysqli_fetch_assoc($result))
							{
								$pid = $row['pack_id'];
								$sql2 = "SELECT name FROM package where pack_id='$pid'";
								$result2 = mysqli_query($conn, $sql2);
								$row2 = mysqli_fetch_assoc($result2);
					?>
                        <tr>
                            <td><?=$row['pack_bk_id']?></td>
                            <td><?=$row2['name']?></td>
                            <td><?=$row['date']?></td>
                            <td><?=$row['total_amount']?></td>
                            <td class="form-inline">
                                <button class="btn btn-primary">Order</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
							<?php
							}
						}
					}
							?>
                    </tbody>
                </table>
                <h2>Vehicle Orders</h2>				
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Veh_ID</th>
                            <th>Date</th>
                            <th>Fee</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$sql = "SELECT * FROM vehicle_renting where status='pending'";
					$result = mysqli_query($conn, $sql);
					if ($result)
					{	
						$resultCheck = mysqli_num_rows($result);
						
						if ($resultCheck > 0)
						{
							while ($row = mysqli_fetch_assoc($result))
							{
								$rid = $row['rent_id'];
								$sql2 = "SELECT * FROM rent_list where rent_id='$rid'";
								$result2 = mysqli_query($conn, $sql2);
								while ($row2 = mysqli_fetch_assoc($result2))
								{
					?>
                        <tr>
                            <td><?=$row['rent_id']?></td>
                            <td><?=$row2['veh_id']?></td>
                            <td><?=$row['date']?></td>
                            <td><?=$row2['total_amount']?></td>
                             <td class="form-inline">
                                <button class="btn btn-primary">Order</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
						<?php
								}
							}
						}
					}
						?>
                    </tbody>
                </table>
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

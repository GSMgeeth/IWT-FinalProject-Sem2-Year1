<?php
session_start();
require 'Includes/dbh-inc.php';
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
        <link href="Styles/Payment.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="header">
            <div class="logo"><img src="Images/project pic.png"></div>
            <div class="title01"><h2><i><span>W</span>ax<span>W</span>ing</i></h2></div>
            <div class="title02"><h2>Explore The Wonder Of Asia</h2></div>
            <div class="links">
                <?php
                if (isset($_SESSION['u_id'])) {
                    ?>
                    <form action="includes/logout-inc.php" method="POST">
                        <button type="submit" name="logout">Logout</button>
                    </form>
                    <?php
                } else {
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
                <li class="navi_active ">Home</li>
                <li class="navi_inactive"><a href="categories.php">Categories</a></li>
                <li class="navi_inactive"><a href="Packages.php">Packages</a></li>
                <li class="navi_inactive"><a href="Vehicles.php">Vehicles</a></li>
                <li class="navi_inactive"><a href="#">About Us</a></li>
                <li class="navi_inactive"><a href="#">Contact Us</a></li>
                <?php
                if (isset($_SESSION['u_type']) && $_SESSION['u_type'] === 'admin') {
                    ?>
                    <li class="navi_inactive"><a href="Staff-home.php">Staff</a></li>
                    <?php
                } else if (isset($_SESSION['u_type']) && $_SESSION['u_type'] === 'member') {
                    ?>
                    <li class="navi_inactive"><a href="customer_home.php">My profile</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="body">

            <div class="wraper">
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">Visa</a></li>
                    <li><a data-toggle="pill" href="#menu1">Paypal</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="k tab-pane fade in active">
							<?php
								$pkid = 12;
								if (isset($_POST['pkid']))
								{
									$pkid = $_POST['pkid'];
								}
								elseif (isset($_POST['pay']))
								{
									$pk = $_POST['redir'];
									
									$sql = "SELECT price from package where pack_id=$pk";
									$result = mysqli_query($conn, $sql);
									$row = mysqli_fetch_assoc($result);
									$price = $row['price'];
									$date = date("Y/m/d");
									$mem_id = $_SESSION['u_id'];
									echo ($price." grf<br>");
									echo ($sql);
									$sql = "insert into package_booking (mem_id, pack_id, total_amount, date, status) values ('$mem_id','$pk','$price', '$date','paid')";
									if (mysqli_query($conn, $sql))
										header("location: customer_home.php?payment=success");
									else
										echo mysqli_error($conn);
								}
							?>
                          <form action="payment.php" method="post">
                            <div class="form-group">
                                <label for="cardNo">Card Number</label>
								<input type="number" name="redir" value="<?=$pkid?>" hidden="">
                                <input type="number_format" class="form-control" id="cardNo">
                            </div>
                            <div class="form-group">
                                <label for="pin">Card Pin</label>
                                <input type="password" class="form-control" id="pin">
                            </div>
                            <button type="submit" name="pay" class="btn btn-default">Pay</button>
                        </form> 
                    </div>
                    <div id="menu1" class="k tab-pane fade">
							
                          <form action="payment.php" method="post">
                            <div class="form-group">
                                <label for="email">Paypal Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Security Code</label>
								<input type="number" name="redir" value="<?=$pkid?>" hidden="">
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <button type="submit" name="pay" class="btn btn-default">Pay</button>
                        </form> 
                    </div>
                </div>

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

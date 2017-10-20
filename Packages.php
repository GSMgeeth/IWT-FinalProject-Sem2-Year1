<?php
	session_start();
	include_once './Includes/dbh-inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Packages</title>
        <link href="Styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Scripts/jquery.min.js" type="text/javascript"></script>
        <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
        <link href="Styles/Default.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/Packages.css" rel="stylesheet" type="text/css"/>
		<script>
            $(document).ready(
                    function () {
                        loadPackages();
                    }
            );
            function loadPackages() {
                var st = $('#txtSearch').val();
                $.get("getPackages.php",
                        {
                            pname: st
                        },
                        function (data, status) {
                            //alert(data);
                            $("#package_loder").html(data);
                        });
            }

        </script>
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
                <li class="navi_active ">Packages</li>
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
					<li class="navi_inactive"><a href="customer_home.php">My profile</a></li>
					<?php
				}
                ?>
            </ul>
        </div>
        <div class="body" style="min-height: 550px;">
            <div class="pswraper">
			
			<div class="controler form-inline">
                    <div class="form-group">
                        <input onkeyup="loadPackages();" id="txtSearch" style="width: 350px;" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <button onclick="loadPackages();" class="btn btn-default" type="text">Search</button>
                    </div>
                </div>
                <div id="package_loder">
                    
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

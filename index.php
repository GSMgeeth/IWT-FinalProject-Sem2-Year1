<?php
	session_start();
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
		<div class="header">
			<div class="logo"><h2>LOGO</h2></div>
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
        <div class="body">
            <div class="coresel">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                    </ol>

                    
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="Images/0RSjFej.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="Images/YrQJgdh.png"  alt="Chania">
                        </div>

                        <div class="item">
                            <img src="Images/night-colombo.jpg"  alt="Flower">
                        </div>

                        <div class="item">
                            <img src="Images/3D-nature-landscape-photo-of-mountaint.jpg" alt="Flower">
                        </div>
                        <div class="item">
                            <img src="Images/dKDfSge.jpg" alt="Flower">
                        </div>
                        <div class="item">
                            <img src="Images/high-resolution-wallpapers-widescreen-fall.jpg" alt="Flower">
                        </div>
                        <div class="item">
                            <img src="Images/sigiriya___lions_rock__sri_lanka-1.jpg" alt="Flower">
                        </div>
                        <div class="item">
                            <img src="Images/nature_waterfall_summer_lake_trees_90400_1920x1080.jpg" alt="Flower">
                        </div>
                    </div>

                
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="content01">
                <div class="wraper">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="citem">
                                    <img src="Images/209.jpg">
                                    <h3 class="ttile">Nature</h3>
                                </div>
                                <div class="citem">
                                    <img src="Images/dKDfSge.jpg">
                                    <h3 class="ttile">Education</h3>
                                </div>
                                <div class="citem">
                                    <img src="Images/Lago-en-el-Bosque.jpg">
                                    <h3 class="ttile">Explorer</h3>
                                </div>
                                <div class="citem">
                                    <img src="Images/night-colombo.jpg">
                                    <h3 class="ttile">Relax</h3>
                                </div>
                            </div>

                            <div class="item">
                                <div class="citem">
                                    <img src="Images/Colombo-16.jpg">
                                    <h3 class="ttile">Nature</h3>
                                </div>
                                <div class="citem">
                                    <img src="Images/tumblr_neive5caIg1r81c8do1_500.jpg">
                                    <h3 class="ttile">Nature</h3>
                                </div>
                                <div class="citem">
                                    <img src="Images/209.jpg">
                                    <h3 class="ttile">Nature</h3>
                                </div>
                                <div class="citem">
                                    <img src="Images/Green-Spring-Nature-Wallpaper.jpg">
                                    <h3 class="ttile">Nature</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content02">
                <h2>Safety of our birds</h2>
                <p>What is Multimedia?
                    Multimedia comes in many different formats. It can be almost anything you can hear or see.
                    Examples: Pictures, music, sound, videos, records, films, animations, and more.
                    Web pages often contains multimedia elements of different types and formats.
                    In this chapter you will learn about the different multimedia formats.
                    What is Multimedia? Multimedia comes in many different formats. It can be 
                    almost anything you can hear or see. Examples: Pictures, music,
                    sound, videos, records, films, animations, and more. Web pages often contains multimedia
                    elements of different types and formats. In this chapter you will learn about the different multimedia formats.
                </p>
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

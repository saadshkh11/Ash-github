<?php

session_start();


?>



<!DOCTYPE html>
<html>
<head>
	<title>Ash-Anime <?php echo $_SESSION['Email']; ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="Anime.css">
</head>
<body>
	<div>
		<div class="Search-box">
		<input class="Search-text" type="text" name="" placeholder="Type to Search">
		<a class="Search-btn" href="#">	
		<i class="fas fa-search"></i>
		</a>
	</div>
	<section class="headercontainer">
		<nav>
			<ul class="clearfix">
				<div class="left-area">
					<div class="navbar-brand group">
					<a href="file:///C:/Users/saad/Desktop/Css/itachi/Anime.html">
					<img src="images/Lgo.png">
					</a>
					</div>
				</div>
					<div class="right-area">
						<div class="navigation">
							<div class="group">
								<ul>
									<a href="file:///C:/Users/saad/Desktop/Css/itachi/Anime.html">
									<li>Home</li>
									</a>
								</ul>
							</div>
						</div>
					</div>
			</ul>
		</nav>
		<div class="hero-content">
			<h2>Detective Conan</h2>
			<P>Case Closed, also known as Detective Conan (名探偵コナン Meitantei Konan), is an ongoing Japanese detective manga series written and illustrated by Gosho Aoyama. It was serialized in Shogakukan's Weekly Shōnen Sunday on January 19, 1994, and has been collected into 94 tankōbon volumes as of December 18, 2017. Due to legal considerations with the name Detective Conan, the English language releases from Funimation and Viz were renamed to Case Closed.[3] The story follows an amateur detective who was transformed into a child while investigating a mysterious organization, and solves a multitude of cases while impersonating his friend's father and other characters.</P>
		</div>
	</section>
<!-- Header container -- >
<!--<section class="main_content">
	<div class="filter_content">Browse</div>
	<div class="video_list">Season</div>
</section>	-->

<div class="main_content clearfix">
	<ul class="filter_list">
		<h2>Browser</h2>
		<li>Adventure</li>
		<li>Romance</li>
		<li>Comedy</li>
		<li>Magic</li>
	</ul>
</div>
<div class="video_container">
	<div class="video_list_item">
		<div class="thumbnailcontainer">
			<img id="1" src="images/hero.jpg" alt="" style="width:160px;height:160px;">
		</div>
		<h2>My Hero Academia</h2>
		<div class="videobtncontainer"></div>
		<a href="1.html">
			<button>
				Watch Now
			</button>
		</a>
	</div>


	<div class="video_list_item">
		<div class="thumbnailcontainer">
			<img id="2" src="images/7.jpg" alt="" style="width:160px;height:160px;">
		</div>
		<h2>Overlord</h2>
		<div class="videobtncontainer"></div>
		<a href="2.html">
		<button>Watch Now</button>
		</a>
	</div>


	<div class="video_list_item">
		<div class="thumbnailcontainer">
			<img id="3" src="images/Gintama.jpg" alt="" style="width:160px;height:160px;">
		</div>
		<h2>Gintama</h2>
		<div class="videobtncontainer"></div>
		<a href="3.html">
		<button>Watch Now</button>
		</a>
	</div>
	<div class="video_list_item">
		<div class="thumbnailcontainer">
			<img id="4" src="images/nagi.jpg" alt="" style="width:160px;height:160px;">
		</div>
		<h2>Nagi no Asukara</h2>
		<div class="videobtncontainer"></div>
		<a href="4.html">
		<button>Watch Now</button>
		</a>
	</div>
	<div class="video_list_item">
		<div class="thumbnailcontainer">
			<img id="5" src="images/black-clover.jpg" alt="" style="width:160px;height:160px;">
		</div>
		<h2>Black Clover</h2>
		<div class="videobtncontainer"></div>
		<a href="5.html">
		<button>Watch Now</button>
		</a>
	</div>
	<div class="video_list_item">
		<div class="thumbnailcontainer">
			<img id="6" src="images/onepiece.jpg" alt="" style="width:160px;height:160px;">>
 		</div>
		<h2>One Piece</h2>
		<div class="videobtncontainer"></div>
		<a href="6.html">
		<button>Watch Now</button>
		</a>
	</div>
</div>
</body>

</html>
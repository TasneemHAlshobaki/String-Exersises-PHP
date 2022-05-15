<?php
include_once('../styles/css/styles.php');
include_once('../styles/js/javas.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome Icons-->
		<link rel="stylesheet" href="../styles/css/all.css">
	<!--------------------Owl-Carousel------------------------>
	<link rel="stylesheet" href="../styles/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../styles/css/owl.theme.default.min.css">
	<!-------AOS--------->
	<!--<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->
	<link rel="stylesheet" href="../styles/css/aos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboerd</title>
</head>
<body>

  
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="bi bi-columns-gap"></span>Admin</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="dashboard.php" class="active"><span class="bi bi-columns-gap"></span><span>Dashboerd</span></a>
        </li>
        <li>
          <a href="category.php"><span class="fa fa-tasks"></span><span>Category</span></a>
        </li>
        <li>
          <a href="stors.php"><span class="fas fa-shopping-basket"></span><span>Stors</span></a>
        </li>

        <li>
          <a href="contacts.php"><span class="fa fa-user"></span><span>Contacts</span></a>
        </li>
      </ul>
    </div>
  </div> 

  <div class="content">
    
    <header>
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Dashboerd</span></p>

      <div class="search-wrapper">
        <span class="fa fa-search"></span>
        <input type="search" name="" placeholder="search" />
      </div>

      <div class="user-wrapper" id="dropdown">
        <div>
          <h6>Tasneem</h6>
          <small>Admin</small>
        </div>
        
        <div class="dropdown-content">
        <p>MY profil</p>
        <p>Setting</p>
        </div>
        
      </div>
    </header>
<!--fas fa-copyright-->
    <main>
      <div class="cards">
        <div class="card-single">
          <div>
            <h2>10k</h2>
            <small>stores</small>
          </div>
          <div>
            <span class="fas fa-shopping-basket"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h2>+200k</h2>
            <small>visitor</small>
          </div>
          <div>
            <span class="fas fa-user-tie"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h2>20k</h2>
            <small>reviewer</small>
          </div>
          <div>
            <span class="fas fa-chart-line"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h2>+20</h2>
            <small>Categorys</small>
          </div>
          <div>
            <span class="fa fa-tasks"></span>
          </div>
        </div>
      </div>

  

















      <!----------------------------------Footer--------------------------------->
<footer class="footer">
	<div class="container">
		<div class="about-us" data-aos="fade-down-right">
			<h2>About us</h2>
			<p>A group of stores selling a variety of clothes, shoes and accessories
				<br>
				&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;( GOALS )
				<br>
				Satisfying customers and selling products at the lowest prices
			</p>
		</div>
		<div class="newsletter" data-aos="fade-down-right">
			<h2>Newsletter</h2>
			<p>Stay update with our latest</p>
			<div class="form-element">
				<input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
			</div>
		</div>
		<div class="instagram" data-aos="fade-down-left">
			<h2>Images</h2>
			<div class="flex-row">
				<img src="Uploads/public/p1.jpg" alt="p1" data-aos="flip-up">
        <img src="Uploads/public/p2.jpg" alt="p2" data-aos="flip-up">
        <img src="Uploads/public/p3.jpg" alt="p3" data-aos="flip-up">
			</div>
      <div class="flex-row">
				<img src="Uploads/public/p4.jpg" alt="p4" data-aos="flip-up">
        <img src="Uploads/public/p5.jpg" alt="p5" data-aos="flip-up">
        <img src="Uploads/public/p6.jpg" alt="p6" data-aos="flip-up">
			</div>
		</div>
		<div class="follow" data-aos="fade-down-left">
			<h2>Follow Me</h2>
			<p>Let us be Social</p>
			<div>
				<a href="https://www.facebook.com/gaza.eslam/"><i class="fab fa-facebook-f" data-aos="flip-down"></i></a>
				<a href="https://www.instagram.com/dev.tasneem_alshobaki5/"><i class="fab fa-instagram" data-aos="flip-down"></i></a>
				<a href="https://github.com/TasneemHAlshobaki"><i class="fa fa-github" style="color:#ffffff" data-aos="flip-down"></i></a>
				<a href="https://www.youtube.com/channel/UCEIa9uz27kmqBPri0Z8FrJA"><i class="fab fa-youtube"  data-aos="flip-down"></i></a>
			</div>
		</div>
	</div>
	<div class="rights flex-row" >
		<h6 class="text-gray" >Copyright <spam class="fas fa-copyright"></spam> 2020 All rights reserved | made by 
		<a href="https://github.com/TasneemHAlshobaki" target="_black" style="font-size:18px;color :#ffffff">Tasneem Hassan Al-shobaki<i class="fa fa-github" style="font-size:24px;color :#ffffff"></i> </a> </h6>
	</div>
	<div class="move-up">
		<span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
	</div>
</footer>


<!-----------------X----------------Footer-------------------X------------->



<!-- Jquery Library file -->
<script src="../styles/js/Jquery3.6.0.min.js">

</script>
<!--------------------Owl-Carousel js------------------------>
<script src="../styles/js/owl.carousel.min.js"></script>

<!-- Custom javascript -->
<script type="text/javascript" src="../styles/js/main.js"></script>


<!-------------AOS------------------>
<!--<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<script src="../styles/js/aos.js"></script>
</body>
</html>

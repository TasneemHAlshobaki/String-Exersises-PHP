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
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
          <h2><span class="bi bi-columns-gap"></span>Admin</h2>
        </div>
    
        <div class="sidebar-menu">
          <ul>
            <li>
              <a href="dashboard.php" ><span class="bi bi-columns-gap"></span><span>Dashboerd</span></a>
            </li>
            <li>
              <a href="category.php" class="active"><span class="fa fa-tasks"></span><span>Category</span></a>
            </li>
            <li>
              <a href=""><span class="fas fa-shopping-basket"></span><span>Stors</span></a>
            </li>
    
            <li>
              <a href=""><span class="fa fa-user"></span><span>Contacts</span></a>
            </li>
          </ul>
        </div>
      </div> 
</body>
</html>
 <?php 
include ("connect.php");
?> 

<!DOCTYPE HTML>
<html class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<!-- Basic Page Needs
  ================================================== -->
  <?php
                           
        $result = $db->prepare("SELECT * FROM settings");
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title><?php echo $row['site_title'];?></title>
  <link rel="icon" href="images/derraw.jpg" type="image/x-icon" />

  <meta name="keywords" content="<?php echo $row['site_keyword']; ?>" />
  <meta name="description" content="<?php echo $row['site_desc']; ?>"/>
  <meta name="author" content="">
  <?php echo $row['google_code']; ?>
  <?php } ?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" />
<!-- Color Style -->
<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">
<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=403202216515066";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>

<div class="body"> 
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="topbar"style="background-color:silver; ">
      <div class="container">
        <div class="row">
         <!-- <div class="col-md-4 col-sm-6 col-xs-8">-->
          <h1><a href="index.php">Derraw Adoption Agency
            <!--<h1 class="logo"> <a href="index.php"><img src="images/derraw.jpg"  alt="Logo"></a>-->
            </a>
            </h1>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">
            <ul class="top-navigation ">
            </ul>
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation"style="background-color:gold; ">
              <ul class="sf-menu">
                <li><a href="index.php">Home</a>
                 </li>
                <li><a>About Us</a>
				<ul class="dropdown">
                                    <li><a href="about.php">About Us</a></li>
                    <li><a href="our-excos.php">Executives</a></li>
                  </ul>
                </li>
                 <li><a>Adoption</a>
				<ul class="dropdown">
                                    <li><a href="adoption.php">Policies & Guidelines</a></li>
                    <li><a href="apply.php">Apply</a></li>
                  </ul>
                </li>
                 <li><a href="events.php">Events</a>
                  
                </li>
                <li><a href="news-updates.php">News Update</a>
                </li>
                <li><a href="gallery.php">Gallery</a>
                </li>
                <li><a href="contact.php">Contact Us</a> </li>
				</ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
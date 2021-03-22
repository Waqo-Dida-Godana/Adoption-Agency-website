
  <footer class="site-footer"style="background-color:silver; " >
    <div class="container" >
      <div class="row"> 
        <!-- Start Footer Widgets -->
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">About </h4>
          <img src="images/derraw.jpg" style="width:100px; height:100px;" alt="Logo"></style>
		  <?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
          <div class="spacer-20"></div>
        <?php echo strip_tags(substr($row['body'],0,180)) ;?>...  <a href="about.php">Read More</a>
		  <?php } ?>
		</div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="events.php">All Events</a></li>
            <li><a href="news-updates.php">News Update</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
		 <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Contact Information</h4>
            <ul>
               <li><i class="fa fa-phone"></i>  <?php echo $row['phone']; ?></li>
               <li><i class="fa fa-list"></i>   <?php echo $row['linkedin']; ?></li>
               <li><i class="fa fa-envelope"></i>  <?php echo $row['email']; ?>
</li>

            </ul>
        </div>
		<div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">FOLLOW US</h4>
         <div class="img_list">
            <ul>
               <li><img src="images/28.png" alt=""><a href="#"> Join Us on Facebook</a></li>
               <li><img src="images/twitter.png" alt=""><a href="#"> Follow Us on Twitter</a></li>
               <li><img src="images/39.png" alt=""><a href="#"> Share Us on Twitter</a></li>
            </ul>
        </div>
        </div>
    
      </div>
    </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
        <p> &copy; derraw adoption agency|| <script>document.write(new Date().getFullYear());</script> || All Rights Reserved.</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          <div class="social-icons"> <a href="https://www.facebook.com/<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/<?php echo $row['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://instagram.com/<?php echo $row['status']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
	<?php } ?>
  </footer>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src="style-switcher/js/jquery_cookie.js"></script> 
<script src="style-switcher/js/script.js"></script> 

</body>

<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:08:50 GMT -->
</html>
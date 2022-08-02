  <?php
    include "../../profile/config.php";
    include "../../find/logic.php";

    session_start();
    
?>


<!DOCTYPE html>

<!--
Website made by GeoDash Software 2021
Licensed under an AGPL v3 GNU license
If you want to clone the website,
go to the GitHub repo (link in the footer).
But remember the terms in the license
and respect them when modifying/distributing
the copy.
-->

<html>
<head>
  <meta charset="utf-8">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Check this GDPS">
  <meta property="og:description" content="Look at this and many other gdpses!">
  <meta id="meta-image" property="og:image" itemprop="image" content="https://cdn.discordapp.com/attachments/839834610799607818/857226098201722891/video_si.gif">
  <meta name="referrer" content="no-referrer">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <meta name="author" content="GeoDash Software">
  <meta name="keywords" content="geometry,dash,gdps,advertise,advertising,gmd,gd,game,top,2.113">
  <meta name="description" content="GDPS Hub">
  <meta name="viewport" content="width=device-width">
  <title>GDPS Hub</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/mobile.css">
  <link rel="stylesheet" href="../../css/gdpspage.css">
  <script src="../../Lc.js"></script>
  <script src="../../script.js"></script>
  <link rel="icon" href="../../assets/brand-assets/logo-ico.ico">
  <script>function notAv() {alert('Not available yet.');}</script>
</head>
<body>
  <div class="device-too-smol">
    <h1 style="font-size: 100px;">;(</h1>
    Sorry, but your screen resolution is too small to display the website.
    We recommend you to zoom out or rotate your device in case you are in mobile.<br>
    TIP: Use a screen with at least 500 pixels of width.
  </div>  <div class="cookie-container">
    <img src="../../assets/cookies.png" height="64px">
    <p>This website uses cookies. By navigating and using the website means you accept them.</p>
    <button class="cookie1">Ok, got it</button>&nbsp;&nbsp;<button class="cookie1" onclick="location.href = './tos/';">Know more</button>
    <script src="../../Lc.js"></script>
  </div>

  <nav>
    <img src="../../assets/brand-assets/logo.png">
    <span></span>
    <a href="../.." class="nav-link">Home</a>
    <a href="../../find/" class="nav-link">Find</a>
    <a href="../../download/" class="nav-link">Download</a>
    <a href="../../tos/" class="nav-link">Terms</a>
    <a href="../../about/" class="nav-link">About</a>
    <a onclick="openProfile()" class="nav-link prof">Profile</a>
  </nav>

  <div id="profileBox" class="profile-box">
    <span><h1>Member</h1></span>
    <hr style="margin: 20px;">
    <a href="../../profile/register.php">My Profile</a>
    <a href="../../profile/gdps/manager.php">My GDPSs</a>
    <hr style="margin: 20px;">
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
  </div>

  <separate /><p><br></p>

  <?php foreach($query as $q){?>

    <div class="gp-content">

      <!-- PC -->

        <div class="gp-pc-content">

          <div class="gp-links">


              <h3>Download</h3>
              <a href="<?php echo $q['pcdown'];?>" class="gp-button download-btn-link">Download for PC</a>
              <a href="<?php echo $q['mobiledown'];?>" class="gp-button download-btn-link">Download for Mobile</a>

              <h3>Discord</h3>
              <a href="http://discord.gg/<?php echo $q['gdpsdiscord']?>" class="gp-button">Discord server</a>
              <a href="<?php echo $q['otherlinks'];?>" class="gp-button">other links</a>
                <div class="d-flex mt-2 justify-content-center align-items-center">
</div>
              <div class="gp-rating">
                  <h3>Rating</h3>
                  <span class="gp-rat-num"><?php echo $q['rating'];?></span><span class="gp-rat-outof">/5</span><br>
              </div>
</div>


          <img src="<?php echo '../../uploads/'. $q['icon1'];?>" class="gp-logo">
          <h1 class="gp-title"><?php echo $q['title'];?> 
	 <img src="<?php echo $q['verified'];?>" class="gp-v"> <img src="<?php echo $q['partnered'];?>" class="gp-v"></h1> 
          <h3 class="gp-author">Uploaded by <?php echo $q['postedby'];?></h3>

          <p class="gp-desc">
          <?php echo $q['content'];?>
          </p>
          <p class="gp-desc">
              Coming soon<br>
              <br><i style="font-size: smaller;">coming soon</i>
              </p>  


              
              <style type="text/css">
body {
    background-image: url('<?php echo $q['banner'];?>');
}
 

</div>




        <!-- <img src="../../assets/gdps/verified.png" title="Verified GDPS" class="gp-v"> -->


        <!-- MOBILE -->

        <div class="gp-mobile-content">

          <img src="../../assets/gdps/gdps-logo.png" class="gp-logo">
                  <h1 class="gp-title"><?php echo $q['title'];?></h1>
          <h3 class="gp-author">UNKNOWN</h3>
          <div class="gp-links">
            <h3>Download</h3>
            <a href="<?php echo $q['mobiledown'];?>" class="gp-button download-btn-link">Download for Android</a>
            <a href="http://discord.gg/<?php echo $q['gdpsdiscord']?>" class="gp-button">Discord server</a>

            <h3>Website and others</h3>
            <a href="<?php echo $q['otherlinks'];?>" class="gp-button">Other link</a>

            <div class="gp-rating">
                <h3>Rating</h3>
                <span class="gp-rat-num"><?php echo $q['rating'];?></span><span class="gp-rat-outof">/5</span><br>
            </div>

            <p class="gp-desc">
          <?php echo $q['content'];?>

           </p>
                  <h4 style="text-align: center;">Thanks for using GDPS Hub</h4>

        </div>

      </div>

    </div>
    <?php } ?>    

</body>
</html>
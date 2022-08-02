<?php

    include "../config.php";
    include "../../find/auth.php";
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE publish_data set id='" . $_POST['id'] . "', title='" . $_POST['title'] . "', content='" . $_POST['content'] . "', gdpsdiscord='" . $_POST['gdpsdiscord'] . "', pcdown='" . $_POST['pcdown'] . "' , mobiledown='" . $_POST['mobiledown'] . "' WHERE id='" . $_POST['id'] . "'");
        $message = "GDPS Modified Successfully";
        }
        $result = mysqli_query($conn,"SELECT * FROM publish_data WHERE id='" . $_GET['id'] . "'");
        $row= mysqli_fetch_array($result);

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
  <meta property="og:site_name" content="GDPS Hub">
  <meta property="og:type" content="website">
  <meta property="og:title" content="GDPS Hub">
  <meta property="og:description" content="Welcome to the official GDPS Hub server. Here you can advertise your GDPS without need of publishing in other platforms.">
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
  <script src="Lc.js"></script>
  <script src="../script.js"></script>
  <link rel="icon" href="../assets/brand-assets/logo-ico.ico">
</head>
<body>
  <div class="device-too-smol">
    <h1 style="font-size: 100px;">;(</h1>
    Sorry, but your screen resolution is too small to display the website.
    We recommend you to zoom out or rotate your device in case you are in mobile.<br>
    TIP: Use a screen with at least 500 pixels of width.
  </div>
  <div class="cookie-container">
    <img src="assets/cookies.png" height="64px">
    <p>This website uses cookies. By navigating and using the website means you accept them.</p>
    <button class="cookie1">Ok, got it</button>&nbsp;&nbsp;<button class="cookie1" onclick="location.href = './tos/';">Know more</button>
    <script src="../../../Lc.js"></script>
  </div>
  <nav>
    <img src="../assets/brand-assets/logo.png">
    <span></span>
    <a href="../.." class="nav-link">Home</a>
    <a href="../find/" class="nav-link">Find</a>
    <a href="../download/" class="nav-link">Download</a>
    <a href="../tos/" class="nav-link">Terms</a>
    <a href="../about/" class="nav-link">About</a>
    <a onclick="openProfile()" class="nav-link prof">Profile</a>
  </nav>

  <div id="profileBox" class="profile-box">
    <span><h1><?php echo $_SESSION['username']?></h1></span>
    <hr style="margin: 20px;">
    <a href="../profile/">My Profile</a>
    <a href="../profile/gdps/manager.php">My GDPSs</a>
    <hr style="margin: 20px;">
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
    <a class="red-close-text" href="logout.php">Logout</a>

  </div>

  <separate /><p><br></p>

  <h1 style="margin-left: 30px;">My Profile</h1>

  <div class="prof-left-menu">
      <a href="#" onclick="alrHere()">My Profile</a>
      <p>
      <a href="../profile/gdps/manager.php">My GDPSs
</a>
      <p>
      <a href="#new">Publish a GDPS</a>
  </div>
  <div class="prof-right-content">
      <h2>My info</h2>
      <ul>
          <li><strong>Name:</strong> <?php echo $_SESSION['username']?></li>

      </ul>
      

      <div id="new" class="new-gdps-div">
          <h2>Update a GDPS</h2>
          <p>
              Fill these fileds to update your GDPS!
          </p>
          <form action="" class="new-gdps-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="size" value="1000000">
          <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
          <h4>Provide Basic Info of your GDPS</h4>
              <input name="title"  class="ngf-short-text" placeholder="GDPS Title*" minlength = "5" maxlength = "20" value="<?php echo $row['title']; ?>" required ><br>
             <input name="gdpsdiscord" class="ngf-short-text" placeholder="Discord server invite link" value = "<?php echo $row['gdpsdiscord'];?>"><br>
              <textarea name="content" class="ngf-short-text ngf-desc" placeholder="A description for your GDPS*" minlength = "20" required><?php echo $row['content'];?></textarea><p>
              <h4>Provide the download links of your GDPS</h4>
              <input name="pcdown" class="ngf-short-text" placeholder="PC Download Link*" value="<?php echo $row['pcdown']; ?>" required><br>
              <input name="mobiledown" class="ngf-short-text" placeholder="Mobile Download Link" value="<?php echo $row['mobiledown']; ?>"><br>
              <input name="otherlinks" class="ngf-short-text" placeholder="Other Links" value="<?php echo $row['otherlinks']; ?>" required><br>


              <button name="submit" class="ngf-publish">Update!</button>
 
          

 

         </form>
      </div>
  </div>

  <div class="prof-end-margin"></div>

  <footer>
    <h2>Made by GeoDash Software, 2021</h2>
    <ul>
      <li><a href="../find/" class="text-link">Find GDPSes</a></li>
      <li><a href="../download/" class="text-link">Download client</a></li>
      <li><a href="../faq/" class="text-link">Frequently Asked Questions</a></li>
      <br>
      <li><a href="../branding/" class="text-link">Branding & Press assets</a></li>
      <li><a href="../discord/" class="text-link">Discord server</a></li>
      <br>
      <li><a href="../tos/" class="text-link">Terms of Service</a></li>
      <li><a href="../about/" class="text-link">About us</a></li>
    </ul>
    <script src="../find/blacklist.js"></script>

  </footer>

</body>
</html>
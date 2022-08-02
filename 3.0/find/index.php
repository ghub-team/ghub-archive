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
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/mobile.css">
  <script src="Lc.js"></script>
  <script src="../script.js"></script>
  <link rel="icon" href="../assets/brand-assets/logo-ico.ico">
  <script>function notAv() {alert('Not available yet.');}</script>
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
    <script src="../Lc.js"></script>
  </div>
  <nav>
    <img src="../assets/brand-assets/logo.png">
    <span></span>
    <a href="/find/" class="nav-link">Find</a>
    <a href="/download/" class="nav-link">Download</a>
    <a href="/tos/" class="nav-link">Terms</a>
    <a href="/about/" class="nav-link">About</a>
    <a onclick="openProfile()" class="nav-link prof">Profile</a>
  </nav>

  <div id="profileBox" class="profile-box">
    <span><h1>Member</h1></span>
    <hr style="margin: 20px;">
    <a href="../profile/register.php">My Profile</a>
    <a href="../profile/mygdps/">My GDPSes</a>
    <hr style="margin: 20px;">
    <h3>Badges:</h3>
    <img src="../assets/verified.png">
    <img src="../assets/mod.png">
    <img src="../assets/owner.png"><p>
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
  </div>

  <separate /><p><br></p>

    <h1 class="title">Find</h1>
    <input type="text" class="search-bar" placeholder="Search for a GDPS..." />
    <div class="gdps-container" id="searchList">
    <?php /* foreach($query as $q){ */ ?>
      <div class="gdps-box">
        <img src="../assets/bg.jpg" class="gdps-banner">
        <img src="../assets/brand-assets/logo.png" class="gdps-pic">

        <span class="gdps-name"><?php echo $q['title'];?> |
                             <span class="gp-rat-num"><?php echo $q['rating'];?></span><span class="gp-rat-outof">/5 stars</span><br>
</span>
       <p class="gdps-desc"><?php echo substr($q['content'], 0, 150);?>...
        </p><br>
        <a href="../gdps/0/index.php?id=<?php echo $q['id']?>" class="gdps-link">Read more</a><a href="http://discord.gg/<?php echo $q['gdpsdiscord']?>" class="gdps-discord" >Discord server</a>
  </div>
 
      <?php /* } */?>
      </ul>

      <h3>Looks like you've reached the end of the page :)</h3>
    </div>

  <footer style="margin-top: 30px;">
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
  </footer>
</body>
</html>

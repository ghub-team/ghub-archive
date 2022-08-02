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
  <link rel="icon" href="../assets/brand-assets/logo-ico.ico">
  <script src="../script.js"></script>
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
    <span><h1>$username</h1></span>
    <hr style="margin: 20px;">
    <a href="../profile/">My Profile</a>
    <a href="../profile/mygdps/">My GDPSes</a>
    <hr style="margin: 20px;">
    <h3>Badges:</h3>
    <img src="../assets/verified.png">
    <img src="../assets/mod.png">
    <img src="../assets/owner.png"><p>
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
  </div>

  <separate /><p><br></p>

    <center>
        <h1 class="title">Register</h1>
        <form class="new-gdps-form">
            <input type="text" class="ngf-short-text" placeholder="Username" required autocomplete="username"><br>
            <input type="text" class="ngf-short-text" placeholder="Valid e-mail address" required autocomplete="email"><br>
            <input type="password" class="ngf-short-text" placeholder="Password" required autocomplete="new-password"><br>
            <input type="password" class="ngf-short-text" placeholder="Repeat the password" required autocomplete="new-password"><p>
            <button type="submit" class="ngf-publish">Create account</button><p></p>
        </form><br>
        Have an account? Then go <a href="register.html" class="text-link">log in</a>.
    </center>
</body>
</html>
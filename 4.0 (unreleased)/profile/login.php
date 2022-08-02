<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
	$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}


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
    <a href=".." class="nav-link">Home</a>
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
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
  </div>

  <separate /><p><br></p>

  <form action="" method="POST" class="login-email">

    <center>
        <h1 class="title">Login</h1>
        <form class="new-gdps-form">
        <form action="" method="POST">
            <input type="email" class="ngf-short-text" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
            <input type="password" class="ngf-short-text" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><p>
            <button name="submit" class="ngf-publish">Log in</button><p></p>
        </form><br>
        New here? Then you have to <a href="register.php" class="text-link">register</a> first.
    </center>
</body>
</html>
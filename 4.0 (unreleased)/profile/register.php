<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_SESSION['username'])) {
    header("Location: index.php");
}


if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {

    $secret = '6LfRjgMdAAAAACnlOoT6QBHNbLDLi5wcSkMaPBEP';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {



	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
/*
		$password1 = Password_hash($password, PASSWORD_DEFAULT);*/

		if (!$result->num_rows > 0) {

			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registration Done, login now')</script>";


				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";

			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
}
?>

</html>


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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    <a href="../profile/gdps/manager.php">My GDPSs</a>
    <hr style="margin: 20px;">
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
  </div>

  <separate /><p><br></p>

		<form action="" method="POST" class="login-email">
    <center>
        <h1 class="title">Register</h1>
        <form class="new-gdps-form">
				<input type="text" class="ngf-short-text" placeholder="Username" name="username" value="<?php echo $username; ?>" maxlength = "12" required><br>
				<input type="email" class="ngf-short-text" placeholder="Email" name="email" value="<?php echo $email; ?>"  required><br>
				<input type="password" class="ngf-short-text" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
				<input type="password" class="ngf-short-text" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required><br>
            		     <br />       

<div style="text-align: center;">
    <div
        class="g-recaptcha" 
        data-sitekey="6LfRjgMdAAAAAEMOHyK6x8NIkRgK1zd8f1fEAMo_" 
        style="display: inline-block;"
    ></div>
</div>
   		            		     <br />       
		
  <button name="submit" class="ngf-publish">Register</button>
        </form><br>
     <br />
        Have an account? Then go <a href="login.php" class="text-link">log in</a>.
    </center>
    <div class="cookie-container">
    <img src="assets/cookies.png" height="64px">
    <p>This website uses cookies. By navigating and using the website means you accept them.</p>
    <button class="cookie1">Ok, got it</button>&nbsp;&nbsp;<button class="cookie1" onclick="location.href = './tos/';">Know more</button>
    <script src="../Lc.js"></script>
  </div>
</body>
</html>
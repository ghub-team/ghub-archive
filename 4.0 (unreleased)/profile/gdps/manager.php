<?php

include("../../find/logic.php");
include("delete.php");
include("update.php");
    
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
  <script src="../../script.js"></script>
  <link rel="icon" href="../../assets/brand-assets/logo-ico.ico">
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
    <script src="../../Lc.js"></script>
  </div>
  <nav>
    <img src="../../assets/brand-assets/logo.png">
    <span></span>
    <a href="../.." class="nav-link">Home</a>
    <a href="../../find/" class="nav-link">Find</a>
    <a href="../..download/" class="nav-link">Download</a>
    <a href="../../tos/" class="nav-link">Terms</a>
    <a href="../../about/" class="nav-link">About</a>
    <a onclick="openProfile()" class="nav-link prof">Profile</a>
  </nav>

  <div id="profileBox" class="profile-box">
    <span><h1><?php echo $_SESSION['username']?></h1></span>
    <hr style="margin: 20px;">
    <a href="../../profile/">My Profile</a>
    <a href="../../../profile/gdps/manager.php">My GDPSs</a>
    <hr style="margin: 20px;">
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
    <a class="red-close-text" href="logout.php">Logout</a>

  </div>

  <separate /><p><br></p>

  <h1 style="margin-left: 30px;">My Profile</h1>

  <div class="prof-left-menu">
      <a href="../index.php">My Profile</a>
      <p>
      <a href="#" onclick="alrHere()">My GDPSes</span> </a>
      <p>
      <a href="../index.php#new">Publish a GDPS</a>
  </div>
  <div class="prof-right-content">
      <h2>My info</h2>
      <ul>
          <li><strong>Name:</strong> <?php echo $_SESSION['username']?></li>
      </ul>

      <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="GetGDPS" class="ngf-short-text" placeholder="Search GDPSs">
                                        <button type="submit" class="btn btn-primary">Load GDPSs</button>
                                    </div>
                                    <h2>My GDPSs:</h2>

                                </form>
                                                            </div>


                                                            <div class="gdps-container">


  <?php 

                                    $con = mysqli_connect("sql2.7m.pl","blazen1_gdpshub3","gk2d5vpiyuav2qcw","blazen1_gdpshub3");

                                    if(isset($_GET['GetGDPS']))
                                    {
                                        $managervalue = $_SESSION['username'];
                                        $query = "SELECT * FROM publish_data WHERE CONCAT(postedby) LIKE '%$managervalue%' ORDER BY created_at DESC";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                           

                                                ?>
                                                 <div class="gdps-box">
                                                
          <center>
                                                


                                                 <img src=" <?= $items['banner']; ?>" class="gdps-banner"> 
                                                 <img src=" <?='../../uploads/'. $items['icon1']; ?> " class="gdps-pic"> 
                                                 <span class="gdps-name"><?php echo $items['title'];?> |
                                                <span><?php echo $items['rating'];?> </span><span class="gp-rat-outof">/5</span><br>   </span>
                                                <span class="gdps-desc">Uploaded by <?php echo $items['postedby'];?></span>
                                                  <p class="gdps-desc"><?php echo substr($items['content'], 0, 100);?>...</p><br>
                                                  <a href="../../gdps/0/index.php?id=<?php echo $items['id']?>" class="gdps-link">Read more</a>
                                                <a href="http://discord.gg/<?php echo $items['gdpsdiscord']?>" class="gdps-discord" >Discord server</a>
                                                <br>
                                                <br>
                                                <br>
                                                <a href="edit.php?id=<?php echo $items['id']; ?>" class="gdps-discord" >Edit GDPS</a>
                                                  <a href="delete.php?del=<?php echo $items['id']; ?>" class="gdps-delete">Delete GDPS</a>

                                                    </div>
                                                    </center>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                        
                                                    <p colspan="4">No GDPSs Found</p>
                                              
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
  </footer>

</body>
</html>
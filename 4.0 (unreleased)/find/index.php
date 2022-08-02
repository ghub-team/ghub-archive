<?php

    include "logic.php";
    include "../../profile/config.php";
	
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
    <button class="cookie1">Ok, got it</button>&nbsp;&nbsp;
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
    <a href="../profile/gdps/manager.php">My GDPSs</a>
    <hr style="margin: 20px;">
    <h3>Badges:</h3>
    <a onclick="closeProfile()" class="red-close-text">Close popout</a>
  </div>
  <separate /><p><br></p>
 
    <h1 class="title">Find</h1>

<center>

<form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="ngf-short-text" placeholder="Search GDPSs">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>


                            
                            </thead>
                            <tbody>
                              </center>
                              <div class="gdps-container">
                                <?php 


/*   <div class="gdps-container">
<?php foreach($query as $q) { ?>

    <div class="gdps-box">


           
    <img src="<?php echo $q['banner'];?>" class="gdps-banner"> 
    <img src="<?php echo '../uploads/'. $q['icon1'];?> height='130' width='150' " class="gdps-pic"> 
    <img src='" . $row['imglink'] . "' height='130' width='150'> ";


           
      <span class="gdps-name"><?php echo $q['title'];?> |
      <span><?php echo $q['rating'];?> </span><span class="gp-rat-outof">/5</span><br> 
</span>
     <p class="gdps-desc"><?php echo substr($q['content'], 0, 100);?>...
      </p><br>
      <a href="../gdps/0/index.php?id=<?php echo $q['id']?>" class="gdps-link">Read more</a>
      <a href="http://discord.gg/<?php echo $q['gdpsdiscord']?>" class="gdps-discord" >Discord server</a>

    </div>
    */
                                    $con = mysqli_connect("sql2.7m.pl","blazen1_gdpshub3","gk2d5vpiyuav2qcw","blazen1_gdpshub3");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM publish_data WHERE CONCAT(title,content,banner,icon1,rating,gdpsdiscord,postedby) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                           

                                                ?>
                                                


                                                 <div class="gdps-box">


                                                 <img src=" <?= $items['banner']; ?>" class="gdps-banner"> 
                                                 <img src=" <?='../uploads/'. $items['icon1']; ?> " class="gdps-pic"> 


                                                 <span class="gdps-name"><?php echo $items['title'];?> |
                                                <span><?php echo $items['rating'];?> </span><span class="gp-rat-outof">/5</span><br>   </span>


                                                <span class="gdps-desc">Uploaded by <?php echo $items['postedby'];?></span>

                                                  <p class="gdps-desc"><?php echo substr($items['content'], 0, 100);?>...</p><br>
                                                  <a href="../gdps/0/index.php?id=<?php echo $items['id']?>" class="gdps-link">Read more</a>
                                                  <a href="http://discord.gg/<?php echo $items['gdpsdiscord']?>" class="gdps-discord" >Discord server</a>

                                                    </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                              <center>
                                        
                                                    <p colspan="4">No GDPSs Found</p>
                                              
                                                </center>
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
    </div>






    <form style="margin-left: 11.5vw;">
    </form>

    <div class="gdps-container">
    <?php foreach($query as $q) { ?>

      <div class="gdps-box">


             
      <img src="<?php echo $q['banner'];?>" class="gdps-banner"> 
      <img src="<?php echo '../uploads/'. $q['icon1'];?>" class="gdps-pic"> 

  
             
        <span class="gdps-name"><?php echo $q['title'];?> |
        <span><?php echo $q['rating'];?> </span><span class="gp-rat-outof">/5</span><br> 
        <span class="gdps-desc">Uploaded by <?php echo $q['postedby'];?></span>
       
</span>
       <p class="gdps-desc"><?php echo substr($q['content'], 0, 100);?>...
        </p><br>
        <a href="../gdps/0/index.php?id=<?php echo $q['id']?>" class="gdps-link">Read more</a>
        <a href="http://discord.gg/<?php echo $q['gdpsdiscord']?>" class="gdps-discord" >Discord server</a>

  
      </div>
  
  
   <?php  }?>
 


</ul><h3>hi :D</h3></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



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


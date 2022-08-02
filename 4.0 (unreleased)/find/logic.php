<?php





session_start();
//if(!isset($_SESSION["username"])){
    //exit(); }

// Don't display server errors 
ini_set("display_errors", "off");

// Initialize a database connection
$conn = mysqli_connect("sql2.7m.pl", "blazen1_gdpshub3", "gk2d5vpiyuav2qcw", "blazen1_gdpshub3");

// Get data to display on index page
$sql = "SELECT * FROM publish_data ORDER BY created_at DESC";
$query = mysqli_query($conn, $sql);	
$tableb = "publish_data";

// Create a new post
if(isset($_REQUEST['new_post']) && $_POST['g-recaptcha-response'] != "") {
	

    $secret = '6LfRjgMdAAAAACnlOoT6QBHNbLDLi5wcSkMaPBEP';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {

	$title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $gdpsdiscord = $_REQUEST['gdpsdiscord'];
    $pcdown = $_REQUEST['pcdown'];
    $mobiledown = $_REQUEST['mobiledown'];
    $otherlinks = $_REQUEST['otherlinks'];
    $verified = "../../assets/blank.png";
    $partnered = "../../assets/blank.png";
    $rating = 0;
    $banner = 'https://cdn.discordapp.com/attachments/850361491018088498/864445156296359966/bg.jpg';
   
    $icon1 = $_FILES['icon1']['name'];
    $target = "../uploads/".basename($icon1);
    $postedby = $_SESSION["username"];
  
if (file_exists($target)) {
    echo "File already Exists in our database.";
}

$file_type = $_FILES['icon1']['type']; //returns the mimetype

$allowed = array("image/jpeg", "image/png", "image/jpg");
if(!in_array($file_type, $allowed)) {
  $error_message = 'Only jpg, png, and jpeg files are allowed.';
  $error = 'yes';
}

    $sql = "INSERT INTO publish_data (title, content, gdpsdiscord, pcdown, mobiledown, otherlinks, rating, icon1, banner, verified, partnered, postedby) VALUES('$title', '$content', '$gdpsdiscord', '$pcdown', '$mobiledown', '$otherlinks', '$rating', '$icon1', '$banner', '$verified', '$partnered', '$postedby')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['icon1']['tmp_name'], $target)) {
        $msg = "GDPS Posted successfully";

    } else {
        echo "A error has occured uploading.";
    }


		echo $sql;

		header("Location: ../find/index.php?info=added");
		exit();
	}

}
// Get post data based on id
	if(isset($_REQUEST['id'])){

		$id = $_REQUEST['id'];
		$sql = "SELECT * FROM publish_data WHERE id = $id";
		$query = mysqli_query($conn, $sql);
	}
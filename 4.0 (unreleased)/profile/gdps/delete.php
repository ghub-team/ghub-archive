<?php

include "../../find/logic.php";
   
    // Delete a post
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($conn, "DELETE FROM publish_data WHERE id=$id");
        $_SESSION['message'] = "GDPS Deleted"; 
        header('location: manager.php?GetGDPS=');
    }


?>
function openProfile(){document.getElementById("profileBox").style.display="initial";}
function closeProfile(){document.getElementById("profileBox").style.display="none";}
function notAv() {alert('Not available yet.');}
function alrHere() {alert("You're already here!");}

// Search function for /find/index.php

function search() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {

        // More variables
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;

        //Code
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        }
        else {
            li[i].style.display = "none";
        }
    }
}
<!DOCTYPE html>
<html>
<title>Vehicle Hire</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">HOME</a>
		<div class="w3-dropdown-hover w3-hide-small" style="float: right;">
      		<button class="w3-padding-large w3-button" >{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></button>     
      		<div class="w3-dropdown-content w3-bar-block w3-card-4">
        		<a href="{{ route('logout') }}" class="w3-bar-item w3-button" 		onclick="event.preventDefault();
	             	document.getElementById('logout-form').submit();">
	    			Logout
	    		</a>
	    		<form id="logout-form" action="{{ route('logout') }}" method="		POST" style="display: none;">{{ csrf_field() }}
	            </form>
      		</div>
    	</div>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class ="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <h3> Developed By</h3>
    <h3> Shahabuddin Ahmed</h3>
    <h3>University of Rajshahi</h3>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

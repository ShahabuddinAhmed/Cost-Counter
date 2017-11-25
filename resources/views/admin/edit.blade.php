<!DOCTYPE html>
<html>
<head>
    <title>Edit Debit & Credit</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>

<script>
    if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
        jQuery(function($){ //on document.ready
            $('#start_date').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        })
    }
</script>
</head>
<style>
a
{
    text-decoration: none;
}
body
{
    height: 800px;
}
select
{
    width: 100%;
    height: 35px;
}
footer{
  position: justify;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        
        <a href="/" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">HOME</a>
        
        <a href="/home" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">Back</a>
        </div>
    </div>
</div>


    <div class="container">
      	<br>
      	<br>
      	<br>
      	<br>
	    @if($flag == "debit")
	    	<div class="row">
	            <h3 style="text-align: center;">User's Debit Info</h3>
	            <div class="col-sm-3"> </div>
	            <div class="col-sm-6">
	                <form action="{{"/update-dr/".$edit->id}}" method="post">
	                    {{ csrf_field() }}
	                    <div class="form-group">
                        	<label>Edit Date</label>
                        	<input id="start_date" type="date" required="" class="form-control" placeholder="Select Date..." name="day" value="{{ $edit->date}}">
                    	</div>
	                    
	                    <div class="form-group">
	                        <label>Edit Debiter's Name</label>
	                        <input type="text" required="" class="form-control" placeholder="Enter debiter's Name..." name="name" value="{{ $edit->name }}">
	                    </div>

	                    <div class="form-group">
	                        <label>Edit Amount</label>
	                        <input type="text" required="" class="form-control" placeholder="Enter debit Cost..." name="cost" value="{{ $edit->debit }}">
	                    </div>
	                    
	                    <button type="submit" class="btn btn-default">Submit</button>
	                </form>
	            </div>
	            <div class="col-sm-3">

	            </div>
	        </div>
	    @else
	        <div class="row">
	            <h3 style="text-align: center;">User's Credit Info</h3>
	            <div class="col-sm-3"> </div>
	            <div class="col-sm-6">
	                <form action="{{"/update-cr/".$edit->id}}" method="POST">
	                    {{ csrf_field() }}
	                    <div class="form-group">
	                        <label>Select Date</label>
	                        <input id="start_date" type="date" required="" class="form-control" placeholder="Select Date..." name="day" value="{{ $edit->date}}">
	                    </div>
	                    
	                    <div class="form-group">
	                        <label>Crediter's Name</label>
	                        <input type="text" required="" class="form-control" placeholder="Enter crediter's Name..." name="name" value="{{ $edit->name}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Amount</label>
	                        <input type="text" required="" class="form-control" placeholder="Enter credit Cost..." name="cost" value="{{ $edit->credit }}">
	                    </div>
	                    
	                    <button type="submit" class="btn btn-default">Submit</button>
	                </form>
	            </div>
	            <div class="col-sm-3">

	            </div>
	        </div>
	    @endif
    </div>




{{-- <!-- Navbar on small screens -->
<div id="navDemo" class ="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="/" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">HOME</a>
        <a href="/" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">View Cost Info</a>
        <div style="float: right;">
            <a href="#" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"     style="display: none;">{{ csrf_field() }}
            </form>
</div> --}}


<!-- Footer -->

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

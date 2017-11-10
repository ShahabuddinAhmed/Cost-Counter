<!DOCTYPE html>
<html>
<head>
    <title>Cost Counter</title>
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
        <div class="w3-dropdown-hover">
            <button class="w3-padding-large w3-button" title="More">View Monthly Cost Info<i class="fa fa-caret-down"></i></button>     
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a style="text-decoration: none;text-align: center;" href="/jan" class="w3-bar-item w3-button">Jan</a>
                <a style="text-decoration: none;text-align: center;" href="/feb" class="w3-bar-item w3-button">Feb</a>
                <a style="text-decoration: none;text-align: center;" href="/mar" class="w3-bar-item w3-button">Mar</a>
                <a style="text-decoration: none;text-align: center;" href="/apr" class="w3-bar-item w3-button">Apr</a>
                <a style="text-decoration: none;text-align: center;" href="/may" class="w3-bar-item w3-button">May</a>
                <a style="text-decoration: none;text-align: center;" href="/jun" class="w3-bar-item w3-button">Jun</a>
                <a style="text-decoration: none;text-align: center;" href="/jul" class="w3-bar-item w3-button">Jul</a>
                <a style="text-decoration: none;text-align: center;" href="/aug" class="w3-bar-item w3-button">Aug</a>
                <a style="text-decoration: none;text-align: center;" href="/sep" class="w3-bar-item w3-button">Sep</a>
                <a style="text-decoration: none;text-align: center;" href="/oct" class="w3-bar-item w3-button">Oct</a>
                <a style="text-decoration: none;text-align: center;" href="/nov" class="w3-bar-item w3-button">Nov</a>
                <a style="text-decoration: none;text-align: center;" href="/dec" class="w3-bar-item w3-button">Dec</a>
            </div>
        </div>
        <div style="float: right;">
            <a href="#" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"     style="display: none;">{{ csrf_field() }}
            </form>
        </div>
        </div>
    </div>
</div>


    <div class="container">
        <div class="row">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div>
                <h4><marquee>রাত ১০টা থেকে ১১টা পর্যন্ত সার্ভার বন্ধ থাকায়  এই সময়ে সাইটটি ব্যবহার করা যাবে না। সাময়িক অসুবিধার জন্য আন্তরিকভাবে দুঃখিত।</marquee></h4>
            </div>
            <br>
            <div class="col-sm-3">
                
            </div>
            <div class="col-sm-6">
                @if(session()->has("success"))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Success!</strong> {{ session()->get("success") }}
                    </div>
                @endif
            </div>
            
            <div class="col-sm-3">

            </div>
        </div>
        <div class="row">

            
            <div class="col-sm-3"> </div>
            <div class="col-sm-6">
                <form action="/info" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Date</label>
                        <input id="start_date" type="date" required="" class="form-control" placeholder="Select Date..." name="day">
                    </div>

                    <div class="form-group">
                        <label>Select Month</label>
                        <br>
                        <select name="month" required="">
                            <option value="">Select a Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">Augest</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" required="" class="form-control" placeholder="Enter Item Name..." name="item">
                    </div>

                    <div class="form-group">
                        <label>Cost</label>
                        <input type="text" required="" class="form-control" placeholder="Enter Item's Cost..." name="cost">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
            <br>
                <br>
                <br>
                <br>
                <br>
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
<br>
                <br>
                <br>
                <br>
<footer>
    <h3> Developed By</h3>
    <h3><i>Shahabuddin Ahmed</i></h3>
    <h3><i>University of Rajshahi</i></h3>
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

<!DOCTYPE html>
<html>
<title>Monthly Info</title>
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
  position: ;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}

.show
{
    background: #7FFF00;
    border: 2px solid green;
    border-radius: 2px;
    padding-left:25px;
    box-shadow: 10px 10px 15px #888888;
}

body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="/" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">HOME</a>
        <a href="/home" class="w3-bar-item w3-button w3-padding-large" style="text-decoration: none;">Back</a>
    </div>
</div>


    <div class="container">
        <div class="row">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <br>
            <br>
            <div class="col-sm-2"> </div>
            <div class="col-sm-8">
                <div class="show">
                    <h2 style="text-align: center;"><strong>Monthly Cost Info =
                        @if($mon == 1)
                        {{ "January" }}
                        @elseif($mon == 2)
                        {{ "February" }}
                        @elseif($mon == 3)
                        {{ "March" }}
                        @elseif($mon == 4)
                        {{ "April" }}
                        @elseif($mon == 5)
                        {{ "May" }}
                        @elseif($mon == 6)
                        {{ "June" }}
                        @elseif($mon == 7)
                        {{ "July" }}
                        @elseif($mon == 8)
                        {{ "August" }}
                        @elseif($mon == 9)
                        {{ "September" }}
                        @elseif($mon == 10)
                        {{ "October" }}
                        @elseif($mon == 11)
                        {{ "November" }}
                        @else
                        {{ "December" }}
                        @endif
                        , {{ date("Y") }}
                        </strong>
                    </h2>
                    
                    <?php
                        $sum = 0;
                    ?>
                    @foreach($alls as $all)
                        <h4>
                            
                        </h4>
                        <h4>
                            <strong>{{ $all->day }} &nbsp;
                            {{ $all->item }} =
                        
                            {{ $all->cost }}tk </strong>
                            <span class="pull-right" style="padding-right:10px;" >{{ $all->created_at->diffForHumans() }}</span>
                            <?php
                                $sum = $sum + $all->cost;
                            ?>
                        </h4>
                    @endforeach
                    <h3 style="text-align: center;">
                      <strong>Total cost = {{ $sum }}tk</strong>
                    </h3>
                </div>
            </div>
            <div class="col-sm-2"> </div>
        </div>
            <br>
            <br>
            <br>
            <br>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

  <style>
#pz{font-size:40px;
color:white;
margin-left:20px;
margin-top:20px;
}
#me{
color:grey;
}
  

  .A{
  padding:40px;
  margin-left:50px;
  margin-top:20px;
  font-size:40px;
  }
  a:hover
  {
  text-decoration:underline;
  color:green;
  
  }
 #ap{
 font-size:30px;}
 
 #ab{
 padding:250px;
 }
 
  

.im
{
margin-bottom:200px;
}


  </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" >


<nav class="navbar navbar navbar-fixed-top" class="nav">
<div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" id="pz">PIZONE</a>
	  <img="fb logo.png" style="margin-right:800px;">	
	  </a>
    </div>
	
    <ul class="nav navbar-nav navbar-right" id="me" style="color:red;">
       <li><a href="#">HOME</a></li>
      <li><a href="#">ABOUT US</a></li>	
      <li><a href="#">SERVICES</a></li>
	  <li><a href="#">PORTFOLID</a></li> 
	  <li><a href="http://localhost/training/web2.php">TEAM</a></li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DROPDOWN <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">DROP 1</a></li>
          <li><a href="#">DROP 2</a></li>
          <li><a href="#">DROP 3</a></li>
		  <li><a href="#">DROP 4</a></li>
		  <li><a href="#">DROP 5</a></li>
        </ul>
      </li>
	  <li><a href="#">CONTACT US</a></li>
    </ul>
  </div>
</nav>




   <div id="myCarousel" class="carousel slide"  data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="hello.jpg" alt="alt" style="height:700px;width:100%;">
        <div class="carousel-caption">
		<div class="im">
         <h1>WELCOME TO PIZONE</h1> 
  <p id="ap">We are team of talanted designers making websites with Bootstrap</p> 
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">GET STARTED</button>
</div>
        </div>
      </div>

      <div class="item">
        <img src="alt.jpg" alt="82317" style="height:700px;width:100%;">
        <div class="carousel-caption">
        <div class="im"> <h1>WELCOME TO PIZONE</h1> 
  <p id="ap">We are team of talanted designers making websites with Bootstrap</p> 
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">GET STARTED</button>
 </div>
        </div>
      </div>
    
      <div class="item">
        <img src="water.jpg" alt="hello" style="height:700px;width:100%;">
        <div class="carousel-caption">
       <div class="im">   <h1>WELCOME TO PIZONE</h1> 
  <p id="ap">We are team of talanted designers making websites with Bootstrap</p> 
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">GET STARTED</button>
</div>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
 </div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
 </div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
</body>
</html>

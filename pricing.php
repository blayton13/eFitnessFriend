<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pricing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
  <link rel="stylesheet" type="text/css" href="iFitnessFriend.css">

</head>
<body>
  <div id="page-wrap">


                                                                     <!-- Style for company banner  -->

<style>
.jumbotron {
  background-color: rgb(52,51,51);
  color: #fff;

}

.container-fluid {
  padding: 10px 50px;
}
</style>

                                                                        <!-- Blue Banner  -->

<div class="jumbotron text-center">
  <h2>Choose a Plan That's Right For You </h2>
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-btn">
      </div>
    </div>
  </form>
</div>



                                <!--Pricing Container-->

<div class="container-fluid">
  <div class="text-center">

  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Monthly</h1>
        </div>
        <div class="panel-body">
          <p><strong><span class ="hr3"> Billed every month.</span></strong></p>
          <p><span class ="hr3"> Cancel anytime!</span></p>
        </div>
        <div class="panel-footer">
          <h3>$19.99</h3>
          <h4>per month</h4>
           <a href='signup.php'> 
           <button class="btn btn-lg">Sign Up</button>
         </a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>3-Month</h1>
        </div>
        <div class="panel-body">
          <p><strong> <span class ="hr3">Billed every three months.</span></strong></p>
          <p><span class ="hr3"> Cancel anytime!</span></p>
        </div>
        <div class="panel-footer">
          <h3>$14.99</h3>
          <h4>per month</h4>
          
           <a href='signup.php'> 
           <button class="btn btn-lg">Sign Up</button>
         </a>
        </div>
      </div>
    </div>
   <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Annual</h1>
        </div>
        <div class="panel-body">
          <p><strong><span class ="hr3"> Billed once every year.</span></strong></p>
          <p><span class ="hr3"> Cancel anytime!</span></p>
        </div>
        <div class="panel-footer">
          <h3>$9.99</h3>
          <h4>per month</h4>
          
           <a href='signup.php'> 
           <button class="btn btn-lg">Sign Up</button>
         </a>
        </div>
      </div>
    </div>
  </div>
</div>


                                                                           <!-- Carousel "What customers say" Container -->

<h2 >What our customers say</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Ronen Mann, Florida</span></h4>
    </div>
    <div class="item">
      <h4>"One word... LIFECHANGING!!"<br><span style="font-style:normal;">James Hume, Chicago</span></h4>
    </div>
    <div class="item">
      <h4>"They know how to assist people with health related weight problems, I lost 100 pounds!"<br><span style="font-style:normal;">John Albert, Heartsville</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


                                                                                   <!--Contact Container -->

<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT INFO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Charlotte, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +1 704-999-9999</p>
      <p><span class="glyphicon glyphicon-envelope"></span> eFitnessFriend@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">

              <button onclick="myFunction()">Send</button>

        <script>
        function myFunction() {
          alert("Sucscess! Your message has been sent. Please allow 24 hours for our team to respond.");
        }
        </script>
        </div>
      </div>
    </div>
  </div>
</div>



                                                                                   <!--NAVAGATION BAR-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html">eFitnessFriend</a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="pricing.php">Plans</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

                                                            <!--Scrollspy "udpade nav bar when scrolling-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="Home" class="container-fluid">
<div id="Services" class="container-fluid">
<div id="Pricing" class="container-fluid">
<div id="Login" class="container-fluid">




                                                            <!--Up-arrow return to top-->
<style>
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
</style>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back To The Top</a></p>
</footer>

</div>
</body>



</html> <!--END-->
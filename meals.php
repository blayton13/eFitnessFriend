<!DOCTYPE html>
<html lang="en">
<head>
  <title>Meals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
<link rel="stylesheet" type="text/css" href="meals.css">

</head>
<body>
<div id="page-wrap">   
                                                                               <!--This page belongs to:Kenny Nawotniak -->



<!-- Padding for meals -->
<style>
.jumbotron {
  background-color: #4169E1;
  color: #fff;
  padding: 100px 25px;
}

.container-fluid {
  padding: 10px 50px;
}
</style>

                                                                                   <!--NAVAGATION BAR-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.html">eFitnessFriend</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="goals.php">Goals</a></li>
      <li><a href="meals.php">Meals</a></li>
      <li><a href="edata.php">eData</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="logout.php">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>

                                                            <!--Scrollspy "udpade nav bar when scrolling-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="Dashboard" class="container-fluid">
<div id="Goals" class="container-fluid">
<div id="Meals" class="container-fluid">
<div id="eData" class="container-fluid">
<div id="Settings" class="container-fluid">







                                                                 <!-- INSERT CODE HERE -->



      <h1>Meals</h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      


    </div>
    <br></br>
       <br></br>
          <br></br>
    <div id="toprow" class="col-sm-12">
    <div id="recommended"class="col-sm-12">
      <h3> Recommended: Breakfast</h3>

<a href="#" class="btn btn-primary btn-block""btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan">
  Chicken and Rice
</a>

<a href="#" class="btn btn-primary btn-block""btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan2">
  Beef Stir Fry
</a>
<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan3">
  Pasta Puttanesca
</a>
    </div>

    </div>

    <div id="addmealandviewmealplan" class="col-sm-12">
      <div class="col-sm-6">
      <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan">
  View Meal Plan
</a>
      </div>
      <div class= "col-sm-6">
<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMeal">
  Add Meal
</a>
</div>
    </div>

    <div id = "bottomrow" class="col-sm-12">
    <br></br>
    <br></br>
    <div id="upcoming" class="col-sm-6">

      <h3>Upcoming Meal:</h3>

</a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan4">
  Fettuccine Alfredo
</a>

    </div>
    
    
    <div id="mostrecent"class="col-sm-6">
      <h3>Most Recent Meal:</h3>
<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan5">
  Lemon Garlic Shrimp and Grits
</a>
    </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ViewMealPlan" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">View Meal Plan</h4>
      </div>
      <div class="modal-body" display="inline-block">
        
        <h3>Today:</h3>
        <h3>Lunch</h3>
          </a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan4" class="col-sm-6">
            Fettuccine Alfredo
          </a>
          <h3>Dinner</h3>
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan5" class="col-sm-6">
            Lemon Garlic Shrimp and Grits
          </a>
          
      <div class="modal-footer">
        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#ViewMealPlan2" class="col-sm-6">
            This Week
          </a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="ViewMealPlan2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">View Meal Plan</h4>
      </div>
      <div class="modal-body" display="inline-block">
        
        <h3>This Week:</h3>
        
          </a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan3" class="col-sm-6">
            Monday
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan4" class="col-sm-6">
            Tuesday
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan5" class="col-sm-6">
            Wednesday
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan5" class="col-sm-6">
            Thursday
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan5" class="col-sm-6">
            Friday
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan5" class="col-sm-6">
            Saturday
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ViewMealPlan5" class="col-sm-6">
            Sunday
          </a>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#ViewMealPlan6" class="col-sm-6">
            This Month
          </a>
      </div>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="ViewMealPlan3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">View Meal Plan</h4>
      </div>
      <div class="modal-body" display="inline-block">
        
        <h3>Monday:</h3>
        <h3>Lunch</h3>
          </a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan4" class="col-sm-6">
            Fettuccine Alfredo
          </a>
          <h3>Dinner</h3>
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan5" class="col-sm-6">
            Lemon Garlic Shrimp and Grits
          </a>
          
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="ViewMealPlan4" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">View Meal Plan</h4>
      </div>
      <div class="modal-body" display="inline-block">
        
        <h3>Tuesday:</h3>
        <h3>Breakfast</h3>
        </a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan2" class="col-sm-6">
            Beef Stir Fry
          </a>
        <h3>Lunch</h3>
          </a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan4" class="col-sm-6">
            Fettuccine Alfredo
          </a>
          <h3>Dinner</h3>
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan5" class="col-sm-6">
            Lemon Garlic Shrimp and Grits
          </a>
          
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="ViewMealPlan5" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">View Meal Plan</h4>
      </div>
      <div class="modal-body" display="inline-block">
        
        <h3>Day Not Planned Yet, Recommended:</h3>
        <h3>Breakfast</h3>
        </a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan3" class="col-sm-6">
            Pasta Puttanesca
          </a>
        <h3>Lunch</h3>
          </a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan4" class="col-sm-6">
            Fettuccine Alfredo
          </a>
          <h3>Dinner</h3>
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan5" class="col-sm-6">
            Lemon Garlic Shrimp and Grits
          </a>
          
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="ViewMealPlan6" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">View Meal Plan</h4>
      </div>
      <div class="modal-body" display="inline-block">
        <div class="month"> 
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>June<br><span style="font-size:18px">2020</span></li>
  </ul>
</div>
        <ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>
          <ul class="days">
            <li>31</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li><span class="active">22</span></li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
          </ul>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</div>
    </div>
  </div>
</div> 
<div class="modal fade" id="AddMeal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Add Meal</h4>
      </div>
      <div class="modal-body" display="inline-block">
        
          <div class="topnav">
  
  <input type="text" placeholder="Search Meals...">
</div>
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan" class="col-sm-6">
            Chicken and Rice
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan2" class="col-sm-6">
            Beef Stir Fry
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan3" class="col-sm-6">
            Pasta Puttanesca
          </a>
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan4" class="col-sm-6">
            Fettuccine Alfredo
          </a>
          
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan5" class="col-sm-6">
            Lemon Garlic Shrimp and Grits
          </a>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Next -></button>
      </div>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="MealPlan" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Chicken and Rice </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 328</h4>
        <h4>Time: Breakfast</h4>
        <h4>Date: MM/DD/YYYY</h4>
        <img src="https://nitrocdn.com/wNaVTMyblCPjzAPXbeDDfFKcpvICVOVU/assets/static/source/rev-cfa187f/wp-content/uploads/2020/03/nanas-epic-chicken-and-rice-recipe-10-650x925.jpg" alt="Chicken and Rice.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Remove Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="MealPlan2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Beef Stir Fry </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 299</h4>
        <h4>Time: Lunch</h4>
        <h4>Date: MM/DD/YYYY</h4>
        
        <img src="http://www.butcheress.co.uk/wp-content/uploads/2017/11/maxresdefault.jpg" alt="Beef Stir Fry.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default"  data-dismiss="modal">Remove Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="MealPlan3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Pasta Puttanesca </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 281</h4>
        <h4>Time: Dinner</h4>
        <h4>Date: MM/DD/YYYY</h4>
        <img src="https://www.simplyrecipes.com/wp-content/uploads/2013/02/pasta-puttanesca-fork-vertical-1600-600x888.jpg" alt="Beef Stir Fry.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Remove Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="MealPlan4" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Fettuccine Alfredo </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div id = "mp4" class="modal-body">
          <div>
            <h4>Calories = 415</h4>
            <h4>Time: Lunch</h4>
            <h4>Date: Today</h4>
            <a href="https://www.modernhoney.com/fettuccine-alfredo/">Recipe</a>
          </div>
          <div>
        <img src="https://www.modernhoney.com/wp-content/uploads/2018/08/Fettuccine-Alfredo-Recipe-1.jpg" alt="Beef Stir Fry.jpg" style="width:250px;height:300px;">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Remove Meal</button>
      </div>
    </div>
  </div>
</div>
  </div><div class="modal fade" id="MealPlan5" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Lemon Garlic Shrimp and Grits </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <h4>Calories = 367</h4>
          <h4>Time: Dinner</h4>
          <h4>Date: Today</h4>
          <a href="https://www.foodnetwork.com/recipes/food-network-kitchen/lemon-garlic-shrimp-and-grits-recipe-1973610">Recipe</a>
        </div>
        <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2010/11/1/1/FNM_120110-WN-Dinners-021_s4x3.jpg.rend.hgtvcom.826.620.suffix/1382539568110.jpeg" alt="Beef Stir Fry.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Remove Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="AddMealPlan" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Chicken and Rice </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 328</h4>
        <label for="date1">Date:</label>
        <input type="date" id="date1" name="Date:">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Time
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Breakfast</a>
    <a class="dropdown-item" href="#">Lunch</a>
    <a class="dropdown-item" href="#">Dinner</a>
    <a class="dropdown-item" href="#">Snack</a>
  </div>
</div>
        <img src="https://nitrocdn.com/wNaVTMyblCPjzAPXbeDDfFKcpvICVOVU/assets/static/source/rev-cfa187f/wp-content/uploads/2020/03/nanas-epic-chicken-and-rice-recipe-10-650x925.jpg" alt="Chicken and Rice.jpg" style="width:250px;height:300px;">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="AddMealPlan2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Beef Stir Fry </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 299</h4>
        <label for="date1">Date:</label>
        <input type="date" id="date1" name="Date:">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Time
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Breakfast</a>
    <a class="dropdown-item" href="#">Lunch</a>
    <a class="dropdown-item" href="#">Dinner</a>
    <a class="dropdown-item" href="#">Snack</a>
  </div>
</div>
        <img src="http://www.butcheress.co.uk/wp-content/uploads/2017/11/maxresdefault.jpg" alt="Chicken and Rice.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="AddMealPlan3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Pasta Puttanesca </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 281</h4>
        <label for="date1">Date:</label>
        <input type="date" id="date1" name="Date:">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Time
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Breakfast</a>
    <a class="dropdown-item" href="#">Lunch</a>
    <a class="dropdown-item" href="#">Dinner</a>
    <a class="dropdown-item" href="#">Snack</a>
  </div>
</div>
        <img src="https://www.simplyrecipes.com/wp-content/uploads/2013/02/pasta-puttanesca-fork-vertical-1600-600x888.jpg" alt="Beef Stir Fry.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="AddMealPlan4" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Fettuccine Alfredo </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 425</h4>
        <label for="date1">Date:</label>
        <input type="date" id="date1" name="Date:">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Time
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Breakfast</a>
    <a class="dropdown-item" href="#">Lunch</a>
    <a class="dropdown-item" href="#">Dinner</a>
    <a class="dropdown-item" href="#">Snack</a>
  </div>
</div>
        <img src="https://www.modernhoney.com/wp-content/uploads/2018/08/Fettuccine-Alfredo-Recipe-1.jpg" alt="Beef Stir Fry.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="AddMealPlan5" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Lemon Garlic Shrimp and Grits </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 367</h4>
        <label for="date1">Date:</label>
        <input type="date" id="date1" name="Date:">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Time
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Breakfast</a>
    <a class="dropdown-item" href="#">Lunch</a>
    <a class="dropdown-item" href="#">Dinner</a>
    <a class="dropdown-item" href="#">Snack</a>
  </div>
</div>
        <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2010/11/1/1/FNM_120110-WN-Dinners-021_s4x3.jpg.rend.hgtvcom.826.620.suffix/1382539568110.jpeg" alt="Beef Stir Fry.jpg" style="width:250px;height:300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>

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
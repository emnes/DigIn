<?php 
  if((isset($_SESSION['name'])) && isset($_SESSION['userid']))
  {
    loggedInNav($name);
  } 
  else {
   loggedOutNav();
  }

function loggedInNav($name){
echo "
 <!-- Navigation  -->
  <nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display - IGNORE -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"index.php\"><img alt=\"Brand\" src=\"assets/img/logo2.png\" style=\"width:147px; height:50px;\"/></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"index.php\">Home</a></li>
          <li><a href=\"restaurants.php?type=All&sortid=mp\">Restaurants</a></li>
          <li><a href=\"raters.php?type=All&sortid=Name\">Raters</a></li>
          <li><a href=\"menuitems.php?type=All&sortid=Name\">Menu Items</a></li>
          <li><a href=\"queries.php?type=All\">Queries</a></li>
        </ul>
        <form class=\"navbar-form navbar-right\" method=\"post\" action=\"searchresults.php\" role=\"search\">
          <div class=\"form-group search-bar\">
            <input type=\"text\" name=\"keyword\" class=\"form-control\" placeholder=\"Search Restaurant\">
          <button type=\"submit\" class=\"btn btn-default btn-md\" role=\"button\">
          <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
          </button>
          </div>
            <a href=\"php/logout.php\" class=\"btn btn-primary btn-md\" role=\"button\">
            Log Out
            </a>
            <a href=\"raterprofile.php?userid=".$_SESSION['userid']."\" class=\"btn btn-success btn-md\" role=\"button\">"
            .$name.
            "</a>
          </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  ";
}

function loggedOutNav(){
echo "
 <!-- Navigation  -->
  <nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display - IGNORE -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"index.php\"><img alt=\"Brand\" src=\"assets/img/logo2.png\" style=\"width:147px; height:50px;\"/></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"index.php\">Home</a></li>
          <li><a href=\"restaurants.php?type=All&sortid=mp\">Restaurants</a></li>
          <li><a href=\"raters.php?type=All&sortid=Name\">Raters</a></li>
          <li><a href=\"menuitems.php?type=All&amp;sortid=Name\">Menu Items</a></li>
          <li><a href=\"queries.php?type=All\">Queries</a></li>
        </ul>
          <form class=\"navbar-form navbar-right\" method=\"post\" action=\"searchresults.php\" role=\"search\">
            <div class=\"form-group search-bar\">
              <input type=\"text\" name=\"keyword\" class=\"form-control\" placeholder=\"Search Restaurant\">
            <button type=\"submit\" class=\"btn btn-default btn-md\" role=\"button\">
            <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
            </button>
            </div>
            <button type=\"button\" class=\"btn btn-primary btn-md\" role=\"button\" onClick=\"logIn()\">
            Log In
            </button>
            <button type=\"button\" class=\"btn btn-success btn-md\" role=\"button\" onClick=\"signUp()\">
            Sign Up
            </button>
          </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  ";
}
  ?>

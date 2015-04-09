<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/stylesheets/style.css"/>
  <script src="assets/scripts/jquery-2.1.3.min.js"></script>
  <script src="assets/scripts/bootstrap.min.js"></script>
  <script src="assets/scripts/script.js"></script>
  <script src="content/js/jquery.min.js"></script>
  <script src="content/js/bootstrap.min.js"></script>
  <script>

  </script>
  <title> Raters | Dig In </title>
</head>
<body>
  <!-- Modal View for Log In -->
    <div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="logInModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Log In</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" >Log in</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal View for Sign Up -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="logInModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
        </div>
        <div class="modal-body">
          The selected book has been added to your shopping cart.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
    </div>

  <!-- Navigation  -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display - IGNORE -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img alt="Brand" src="assets/img/logo2.png" style="width:147px; height:50px;"/></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="restaurants.php">Restaurants</a></li>
          <li class="active"><a href="raters.php">Raters</a></li>
        </ul>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group search-bar">
              <input type="text" class="form-control" placeholder="Search Restaurant">
            <a href="#" class="btn btn-default btn-md" role="button">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
            </div>
            <button type="button" class="btn btn-primary btn-md" role="button" onClick="logIn()">
            Log In
            </button>
            <button type="button" class="btn btn-success btn-md" role="button" onClick="signUp()">
            Sign Up
            </button>
          </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<!-- Begin page content -->
    
<div class="container-fluid">
  <div class="row-fluid">
    <div class="col-md-2">
      <div class="sidebar">
        <h2>Type</h2>
        <?php include 'sidebar.php'; ?>
      </div>
    </div>
    <div class="col-md-2">
        <div class="page-header">
          <h1>Restaurants</h1>
        </div>
        <div class="container">
          <div class="row clearfix">
            <div class="col-md-3 column">
              <h2>
                Username
              </h2>
              <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
              </p>
              <p>
                <a class="btn" href="#">View details »</a>
              </p>
            </div>
            <div class="col-md-3 column">
              <h2>
                Username
              </h2>
              <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
              </p>
              <p>
                <a class="btn" href="#">View details »</a>
              </p>
            </div>
            <div class="col-md-3 column">
              <h2>
                Username
              </h2>
              <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
              </p>
              <p>
                <a class="btn" href="#">View details »</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Footer: About, Careers etc.-->    
    <!--<footer class="footer">
      <div class="container" align="bottom">
        <p class="text-muted" class="footer footer-bottom"> About</p>
      </div>
    </footer>
  </div>--!>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./header:body:footer_files/jquery.min.js"></script>
    <script src="./header:body:footer_files/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./header:body:footer_files/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
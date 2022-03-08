
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Kab-p Gym</title>
    

    <!-- Bootstrap core CSS -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="boot/css/main.css" rel="stylesheet">
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" text="text/css" rel="stylesheet">

    
    
      
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    

</div>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Kab-p Gym </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            
            <li><a href="Training packages.php">Training Package</a></li>
            <li><a href="facilities.php">Facilities</a></li>
           <li class="active" id="a">
             <a href="about.php">About</a></li>
              
            <li><a href="contact.php">Contact</a></li>
            <?php
            if(isset($_SESSION['username'])) {
              echo '<li><a href="./profile/">Profile</a>
              <li><a href="./workouts">Workouts</a>';
              if(isset($_SESSION['admin'])) {
                echo '<li><a href="att.php">Attendance</a>';
              }
            }
            ?>
          </ul>
        
   
        
   <form class="navbar-form navbar-right" role="form" method="post" action="admin-panel.php">
           <div class="form-group">
              <input type="text" placeholder="enter username" class="form-control" name="email" required/>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" required/>
            </div>
            <input type="submit" class="btn btn-success" value="Sign in" onclick="formhash(this.form, this.form.password);">
          
          </form>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <h2 style="color:  #e0a80d;">About Us</h2>
    
    
    <h4 style="color:#138D75"><center>“Life is not merely living but living in health. DON’T THINK, BEGIN TODAY!”</center></h4>
    
    
    <h3 style="color:green;">Our Objectives</h3>

<p><h4>The main objective of ‘Kab-p Gym’ is to create awareness and to Co-ordinate the performance of body, mind and soul in a befitting manner, we are the winner, we don’t do different thing, we do things differently. Our goal is to be sensitive to our members needs and to fulfill fitness requirements. We ensure physical fitness and robust health to customers as we counsel, we assist, we motivate them to lead a joyous and meaningful results are bound to be positive as we put in our 200% to fulfill your needs.</h4></p>

<h3 style="color:green;">Our vision</h3>

<p><h4>Our vision is to maintain the standers of our fitness centre for our member’s well being, our members will have sound body and it will be maintained well when complimented by a health foods bar to nourish body’s daily fiber vitamin’s requirements.</h4></p>

<h3 style="color:green;">Facilities Available:</h3>
<p><h4>
» 	Cardio Center<br>
» 	Strength Training<br>
» 	Aerobics<br>
» 	Diet Counseling<br>
» 	Spa (Shower Room)<br>
» 	Locker Room<br>
» 	Health Bar ( Serving Protein Shakes, Fat Burners & other Nutrition )<br>
   </h4></p>  </div>


 <div class="container">
      <!-- Example row of columns -->
  
      </div>


      <hr>

        <footer class="footer text-center">
       <p style="color: green">  &copy; 2022 Kab-p Gym </p>
      </footer>
    </div> <!-- /container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>

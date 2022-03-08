
 
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
    <link href="boot/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="boot/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    
      
    
   
  </head>

  <body>

  


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kab-p Gym</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           <li><a href="index.php">Home</a></li>
            <li><a href="Training packages.php"> Training Package</a></li>
            <li  class="active" id="a"><a href="facilities.php">Facilities</a></li>
            <li><a href="about.php">About</a></li>
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
          <ul>
        
    <form class="navbar-form navbar-right" role="form" method="post" action="admin-panel.php">
           <div class="form-group">
              <input type="text" placeholder="enter username" class="form-control" name="email" required/>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" required/>
            </div>
            <input type="submit" class="btn btn-success" value="Sign in" onclick="formhash(this.form, this.form.password);">
          
          </form>
        </ul>
        

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <!--too add vids
          <li>
    <iframe src="http://player.vimeo.com/video/17914974" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
       -->
  

    <div class="container">
<table>
<tr><td><h4 style="color: green;">Cardio Center</h4>
Cardio is short for cardiovascular, which refers to the heart. Cardiovascular exercise is exercise that raises your heart rate and keeps it elevated for a period of time. Another name for it is aerobic exercise. The kinds of exercise that are associated with cardiovascular workouts are things like jogging, fast walking, and swimming where there is no break in the routine. Exercises that emphasize stretch and strength, like Pilates, are generally not considered cardio exercise, though Pilates can be done in a cardio way, and can certainly be combined with cardio workouts to great effect.</td>
<td><img src="img/c1.jfif"></td></tr></table>

<br>
<table><tr><td colspan=1>     <img src="img/s1.jfif"></td><td valign=top>&nbsp;&nbsp;&nbsp;<h4 style="color: green;">Strength Training</h4>A method of improving muscular strength by gradually increasing the ability to resist force through the use of free weights, machines, or the person's own body weight. Strength training sessions are designed to impose increasingly greater resistance, which in turn stimulates development of muscle strength to meet the added demand. This section is equipped with the latest machines from Larous, India, which isolate targeted muscles for more specialized training.</td></tr></table>
 <table><tr><td><h4 style="color:green;">Aerobics</h4>
Aerobics is an effective physical exercise which is often done to music. Apart from staying power, strength, flexibility, coordination, and tact are trained. Aerobics is very popular with women who do it together in a group following an instructor or alone in front of the television. In the 1960s, Dr. Med. Kenneth H. Cooper introduced an exercise training in order to strengthen the heart and the lungs and took the first step of the "aerob" training in the United States. His published book Aerobics finally led to a gymnastic staying power-training, to Aerobics. </td>
<td><img src="img/a1.jfif"></td></tr></table>    
      
      
     
     

 
 
 
      <hr>


         

    </div> <!-- /container -->
     <footer class="footer text-center">
       <p style="color: green">  &copy; 2022 Kab-p Gym </p>
      </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


  </body>
</html>

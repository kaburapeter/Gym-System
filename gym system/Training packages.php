
<?php
 include("func.php");
?>
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
          <a class="navbar-brand" href="index.php">Kab-p Gym</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            
           <li class="active" id="a"> <a href="Training packages.php">Training Package</a></li>
            <li><a href="facilities.php">Facilities</a></li>
           
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
   </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <table> <tr>
                <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="right" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
                      <tr></tr>
                      <tr>
                        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="gray12_txt"><table width="100%" border="0" cellpadding="1" cellspacing="1">
                              <tr>
                                <td colspan="4" align="left" valign="top"><p style="color: green;"><strong>Kab-p Gym - Packages</strong></p></td>
                                </tr>
                              <tr style="color:#138D75 ">
                                <td width="25%" align="left" valign="top"><strong>Duration&nbsp; </strong></td>
                                <td width="25%" align="center" valign="top"><strong>General</strong></td>
                                <td width="25%" align="center" valign="top"><strong>Couple  </strong></td>
                                <td width="25%" align="center" valign="top"><strong>Happy Hours </strong></td>
                                </tr>
                              <tr>
                                <td width="522"><strong style="color:#138D75 ">Monthly&nbsp; </strong></td>
                                <td align="center" valign="top">1500 </td>
                                <td align="center" valign="top">2500 </td>
                                <td align="center" valign="top">1000 </td>
                                </tr>
                              <tr>
                                <td width="522"><strong style="color:#138D75 ">Quarterly&nbsp; </strong></td>
                                <td align="center" valign="top">3500</td>
                                <td align="center" valign="top">6500</td>
                                <td align="center" valign="top">2500</td>
                                </tr>
                              <tr>
                                <td width="522"><strong style="color:#138D75 ">Half-Yearly</strong></td>
                                <td align="center" valign="top">6500</td>
                                <td align="center" valign="top">11000</td>
                                <td align="center" valign="top">4500</td>
                                </tr>
                              <tr>
                                <td width="522"><strong style="color:#138D75 ">Yearly</strong></td>
                                <td align="center" valign="top">10000</td>
                                <td align="center" valign="top">18000</td>
                                <td align="center" valign="top">7500</td>
                                </tr>
                              </table></td>
                            </tr>
                          </table
     
       <p><h5><b>Kab-p Gym</b> is having highly qualified team of trainers, they are widely acknowledged as being among the industry's finest and take enormous pride in assisting members wherever they are needed. All are fully accredited on the Exercise Professionals Register and are, of course, insured to deliver some of the most advanced training. They can focus clearly on your goals and pointedly be on hand to ensure you reach them.</h5><br>  <h3 style="color:#512E5F"> Please Note Following: </h3> 
 
<p style="color:#0F62BB">» 	General Rates are applicable for Per Person Bases.<br>
» 	Couple Rates are applicable for Husband & Wife only.<br>
» 	Happy hours Rates are applicable between 11:00 am to 5:00 pm only.</p>
   
    </div>


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
      
    </script>
  </body>
</html>

<!DOCTYPE html>
<html>
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
    <style type="text/css">
                .contact {
    padding:  0 0 130px 0;
    background:  #2d2e2e;
}

.contact h2 {
    font-size: 30px;
    font-weight: 800;
    color:  #e0a80d;
    margin-bottom: 60px;
}

.contact .form-control {
    padding: 25px;
    font-size: 13px;
    margin-bottom: 10px;
    background: #fcf2f2;
    border: 1;
    border-radius: 10px;
}

.contact button.btn {
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
    background: #e0a80d;
    color:  green;
}
.contact .info {
    padding-left: 40px;
}

.contact .info span {
    font-size: 20px;
    color: #e0a80d;
}

.contact .info p {
    font-size: 15px;
    margin: 10px 0 20px 0;
    color: #eee;
}
                </style>
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
          <a class="navbar-brand" href="index.php">Kab-p Gym</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li> <a href="index.php">Home</a></li>
              <li><a href="packages.php">Package</a></li>
              <li><a href="facilities.php">Facilities</a></li>
            <li><a href="about.php">About</a></li>
            <li class="active" id="a"><a href="contact.php">Contact</a></li>

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
      </div>
          

             <section class="contact" id="contact">
             	 
 <h2  class="text-center">Keep In Touch</h2>
 <div class="container">
 <div class="row">
 <div class="col-md-8">
 <form>
 <div class="row">
 <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="Name">
 </div>
 <div class="col-sm-6">
 <input type="email" class="form-control" placeholder="Email">
 </div>
 <div class="col-sm-12">
 <input type="text" class="form-control" placeholder="Subject">
 </div>
 </div>
 <div class="form-group">
 <textarea class="form-control" rows="5" id="comment"
placeholder="Message"></textarea>
 </div>
 <button class="btn btn-block" type="submit">Send Now!</button>
 </form>
 </div>
 <div class="col-md-4">
 <div class="info">
 <span class="fa fa-map-marker"></span>
 <p>Murang'a, Kenya
 <br>
 Kiharu</p>
 <span class="fa fa-mobile"></span>
 <p>0106876626
 <br>
 0730403747</p>
 <span class="fa fa-at"></span>
 <p>petnjoro2019@gmail.com <br> petnjoro2019@gmail.com </p>

 </div>
 </div>
 </div>
 </div>
 </section>
</form>

<footer class="footer text-center">
  <style type="text/css">
    .footer{
      background: black;
      padding: 10px 0;
      text-align: center;
    }
    .footer p{
      color: greenyellow;
    }
  </style>
  <p>&copy; 2022 Kab-p Gym</p>
</footer>
</body>
</html>
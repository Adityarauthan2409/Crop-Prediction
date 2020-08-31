<?php ob_start();?>
<html>
  <head> 
    <link href="bt/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bt/dist/js/bootstrap.min.js"></script>
  </head>
    
  <body>
      <div class="cont">
          <div class="row">
              <div class="col-md-4" style="height: 30%; background: cyan;"> 
                  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:105%;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="1.jfif" style="height: 100%; width: 100%;">
    </div>

    <div class="item">
      <img src="2.jfif" style="height: 100%;width: 100%;">
    </div>

    <div class="item">
      <img src="3.jfif" style="height: 100%; width: 100%;">
    </div>
      
      <div class="item">
      <img src="4.jfif" style="height: 100%; width: 100%;">
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
              <div class="col-md-8" style="height: 30%; background: orange;">
                  <img src="img.jpg" style=" height:98%; width:98%;">
              </div>
              
          </div>
      </div>
      
      <div class="cont">
          <div class="row" style="background: purple; font-size: 18;">
              <div class="col-md-1"></div>
              <div class="col-md-2"><a href="home.php">Home</a></div>
              <div class="col-md-2"><a href="at.php">About</a></div>
              <div class="col-md-2"><a href="ct.php">Contact</a></div>
              <div class="col-md-2"><a href="cropes.php">cropes</a></div>
              <div class="col-md-3"><a href="prd.php">Prediction</a></div>
          </div>
      </div>
      
      <div class="cont">
          <div class="row">
              <div class="col-md-9" style="background: lightgreen; height: 80%;">
                  <form>
                      
                          <legend>Contact us</legend>
                          <table>
                              <tr>
                                  <td>Name</td>
                                  <td><input type="text" name="na" placeholder="Enter username" autofocus="autofocus"></td>
                              </tr>
                              
                              <tr>
                                  <td>Email</td>
                                  <td><input type="text" name="em" placeholder="Enter email" autofocus="autofocus"></td>
                              </tr>
                              
                              <tr>
                                  <td>Message</td>
                                  <td><textarea type="textarea" name="me" placeholder="Enter message" rows="7" cols="40" autofocus="autofocus"></textarea></td>
                              </tr>
                          </table>
                          <input type="submit" name="submit" value="submit" style="margin-left: 70;">
                          </form>

                          <?php
                            $con=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($con));
                            mysqli_select_db($con,'mydb') or die("enable to select database".mysqli_error());
                            if(isset($_REQUEST['submit']))
                            {
  
                               $n=$_REQUEST['na'];
                               $e=$_REQUEST['em'];
                               $m=$_REQUEST['me'];
                               $q="Insert into farmercont(name,email,message) values('$n','$e','$m')";
                               $x=mysqli_query($con,$q)or die("Enable to execute".mysqli_error($con));
                               if($x>0)
                               {
                                echo "<h6>message sent</h6>";
                               } else
                                  echo "<h2>Invlaid user name or password</h2>";
                                 }
                            ?>
                  
               </div>
                      
                  
              
              <div class="col-md-3" style="background: lightgreen; height: 80%;">
                  <h1>Government Schemes</h1>
                      <marquee direction="right"><a href="">Soil health card schemes</a></marquee>
                      <marquee direction="right"><a href="">Pradhan mantri fasal bima yojna(PMBFY)</a></marquee>
                      <marquee direction="right"><a href="">Neem coated urea</a></marquee>
                      <marquee direction="right"><a href="">Agriculture</a></marquee>
                      <marquee direction="right"><a href="">Pradhanmantri krishi sinchai yojna</a></marquee> 
              </div>
          </div>
      </div>
    
    </body>
</html>
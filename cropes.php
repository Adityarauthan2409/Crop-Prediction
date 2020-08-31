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
              <div class="col-md-9" style="background: lightblue; height: 80%;">
                  
                  <?php
                  $con=mysqli_connect('localhost','root','');
                  mysqli_select_db($con,'mydb');
                  $a="select * from farmerpred";
                  $rs=mysqli_query($con,$a);
                  echo"<center><table class='table table-bordered table-hover table-striped'>";
                  while($r=mysqli_fetch_array($rs))
                  {
                      echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td></tr>";
                  }
                  
                  ?>
                  </table>
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
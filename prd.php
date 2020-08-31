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
                  <h2>Predict for your best crop</h2>
                  
                  <form>
                   <h2>select min temp<select name="mint">
                      <?php
                      for($i=5;$i<=30;$i++)
                      {
                          echo "<option>";
                          echo "$i";
                          echo "</option>";
                      }
                      ?>
                      </h2>
                      </select> 
                  
                   <h2>select max temp<select name="maxt">
                      <?php
                      for($i=15;$i<=34;$i++)
                      {
                          echo "<option>";
                          echo "$i";
                          echo "</option>";
                      }
                      ?>
                      </h2>
                      </select> 
                  
                  
                   <h2>select min rainfall<select name="minr">
                      <?php
                      for($i=40;$i<=150;$i=$i+5)
                      {
                          echo "<option>";
                          echo "$i";
                          echo "</option>";
                      }
                      ?>
                      </h2>
                      </select> 
                  
                  
                  <h2>select max rainfall<select name="maxr">
                      <?php
                      for($i=45;$i<=300;$i=$i+5)
                      {
                          echo "<option>";
                          echo "$i";
                          echo "</option>";
                      }
                      ?>
                      </h2>
                      </select> 
                  
                <h2>select soil type<select name="so">
                                  <option>Loamy soil</option>
                                  <option>Clayey loamy</option>
                                  <option>Deep clayey</option>
                                  <option>Black soil</option>
                                  <option>Well drained deep friable</option>
                                  <option>Well drained loamy soil</option>
                            </h2>
                  </select><br><br>
                      </form>
                            
                  
                  <center><input type="submit" value="predict" name="pre"></center>
        
                        <?php
                        $con=mysqli_connect('localhost','root','');
                        mysqli_select_db($con,'mydb');
                        if(isset($_REQUEST['pre']))
                            {
                        
                                $m=$_REQUEST['mint'];
                                $n=$_REQUEST['maxt'];
                                $i=$_REQUEST['minr'];
                                $j=$_REQUEST['maxr'];
                                $s=$_REQUEST['so'];
                                $c="";
                                
                            $q="select * from farmerpred where Mintemp >= $m && Maxtemp<=$n ";
                            $x=mysqli_query($con,$q)or die("Enable to executen ".mysqli_error($con));
                            while($r=mysqli_fetch_array($x))
                            {
                                $c=$c.$r[1]."<br>";
                            }
                            
                            $q="select * from farmerpred where Minrfall >= $i && Maxrfall<=$j ";
                            $x=mysqli_query($con,$q)or die("Enable to executen ".mysqli_error($con));
                            while($r=mysqli_fetch_array($x))
                            {
                                $c=$c.$r[1]."<br>";
                            }
                            
                            $q="select * from farmerpred where soil = '$s' ";
                            $x=mysqli_query($con,$q)or die("Enable to executen ".mysqli_error($con));
                            while($r=mysqli_fetch_array($x))
                            {
                                $c=$c.$r[1]."<br>";
                            }
                            
                            echo "$c";
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
      
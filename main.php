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
              <div class="col-md-6" style="height: 50%;">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding-left: 10px;">
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
              
              <div class="col-md-6" style="background: lightblue; height: 50%;">
                  <center><h1>Farmer Predict</h1></center><br><br>
                  <img src="far.jpg" style="height: 200; width: 630;">
              </div>
          </div>
      </div>
      
      <div class="cont">
          <div class="row">
              <div class="col-md-10" style="background: orange; height: 10%; padding-top: 20px;">
                  <a href="" style="font-size: 20; padding-left: 40px;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" style="font-size: 20;">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" style="font-size: 20;">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
              <div class="col-md-2" style="background: orange; height: 10%; padding-top: 20px;">
                  <a href="" data-toggle="popover" title="call here: 74847388383" style="font-size: 20px;">Customer care</a>
              </div>
          </div> 
      </div>
      
      <div class="cont">
          <div class="row">
              <div class="col-md-1" style="background: lightgreen; height: 65%;"></div>
              <div class="col-md-5" style="height: 65%; background: lightgreen;">
                  <table border=1 cellspacing=10 cellpadding=10>
                      <h1 style="color: darkblue;">Login</h1>
                      <form>
                  <div class="form-group">
                      <tr><td>Username</td>
                          <td><input type="text" placeholder="username" name="user" class="form-control"></td></tr>
                  </div>
                      
                      
                      <div class="form-group">
                      <tr><td>Password</td>
                          <td><input type="password" placeholder="password" name="pass" class="form-control"></td></tr>
                      </div>
                  </table><br>
                  <a href="">forget password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <input type="submit" value="Login" name="login">
                  </form>
                </div>
                 
                  
              <div class="col-md-6" style="height: 65%; background: lightgreen;">
                  <table border=1 cellspacing=10 cellpadding=10>
                      <h1 style="color: darkblue;">Sign In</h1>
                      <form>
                  <div class="form-group">
                      <tr><td>Username</td>
                          <td><input type="text" placeholder="username" name="us" class="form-control"></td></tr>
                  </div>
                      
                      <div class="form-group">
                      <tr><td>Email</td>
                          <td><input type="text" placeholder="email" name="em" class="form-control"></td></tr>
                  </div>
                    <div class="form-group">
                      <tr><td>name</td>
                          <td><input type="text" placeholder="name" name="n" class="form-control"></td></tr>
                  </div>

                      
                      <div class="form-group">
                      <tr><td>Password</td>
                          <td><input type="password" placeholder="password" name="pas" class="form-control"></td></tr>
                      </div>
                      
                      <div class="form-group">
                      <tr><td>Phone No</td>
                          <td><input type="text" placeholder="phone" name="ph" class="form-control"></td></tr>
                      </div>
                      
                      <div class="form-group">
                      <tr><td>State</td>
                          <td><input type="text" placeholder="state" name="st" class="form-control"></td></tr>
                      </div>
                      
                      <div class="form-group">
                      <tr><td>City</td>
                          <td><input type="text" placeholder="city" name="ci" class="form-control"></td></tr>
                      </div>
                      
                      <div class="form-group">
                      <tr><td>Village</td>
                          <td><input type="text" placeholder="village" name="vi" class="form-control"></td></tr>
                      </div>
                  </table><br>
                  <a href="">Log IN</a>
                  <input type="submit" value="Sign In" style="margin-left: 170;" name="submit">
                  </form>
                  
                  <?php
                        $con=mysqli_connect('localhost','root','');
                        mysqli_select_db($con,'mydb');
                  

                        if(isset($_REQUEST['submit']))
                            {
                        
                                $u=$_REQUEST['us'];
                                $e=$_REQUEST['em'];
                                $p=$_REQUEST['pas'];
                                $ph=$_REQUEST['ph'];
                                $s=$_REQUEST['st'];
                                $c=$_REQUEST['ci'];
                                $v=$_REQUEST['vi'];
                                $n=$_REQUEST['n'];
                            $q="insert into farmer(name,username,email,password,phone,state,city,village)values('$n','$u','$e','$p','$ph','$s','$c','$v')";
                            $x=mysqli_query($con,$q);
                            if($x>0)
                                echo "<h1>Regiseter Successfull</h1>";
                            else
                                echo "<h1>Enable to Register</h1>";
                                
                            }
                  if(isset($_REQUEST['login']))
                  {
                      
                      $u=$_REQUEST['user'];
                      $p=$_REQUEST['pass'];
                      $a="select * from farmer where username='$u' and password='$p'";
                      $rs=mysqli_query($con,$a);
                      $x=mysqli_num_rows($rs);
                      if($x>0)
                      {
                          header('location:home.php');
                          
                      }
                      else
                          echo "<h1>Invalid User Name or Pasword</h1>";
                  }
                  
                    ?>
              </div>
          </div>
      </div>
      
    </body>
</html>
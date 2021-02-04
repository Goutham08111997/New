<!DOCTYPE html>
<html lang="en">

<head>
  <title>Startup Growth Analyis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="row" style="height:800px;">
    <div class="col-md-4">
      <div class="well" class="well1">
        <img src="logo2.jpg" class="img-circle" alt="Logo" style="width:250px;height:250px">
        <h1>Startup growth Analysis</h1>
        <br>
        <p>Our website aimed at depicting the growth analysis of different startup domains , thereby enabling the Entreprenuer to become a <b>Business Tycoon</b></p>

      </div>
    </div>
    <div class="col-md-8" style="height:900px;margin-top:30px;background:lightgrey">

      <div class="container-fluid">

        <ul class="nav nav-tabs nav-justified">
          <li><a data-toggle="tab" href="#home">Home</a></li>
          <li><a data-toggle="tab" href="#startup" disabled>Startup</a></li>
          <li class="active"><a data-toggle="tab" href="#revenue" disabled>Revenue</a></li>
          <li><a data-toggle="tab" href="#growth" disabled>Growth Analyzer</a></li>
        </ul>
        <div class="tab-content">

          <div id="home" class="tab-pane fade in" style="background-image:url(img/secure.jpg)">

            <div class="inner-bg">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 text">
                    <h1 style="color:white"> Login</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                      <div class="form-top-left">
                        <h3 style="color:white"><b>Login to our site</b></h3>
                        <p style="color:white"><b>Enter your username and password to log on:</b></p>
                      </div>
                      <div class="form-top-right">
                        <i class="fa fa-lock"></i>
                      </div>
                    </div>
                    <div class="form-bottom">
                      <form role="form" action="userlogin1.php" method="post" class="login-form">
                        <div class="form-group">
                          <b style="color:white"><label class="sr-only" for="form-username">Username</label></b>
                          <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                        </div>
                        <div class="form-group">
                          <b style="color:white"><label class="sr-only" for="form-password">Password</label></b>
                          <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                        </div>
                        <button type="submit" class="btn btn-info" name="login" style="background:transparent;color:black;border-color:blue;border-radius:25px;width:100px;">Login</button>
                      </form>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 text">
                    <h1 style="color:white"> New User?Register Here</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                      <div class="form-top-left">
                        <h3 style="color:white"><b>Fill in to Register...</b></h3>

                      </div>
                      <div class="form-top-right">
                        <i class="fa fa-lock"></i>
                      </div>
                    </div>
                    <div class="form-bottom">
                      <form role="form" action="userlogin.php" method="post">
                        <div class="form-group">
                          <b style="color:white"><label class="sr-only" for="form-username">Username</label></b>
                          <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                        </div>
                        <div class="form-group">
                          <b style="color:white"><label class="sr-only" for="form-password">Password</label></b>
                          <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                        </div>
                        <div class="form-group">
                          <b style="color:white"><label class="sr-only" for="form-password">Confirm Password</label></b>
                          <input type="password" name="cpassword" placeholder="Password..." class="form-password form-control" id="form-password">
                        </div>
                        <button type="submit" class="btn btn-info" name="submit_btn" style="border-color:blue;color:black;background:transparent;border-radius:25px;width:100px;">Register</button>
                      </form>

                    </div>
                  </div>
                </div>

              </div>
            </div>



          </div>


          <div id="growth" class="tab-pane fade in">
            <div class="growth2" style="background-image:url(growth.jpg);
	height:700px;
	margin-top:80px;"><a href="https://app.powerbi.com/groups/me/dashboards/af27dc5e-bb51-428d-8a11-d3e1e4ff99f3" target="_self"><button type="button" class="btn btn-success" id="btn1">Lets Analyze?</button></a> </div>
          </div>
          <div id="startup" class="tab-pane fade in">
            <div class="jumbotron" style="background-image:url(start.jpeg);margin-top:30px;height:100%">
              <h1 style="color:red;text-align:center">Startup</h1>
              <p><b>A startup or start-up is started by individual founders or entrepreneurs to search for a
                  repeatable and scalable business model. More specifically, a startup is a newly emerged business venture
                  that aims to develop a viable business model to meet a marketplace need or problem.
                  Founders design startups to effectively develop and validate a scalable business model.
                  Hence, the concepts of startups and entrepreneurship are similar. However, entrepreneurship refers all new businesses,
                  including self-employment and businesses that never intend to grow big or become registered, while startups refer to new businesses
                  that intend to grow beyond the solo founder, have employees, and intend to grow large.[citation needed] Start-ups face high uncertainty
                  and do have high rates of failure, but the minority that go on to be successful
                  companies have the potential to become large and influential.
                  Some startups become unicorns, i.e. privately held startup companies valued at over $1 billion.</b></p>
            </div>
          </div>
          <div id="revenue" class="tab-pane fade in active">
            <div class="jumbotron" style="margin-top:30px;padding-top:10px;color:white;background:transparent">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="walmart2.jpg" alt="walmart revenue model" style="width:100%;">
                  </div>
                  <div class="item ">
                    <img src="walmart.png" alt="Walmart revenue Model" style="width:100%;">
                  </div>



                  <div class="item">
                    <img src="walmart3.jpg" alt="Business Model" style="width:100%;">
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

          </div>

        </div>

      </div>

    </div>
  </div>




</body>

</html>
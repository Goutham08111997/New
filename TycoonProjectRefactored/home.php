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

  <nav class="navbar navbar-expand-sm bg-info navbar-light sticky-top" role="navigation">
    <a class="navbar-brand" href="#">
      <img src="img/Tycoon_logo.jpg" class="rounded-circle" alt="Logo" style="width:40px;">
      Tycoon
    </a>

    <ul class="navbar-nav navlinks">
      <li class="nav-item">
        <a class="nav-link" href="#home" data-toggle="tab">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#startup" data-toggle="tab">Startup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#revenue" data-toggle="tab">Revenue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#growth" data-toggle="tab">Growth Analyzer</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ml-auto">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </nav>
  <div class="row">
    
    
    <div class="col-md-8">
      <div class="tab-content">
        <div id="home" class="tab-pane home active" style="background-image:url(img/secure.jpg)">
          <div class="container">
            <div class="row login">
              <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                  <div class="form-top-left">
                    <h2 class="text-white">Login to our site</h2>
                    <p class="text-white"><b>Enter your username and password to log on:</b></p>
                  </div>
                </div>
                <div class="form-bottom">
                  <form role="form" action="userlogin1.php" method="post" class="login-form">
                    <div class="form-group">
                      <b class="text-white"><label class="sr-only" for="form-username">Username</label></b>
                      <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                    </div>
                    <div class="form-group">
                      <b class="text-white"><label class="sr-only" for="form-password">Password</label></b>
                      <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                    </div>
                    <button type="submit" class="btn btn-info login_btn" name="login">Login</button>
                  </form>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 text">
                <h1 class="text-white"> New User?Register Here</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                  <div class="form-top-left">
                    <h3 class="text-white"><b>Fill in to Register...</b></h3>

                  </div>
                  <div class="form-top-right">
                    <i class="fa fa-lock"></i>
                  </div>
                </div>
                <div class="form-bottom">
                  <form role="form" action="userlogin.php" method="post">
                    <div class="form-group">
                      <b class="text-white"><label class="sr-only" for="form-username">Username</label></b>
                      <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                    </div>
                    <div class="form-group">
                      <b class="text-white"><label class="sr-only" for="form-password">Password</label></b>
                      <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                    </div>
                    <div class="form-group">
                      <b class="text-white"><label class="sr-only" for="form-password">Confirm Password</label></b>
                      <input type="password" name="cpassword" placeholder="Password..." class="form-password form-control" id="form-password">
                    </div>
                    <button type="submit" class="btn btn-info" name="submit_btn">Register</button>
                  </form>

                </div>
              </div>
            </div>

          </div>

        </div>


        <div id="growth" class="tab-pane fade">
          <div class="growth2"><a href="https://app.powerbi.com/groups/me/dashboards/af27dc5e-bb51-428d-8a11-d3e1e4ff99f3" target="_self"><button type="button" class="btn btn-success" class="btn1">Lets Analyze?</button></a> </div>
        </div>
        <div id="startup" class="tab-pane fade in">
          <div class="jumbotron" style="background-image:url(img/start.jpeg);margin-top:30px;height:100%">
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
        <div id="revenue" class="tab-pane fade">
          <div class="jumbotron" style="margin-top:30px;padding-top:10px;color:white;background-image:url(img/revenue3.jpg)">

            <h1><b>Revenue Model</b></h1>
            <p>
              *A revenue model describes how a business generates revenue streams from its products and services. It is one of the key components of the business model. Existing businesses interested in expanding to new areas or adjusting to a new generation of competitors should carefully consider their revenue models. A strong revenue model is also most important for early stage startups; their investors are usually very conscious of monetization.<br>
              *A revenue stream is a company’s single source of revenue. A company can have zero or many revenue streams, depending on its size.<br>
              *A revenue model is the strategy of managing a company’s revenue streams and the resources required for each revenue stream.<br>
              *A business model is the structure comprised of all aspects of a company, including revenue model and revenue streams, and describes how they all work together.
            <h2 style="color:red">1. Ad-Based Revenue Model</h2><br>
            <span style="color:blue"> -Ad-based revenue models entail creating ads for a specific website, service, app, or other product, and placing them on strategic, high-traffic channels. If your company has a website or you have a web-based company, Google’s AdSense is one of the most common tools get ads. For most websites, AdSense will earn about $5-10 per 1,000 page views.Affiliate Revenue Model</span>
            <br>
            <h2 style="color:red">2.Web-based revenue model</h1>
              <br>
              <span style="color:blue"> -Web-based revenue model is the affiliate revenue model, which works by promoting links to relevant products and collecting commission on the sales of those products, and can even work in conjunction with ads or separately.</span>
              </p>
              <a href="revenue2.php" target="_self" class="btn btn-info" style="float:right;height:40px;width:80px;border-radius:25px;">Next</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
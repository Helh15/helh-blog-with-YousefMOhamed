<!DOCTYPE html>
<html lang="en">

<head>
  <title>Elen - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div id="colorlib-page">
    
    @include('layouts.navigation')
    
    <div id="colorlib-main">
      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9">
            <div class="col-md-12 mb-4">
              <h2 class="h4 font-weight-bold">Contact Information</h2>

              @if(Session::has('error'))
                  <p class="text-danger">{{ Session::get('error') }}</p>
              @endif

            </div>
            <div class="col-md-12 order-md-last pr-md-5">
              <form action="{{ route('register') }}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name" name="name">
                </div>

                @if($errors->has('name'))
                  <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email" name="email">
                </div>
                
                @if($errors->has('email'))
                  <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif

                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Your password" name="password">
                </div>
                
                @if($errors->has('password'))
                  <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif

                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                </div>
                
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="Your Phone Number" name="phone_number">
                </div>

                <div class="form-group">
                  <textarea id="" cols="30" rows="7" class="form-control"
                    placeholder="Write a brief bio about yourself" name="about_me"></textarea>
                </div>

                <div class="form-group">
                  <div class="col-md-12 m-0">
                    <h4 class="h6 font-weight-bold">Please Uplaod Your Picture</h2>
                  </div>
                  <input type="file" class="form-control" placeholder="Profile Image" name="image">
                </div>
                <div class="form-group">
                  <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
                </div>
              </form>

            </div>

          </div>
        </div>
      </section>

      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container px-md-5">
          <div class="row">
            <div class="col-md-12">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                  target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div><!-- END COLORLIB-MAIN -->
  </div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>

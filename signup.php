
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>URDATINGAPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/login.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-background shadow">
            <div class="container">
                <a class="navbar-brand" href="#">YOURDATE</a>
                <div class="" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Learn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>



                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <!-- <span class="btn signup-btn">SignUp</span> -->
                    <button class="btn login-btn" type="submit">Login</button>
                </form>
            </div>
        </nav>
    </header>
   <!-- <section class="mt-5">
    <div class="login-box">
        <div class="lb-header">
          <a href="#" class="active" id="login-box-link">Login</a>
          <a href="#" id="signup-box-link">Sign Up</a>
        </div>
        <div class="social-login">
          <a href="#">
            <i class="fa fa-facebook fa-lg"></i>
            Login in with facebook
          </a>
          <a href="#">
            <i class="fa fa-google-plus fa-lg"></i>
            log in with Google
          </a>
        </div>
        <form class="email-login">
          <div class="u-form-group">
            <input type="email" placeholder="Email"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Password"/>
          </div>
          <div class="u-form-group">
            <button>Log in</button>
          </div>
          <div class="u-form-group">
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>
        </form>
        <form class="email-signup">
          <div class="u-form-group">
            <input type="email" placeholder="Email"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Password"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Confirm Password"/>
          </div>
          <div class="u-form-group">
            <button>Sign Up</button>
          </div>
        </form>
      </div>
   </section> -->
   <section class="container login">
    <div class="row mt-5">
      <div class="col-6 loginbackground">

      </div>
      <div class="col-6 bg-white">
          <div class="lb-header mt-5">
            <a href="#" class="active" id="login-box-link">Login</a>
            <!-- <a href="#" id="signup-box-link">Sign Up</a> -->
          </div>
         
          <form class="email-login" action="./php/register.php" method="post">
            <div class="u-form-group">
              <input type="email" placeholder="Email" name="email"/>
            </div>
            <div class="u-form-group">
              <input type="password"  name="password" placeholder="Password"/>
            </div>
            <div class="u-form-group">
              <input type="password" placeholder="Confirm Password"/>
            </div>
            <div class="u-form-group">
              <button>Sign Up</button>
            </div>
            <!-- <div class="u-form-group">
              <a href="#" class="forgot-password">Forgot password?</a>
            </div> -->
          </form>
          <div class="social-login">
            <a href="#">
              <i class="fa fa-facebook fa-lg"></i>
              Facebook Login
            </a>
            <a href="#">
              <i class="fa fa-google-plus fa-lg"></i>
              Google Login
            </a>
          </div>
          <!-- <form class="email-signup">
            <div class="u-form-group">
              <input type="email" placeholder="Email"/>
            </div>
            <div class="u-form-group">
              <input type="password" placeholder="Password"/>
            </div>
            <div class="u-form-group">
              <input type="password" placeholder="Confirm Password"/>
            </div>
            <div class="u-form-group">
              <button>Sign Up</button>
            </div>
          </form> -->
        
      </div>
    </div>
   </section>
    <script src="./js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>URDATINGAPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/index.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-background">
            <div class="container">
                <a class="navbar-brand" href="#">YOURDATE</a>
                <div class="" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.html">Learn</a>
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
                    <a  href="./login.html"class="btn login-btn" onclick="goLogin(e)">Login</a>
                </a>
                </form>
            </div>
        </nav>
    </header>
    <section class="landing-page container mt-5">
        <div class="row">
        <div class="col-5 welcome-text">
            <h1 class="mt-5">
                Find <br> The Perfect Match<br> For You
            </h1>
            
            <a  href="./login.html#"class="btn signup-btn" > Create A New Account</a>
        </div>
        <div class="col-7 bg-white">
            <div class="bg-image"></div>
        </div>
    </div>
    </section>
    <section class="testmonials">
        <div class="container mt-5"> 
            <h2 style=" text-align: center;"> Testmonial</h2>
        <div class="row  mb-3 mt-5 text-left">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-body">
                    <div class="row">
                    <h1 class="col-8"><small class="text-muted fw-light">Ty_flex</small></h1>
                    <h1 class="col-4 text-right quote"></h1>
                </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt sed voluptas facere accusantium. Consectetur blanditiis quasi optio mollitia exercitationem. Architecto aliquid odit dolores consequatur numquam temporibus obcaecati rerum reiciendis laborum?
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-body">
                    <div class="row">
                    <h1 class="col-8"><small class="text-muted fw-light">Ty_flex</small></h1>
                    <h1 class="col-4 text-right quote"></h1>
                </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt sed voluptas facere accusantium. Consectetur blanditiis quasi optio mollitia exercitationem. Architecto aliquid odit dolores consequatur numquam temporibus obcaecati rerum reiciendis laborum?
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-body">
                    <div class="row">
                    <h1 class="col-8"><small class="text-muted fw-light">Ty_flex</small></h1>
                    <h1 class="col-4 text-right quote"></h1>
                </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt sed voluptas facere accusantium. Consectetur blanditiis quasi optio mollitia exercitationem. Architecto aliquid odit dolores consequatur numquam temporibus obcaecati rerum reiciendis laborum?
                    </p>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </section>

    <section>
      
    </section>
    <footer class="container py-5">
        <div class="row">
          <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>
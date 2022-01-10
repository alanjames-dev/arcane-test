<?php
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
    
    if ($detect->isMobile()) {
        header("Location: ./mobile.html");
        die();
    }
    
    session_start();
    
    if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
        header("Location: Login/index.php");
    }
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arcane Society</title>
    <meta name="description" content="CTF Challenges for Arcane Society Member. Join our Discord for more info!">
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
  </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    <link rel=“icon” type=“image/x-icon” href="favicon.ico" />


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="imgloaded">
    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="#" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">THE ARCANE SOCIETY</span><span class="color_white"></span></h3>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        
                        <a href="Login/login.php" class="p-3 text-decoration-none text-light bold">Login</a>
                        <a href="Login/register.php" class="p-3 text-decoration-none text-light bold">Register</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">WELC</span>OME<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey text-spacey text-center hackerFont lead">
                        Now that you are a part of our community, you must know of some rules we follow around here.
                    </p>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <h4 class="bold color_danger pt-3">
                                General Rules and Instructions
                            </h4>
                            <ul>
                                <h5  class="bold color_white pt-3"> Don't Ruin the Fun for Players</h5>
                                <li> CTFs allow using any means or tools to solve challenges and outperform other teams.</li>
                                <li>  At the same time, some actions can break the fun for other people.</li>
                                <li> Don't delete flags or break services. While organizers try to maintain challenge resilience, mistakes will be made. Instead of abusing them, report them to the organisers for kudos.</li>
                                <li> Don't share flags or ask for flags. It's a competition, do your personal best. </li>
                                
                                <br><h5 class="bold color_white pt-3"> Don't Ruin the Fun for Organisers
</h5>
                               <li> Don't generate excessive load. Bruteforcing or DirBusting will not be necessary, let's keep it down.</li>
                               <li> Don't troll, spam, flood in the chats.</li>
                               <li> Don't register multiple accounts.</li>
        
                                <li> Organizers will guard the fun by punishing the fun-ruiners. </li>
                                
                                                          
                                <h5 class="bold color_danger pt-3">If you fail do not give up. You may get as many chances as possible. Do Your Best and Have Fun!</h5>
                                <h6 class="bold color_white pt-3">NOTE:<br> We expect each and every one of you to comply by the rules. Failure to do so might result in a permanent ban.</h6>
                            </ul>
                            <div class="row text-center pt-5">
                                <div class="col-xl-12">
                                    <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href='Login/login.php'})();">
                                        <h4>LET THE HACKING BEGIN!</h4>
                                    </button>
                                    <small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every one of you to comply by the rules. Failure to do so might result in a permanent ban.</small>
                                    <small id="registerHelp" class="mt-2 form-text text-muted">Website Template Credits to Team Lakshya.</small>
                                    <small id="registerHelp" class="mt-2 form-text text-muted">© - The Arcane Society</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .bg-light {
    background-color: #1d1e2f!important;
    }
    .text-center{
        color: white;
        backdrop-filter: opacity(0.5);
    }
    </style>
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-1 border-bottom"
  >
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i><b> ARCANE SOCIETY</b>
          </h6>
          <p>
            We look forward to building a strong and secure society together!
          </p>
        </div>
        <!-- Grid column -->
         <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <b>Our Policies</b>
          </h6>
          <p>
            <a href="terms.php" class="text-reset" style="text-decoration: none;">Terms and Conditions</a>
          </p>
          <p>
            <a href="/privacy.php" class="text-reset" style="text-decoration: none;">Privacy Policy</a>
          </p>
        </div>
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4"><b>
            Contact</b>
          </h6>
            <i class="fas fa-envelope me-3"></i>
            arcanesociety41@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
        </div>
        <!-- Grid column -->
      </div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">arcanesociety.in</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


    
</body>

</html>
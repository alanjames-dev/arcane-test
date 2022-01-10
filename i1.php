<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arcane Society</title>
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/main.css">
    <style>

iframe {
        width: 100%;
        height: 545px;
        margin-top: 1%;
        margin-bottom: 1%;
        
        
      }
      .marg{
        margin-top:25px;
    }
    .dropdown:hover>.dropdown-menu{
        display: block;
    }
    
.dropdown-item:focus, .dropdown-item:hover {
    color: #020203;
    text-decoration: none;
    background-color: #2d2e3f;
}
    </style>
    
    <!--<script type="text/javascript">
        var countDD = new Date().getTime();
        var countDownDate = countDD + 183000;
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("bodyID").innerHTML = "CONGRATULATIONS! THEM TURTLES ARE FASTER THAN YOU! TRY AGAIN";
            }
        }, 1000);
    </script>-->
</head>

<body class="imgloaded" id="bodyID">
    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
      <div class="navbar-light text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-light">
                <button class=" ml-auto navbar-toggler" style="background-color:red!important" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="../Login/index.php" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">THE ARCANE SOCIETY</span><span class="color_white"></span></h3>
                        </a>
                    </div>
              
                    <div class="navbar-nav ml-auto">
                     <a href="../challenge.php" class="p-4 text-decoration-none text-light bold marg">Challenges</a>
                    <!--    <a href="../leaderboard.php" class="p-3 text-decoration-none text-light bold marg">Leaderboard</a>-->
                    <a href="../i1.php" class="p-4 text-decoration-none text-light bold marg">Flag Submission</a>
                        <a href="../writeups.php" class="p-4 text-decoration-none text-light bold marg">Writeups</a>
                        <div class="mt-1 collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                   <a class="p-3 text-decoration-none text-light bold marg" id="navbarDropdown" href="../leaderboard.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    Leaderboard
                                  </a>
                                  <div class="dropdown-menu" style="background:#dbebfb75;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:white;" href="../leaderboard.php">Leaderboard</a>
                                    <a class="dropdown-item" style="color:white;" href="../aboutus.php">About Us</a>
                                    <a class="dropdown-item" style="color:white;" href="../course.php">Courses</a>
                                  </div>
                                </li>
                            </div>
                    	 <div class="d-flex justify-content-center align-items-center flex-column">
                    	 	<i class="bi bi-person-fill" style="font-size: 14rem"></i>
                            <a href="../profile.php" class="p-3 text-decoration-none text-light bold" style="color: #ef121b!important; font-size: 20px;">
                                <?php
                                    echo $_SESSION['user_full_name'];
                                ?>
                            </a>
                            <a href="../Login/logout.php" class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter">LOGOUT</a>
                    	 </div>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">FLAG SUB</span>MISSION<span class="vim-caret"></span></h1>
                    <p class="text-grey text-spacey text-center hackerFont lead" id="demo"></p>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <div class="row text-center pt-5">
                                <div class="col-xl-12">
                                    <div class="col-md-13">
                                    </div>
                                   
                                    <!--<button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href='i.html'})();">
                                        <h4>LET THE HACKING BEGIN!</h4>
                                    </button>-->
                                    <form action="config.php" method="post">
                                       
                                        <label><h5>Code</h5></label>
                                        <input class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" type="text" name ="code" placeholder="Code" style="margin-left: 1.6rem!important" required /><br>&nbsp;&nbsp;
                                        <input class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" type="submit" />
                                        <!--<button> class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href="congrats.html"})();">
                                        <h4>SUBMIT CODE</h4>
                                        </button>-->
                                    </form>
                                    <br><br>
                                    <!--<small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every one of you to comply by the rules. Failure to do so might result in a permanent ban.</small>-->
                                    <!--<small id="registerHelp" class="mt-2 form-text text-muted">© - The Arcane Society</small>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
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
            <a href="privacy.php" class="text-reset" style="text-decoration: none;">Privacy Policy</a>
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

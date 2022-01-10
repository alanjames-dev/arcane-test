<?php 
  session_start();

  if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
?>
<!DOCTYPE html>
<html lang="en">

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
    .marg{
        margin-top:25px;
    }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap4-neon-glow.min.css">
    <link rel=“icon” type=“image/x-icon” href="favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="../css/main.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
    
   
</head>
<body class="imgloaded">
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
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">INSTRU</span>CTIONS<span class="vim-caret">&nbsp;</span></h1>
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
                                
                                <br><h5 class="bold color_white pt-3"> Don't Ruin the Fun for Organisers</h5>
                               <li> Don't generate excessive load. Bruteforcing or DirBusting will not be necessary, let's keep it down.</li>
                               <li> Don't troll, spam, flood in the chats.</li>
                               <li> Don't register multiple accounts.</li>
        
                                <li> Organizers will guard the fun by punishing the fun-ruiners. </li>
                                
                                                          
                                <h5 class="bold color_danger pt-3">If you fail do not give up. You may get as many chances as possible. Do Your Best and Have Fun!</h5>
                                <h6 class="bold color_white pt-3">NOTE:<br> We expect each and every one of you to comply by the rules. Failure to do so might result in a permanent ban.</h6>
                            </ul>
                            <div class="row text-center pt-5">
                                <div class="col-xl-12">
                                    <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href='../challenge.php'})();">
                                        <h4>LET THE HACKING BEGIN!</h4>
                                    </button>
                                    <small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every one of you to comply by the rules. Failure to do so might result in a permanent ban.</small>
                                    <small id="registerHelp" class="mt-2 form-text text-muted">© - The Arcane Society</small>
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
</body>
</html>
<?php 
} else {
   header("Location: login.php");
}
?>
<?php
    session_start();
    $servername = "localhost";
    $uname = "id15200193_arcane_root";
    $pass = "A$0c1ety4dm1n$%#";
    $dbname = "id15200193_users";
   
    $db = new mysqli($servername, $uname, $pass, $dbname);
   
    if ($db->connect_error) {
        error_log('Connection error: ' . $db->connect_error);
    }
    
   
    if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arcane Challenges</title>

    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
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
.dropdown-item.active, .dropdown-item:active {
    color: #32334a;
    text-decoration: none;
    background-color: #2d2e3f;
}

    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
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

    <div class="jumbotron bg-transparent mb-0 pt-0 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12  text-center">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">CHALL</span>ENGES<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey text-spacey hackerFont lead mb-5">
                        It's time to show the world what you can do!
                    </p>
                </div>
            </div>
            <div class="row hackerFont">
                <div class="col-md-12" style="margin-bottom:35px;">
                    <div class="row hackerFont justify-content-center mt-5">
                        <div class="col-md-12">
                            Chart Difficulties:
                            <span style="color:#17b06b">Script Kiddie Level,</span>
                            <span style="color:#5728c2">Hacktivist Level,</span>
                            <span style="color:#ffce56">Hardened Level,</span>
                            <span style="color:#ef121b">Veteran Level,</span>
                            <span style="color:#2fff09">Admin Level</span>
                            <br><br>Challenge Types:
                            <span class="p-1" style="background-color:#ef121b94">Web</span>
                            <span class="p-1" style="background-color:#17b06b94">Reversing</span>
                            <span class="p-1" style="background-color:#f9751594">Steganography</span>
                            <span class="p-1" style="background-color:#36a2eb94">Pwning</span>
                            <span class="p-1" style="background-color:#9966FF94">Cryptography</span>
                            <span class="p-1" style="background-color:#ffce5694">OSINT</span>
                            <span class="p-1" style="background-color:#00a09994">Others</span>
                        </div>
                    </div>
                </div>
            </div>
                <!--Challenge 1-->
                <div class="col-md-12 mb-3">
                    <div class="card category_web">
                        <div class="card-header solved" data-target="#problem_id_1" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1" width=20px>
                            Source Code <span class="ml-4 badge align-self-end">10 points</span>                                    
                        </div>
                        <div id="problem_id_1" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num"> 
                                    <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=1");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                </div>
                                <p> I love using Dev-Tools. <br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <a target="_blank" href="Challenge1/sourcecode.html" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2"></span>Link</a>
                                <a href="#hint1" data-toggle="modal" data-target="#hint1" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                    
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!--Challenge 2-->
                <div class="col-md-12 mb-3">
                    <div class="card category_web">
                        <div class="card-header solved" data-target="#problem_id_2" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2" width=20px>
                            URL<span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_2" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=2");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                </div>
                                <p> Website Under Construction! <br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <a target="_blank" href="Challenge2/url.html" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2"></span>Link</a>
                                <a href="#hint2" data-toggle="modal" data-target="#hint2" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                    
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!--Challenge 3-->
                <div class="col-md-12 mb-3">
                    <div class="card category_steg">
                        <div class="card-header solved" data-target="#problem_id_3" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2" width=20px>
                            I Am Iron Man<span class="ml-4 badge align-self-end">20 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_3" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=3");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                </div>
                                <p> Check out this really cool pic I took of Mr. Stark. <br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <a target="_blank" href="https://bit.ly/4rc4Ne3" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>
                                <a href="#hint3" data-toggle="modal" data-target="#hint3" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p3" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p3" checked="true">Hacktivist Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!--Challenge 4-->
                <div class="col-md-12 mb-3">
                    <div class="card category_steg">
                        <div class="card-header solved" data-target="#problem_id_4" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_4" width=20px>
                            Death Note<span class="ml-4 badge align-self-end">20 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_4" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=4");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_4_chart"></canvas></div>
                                </div>
                                <p> Misa Amane's message to Light Yagami <br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <a target="_blank" href="https://bit.ly/4rc4Ne" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>
                                <a href="#hint4" data-toggle="modal" data-target="#hint4" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!--Challenge 5-->
                <div class="col-md-12 mb-3">
                    <div class="card category_crypt">
                        <div class="card-header solved" data-target="#problem_id_5" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_5" width=20px>
                            Rome<span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_5" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=5");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_5_chart"></canvas></div>
                                </div>
                                <p> Vmxviz{4gg_c41g_X43n4m} <br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <!--<a target="_blank" href="Challenge3/flag.png" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>-->
                                <a href="#hint5" data-toggle="modal" data-target="#hint5" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!--Challenge 6-->
                <div class="col-md-12 mb-3">
                    <div class="card category_crypt">
                        <div class="card-header solved" data-target="#problem_id_6" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_6" width=20px>
                            Roman Empire<span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_6" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=6");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_6_chart"></canvas></div>
                                </div>
                                <p>Mdomzq{3F_Fg_ndgF3} <br> Veni Vidi Vici. <br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <!--<a target="_blank" href="Challenge3/flag.png" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>-->
                                <a href="#hint6" data-toggle="modal" data-target="#hint6" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                
                <!--Challenge 7-->
                <div class="col-md-12 mb-3">
                    <div class="card category_steg">
                        <div class="card-header solved" data-target="#problem_id_7" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_7" width=20px>
                            Money Heist<span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_7" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=7");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_7_chart"></canvas></div>
                                </div>
                                <p> 1 new message received : From Nairobi <br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <a target="_blank" href="http://bit.ly/4rc4n3_7" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>
                                <a href="#hint7" data-toggle="modal" data-target="#hint7" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <!--Challenge 8-->
                <div class="col-md-12 mb-3">
                    <div class="card category_crypt">
                        <div class="card-header solved" data-target="#problem_id_8" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_8" width=20px>
                            Easy Encoding<span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                         
                        <div id="problem_id_8" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                   
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=8");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_8_chart"></canvas></div>
                                </div>
                                <p> KFMEU2SZK42WYZJTJZFFIWCCJVGTCOLJKZKGIZTCKRDDITJSKI4Q====<br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <!--<a target="_blank" href="https://bit.ly/4rc4n39" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>-->
                                <a href="#hint8" data-toggle="modal" data-target="#hint8" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <!--Challenge 9-->
                <div class="col-md-12 mb-3">
                    <div class="card category_crypt">
                        <div class="card-header solved" data-target="#problem_id_9" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_9" width=20px>
                            RSA<span class="ml-4 badge align-self-end">20 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_9" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=9");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_9_chart"></canvas></div>
                                </div>
                                <p> Bob sends Alice over the public channel a message, containing some confidential information. Our attacker, Eve, omnipresent as ever, has the ability to control the network path/flow of data between Alice and Bob. As she performs man-in-the-middle (MITM) attack, she gets hold on a file containing information. Can you find out what it is<br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <a target="_blank" href="http://bit.ly/4rc4ne9" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>
                                <a href="#hint9" data-toggle="modal" data-target="#hint9" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <!--Challenge 10-->
                <div class="col-md-12 mb-3">
                    <div class="card category_crypt">
                        <div class="card-header solved" data-target="#problem_id_10" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_10" width=20px>
                            Encoded!<span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                        <div id="problem_id_10" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=10");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_10_chart"></canvas></div>
                                </div>
                                <p> FMVSWKZLFMVSWKZLLM7CWPRLFMVT4KZLFMVSWKZLHYVSWKZLFMVSWKZLFM6DYPB4FVOT4PR6FUWS2LJNFY7CWKZLFMVSWKZLFMVSWKZLFMXC2LJNFUWS2LJNFUWS2LJNFUWS4LJNFYVSWKZLFMVSWKZLFMVSWKZOFUWS2LJNFUWS2LJOFMVSWKZLFMVSWKZLFMVSWKZLFMVSWKZLFMVS4LJNFUWS2LJNFUXDYLJNFUWS2LJNFUWS2LJNFUWS2LJNFY7C2LJNFUWS2LR4FMVSWLR6FUWS2LJNFUWS2LJNFUWS2LJOFMVSWKZLFMVSWKZLFMVSWKZLFMVS4KZLFY6C2LJNFY7C2LJNFUWS2LJNFUWS2LRLFMVSWKZLFMVSWKZLFY6CWKZLFMXD4LJNFUWS2LROHQWS2LJOHYVS4LJNFUWS2LJNFYWS2LJNFUWS2LJOFMVSWKZLFMVSWKZLFMVSWLR4FMVSWLR6FMVS4LJNFUWS2LJNFYVSWKZLFMVSWKZLFMVSWKZLFY6C4PRNFUWS2LJNFUWS2LJNFUWS2LR4FMVSWKZLFMVSWKZLFMVSWKZLFMVS4PRLFMVSWKZLFMVSWKZLFMXC2LJNFUWS2LJNFUWS2LJNFUWS2LJNFUWS4KZLFYVSWKZLFMVSWKZLFMVSWKZLFMVSWLR4FUWS2LJNFUWS2LJNFUWS2LJNFUWS2LR6FUWS2LJNFUWS2LJNFUWS2LJNFUWS2LJOFMVSWKZLFMVSWKZLFMVSWKZLFMVSWKZLFYVS4PBNFUXD4LJNFUWS2LJNFUXC4LJNFUWS2LJNFUWS2LJNFUXCWKZLFMVSWKZLFMVSWKZLFMVSWKZLFMVSWKZOFUWS2LJNFUWS4LJNFUXCWKZLFY6C2LR6FMVSWKZLFMVSWKZOFUWS2LJNFUWS2LJOFMVSWKZLFMVSWKZLFMVSWKZLFY======<br>Enter flag in the following format: Arcane{flag_here}
                                </p>
                                <!--<a target="_blank" href="#" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>-->
                                <a href="#hint10" data-toggle="modal" data-target="#hint10" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div> 
            <!--Challenge 11-->
                <div class="col-md-12 mb-3">
                    <div class="card category_crypt">
                        <div class="card-header solved" data-target="#problem_id_11" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_11" width=20px>
                            Too Much Cipher<span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                         
                        <div id="problem_id_11" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div >
                                    <img src="CIPHER/1.png" alt="">
                                    <img src="CIPHER/2.png" alt="">
                                    <img src="CIPHER/3.png" alt="">
                                    <img src="CIPHER/4.png" alt="">
                                    <img src="CIPHER/5.png" alt="">
                                    <img src="CIPHER/6.png" alt="">
                                    <img src="CIPHER/7.png" alt="">
                                    <img src="CIPHER/8.png" alt="">
                                    <img src="CIPHER/9.png" alt="">
                                    <img src="CIPHER/10.png" alt="">
                                    <img src="CIPHER/11.png" alt="">
                                    <img src="CIPHER/12.png" alt="">
                                    <img src="CIPHER/13.png" alt="">
                                    <img src="CIPHER/14.png" alt="">
                                    <img src="CIPHER/15.png" alt="">
                                    <img src="CIPHER/16.png" alt="">
                                    <img src="CIPHER/17.png" alt="">
                                    <img src="CIPHER/18.png" alt="">
                                    
                                    
                                </div><br>
                                <div style="display: flex;">
                                   
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=11");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_11_chart"></canvas></div>
                                </div>
                                <p> What does these pictures mean?<br>Enter flag in the following format: Arcane{FLAG}
                                </p>
                                <!--<a target="_blank" href="" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>-->
                                <a href="#hint11" data-toggle="modal" data-target="#hint11" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <!--Challenge 12-->
                <div class="col-md-12 mb-3">
                    <div class="card category_crypt">
                        <div class="card-header solved" data-target="#problem_id_12" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_12" width=20px>
                            Cyberpunk <span class="ml-4 badge align-self-end">10 points</span><!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                        </div>
                         <div id="problem_id_12" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                   
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=12");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_12_chart"></canvas></div>
                                </div>
                                <p>Wake up samurai, we have a city to burn! <br>Enter flag in the following format: Arcane{FLAG}
                                </p>
                                <a target="_blank" href="http://bit.ly/4rc4ne12" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>
                                <a href="#hint12" data-toggle="modal" data-target="#hint12" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Script Kiddie Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <!--Challenge 13-->
                    <div class="col-md-12 mb-3">
                        <div class="card category_osint">
                            <div class="card-header solved" data-target="#problem_id_17" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_15" width=20px>
                                Search Search Search<span class="ml-4 badge align-self-end">20 points</span>
                                <!--<h6 class="bold color_danger pt-3">-COMING SOON-</h6>-->
                            </div>
                             
                            <div id="problem_id_17" class="collapse card-body">
                                <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=13");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_13_chart"></canvas></div>
                                    </div>
                                    <p> 
                                        There has been a cyber attack on Aspen security firm, later the incident response team analyzed the system and cloud for any stolen data or vulnerabilities. As they thought some of the information regarding their top clients were stolen.<br>
                                            The next day, an email came upon the PC of the firm's CEO regarding a challenge to retrieve what was stolen,  it said <b>"If you guys don't want the stolen data to be released in dark web markets, 
                                            You have to play a simple game and show me that your firm is better than I thought. 
                                            If this happens the data stolen will be erased from my personal cloud server else  
                                            you know what's going to happen. Well the game has already begun tick tick tick tick. -Threat Actor"</b> <br>Soon after reading the email, the ceo reached out to you for help, as you are the only in the company with remarkable OSINT skills.<br>The email came from <b>morpheus_s_@findmeifyoucan.com</b><br>
                                            What can you find from it?<br>
                                            NOTE: flag consists of three parts, and is of the form : <br>
                                            Arcane{_____________________  __________________ "Radio_Type"}
                                            combine the flag without spaces and no missing terms, also enclose in {}
                                                
                                    </p>
                                    
                                    <a href="#hint17" data-toggle="modal" data-target="#hint17" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint 1</a>
                                    <a href="#hint18" data-toggle="modal" data-target="#hint18" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint 2</a>
                                    <a href="#hint20" data-toggle="modal" data-target="#hint20" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint 3</a>
                                    <div class="input-group mt-3">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
            <!--Challenge 14-->
                <div class="col-md-12 mb-3">
                    <div class="card category_steg">
                        <div class="card-header solved" data-target="#problem_id_13" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_13" width=20px>
                            MR. ROBOT<span class="ml-4 badge align-self-end">20 points</span>
                        </div>
                         
                        <div id="problem_id_13" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                
                                <div style="display: flex;">
                                   
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=14");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_14_chart"></canvas></div>
                                </div>
                                <p>Can you help her out to find what happened to Mr Robot? What does the picture mean?<br>Enter name of Mr.A as flag in the following format: Arcane{Firstname_Lastname}
                                </p>
                                <a target="_blank" href="Challenge(13-16)-Mr.Robot/index.html" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2" download></span>Link</a>
                               <a href="#hint13" data-toggle="modal" data-target="#hint13" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <!--Challenge 15-->
                <div class="col-md-12 mb-3">
                    <div class="card category_osint">
                        <div class="card-header solved" data-target="#problem_id_14" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_14" width=20px>
                            MR. ROBOT II<span class="ml-4 badge align-self-end">20 points</span>
                        </div>
                         
                        <div id="problem_id_14" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                
                                <div style="display: flex;">
                                   
                                    <h6 class="solvers">Solvers: <span class="solver_num"><?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=15");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?></span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_15_chart"></canvas></div>
                                </div>
                                <p> Find out the room number where the USB Flash Drive is and get one step closer to finding out what happened to Mr. Robot and where he is.<br>Enter the room name as flag in the following format: Arcane{NAME_OF/THE_ROOM}
                                </p>
                               <a target="_blank" href="Challenge(13-16)-Mr.Robot/index.html" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2" download></span>Link</a>
                                <a href="#hint14" data-toggle="modal" data-target="#hint14" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> 
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>   
            <!--Challenge 16-->
                    <div class="col-md-12 mb-3">
                        <div class="card category_crypt">
                            <div class="card-header solved" data-target="#problem_id_15" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_15" width=20px>
                                MR. ROBOT III<span class="ml-4 badge align-self-end">20 points</span>
                            </div>
                             
                            <div id="problem_id_15" class="collapse card-body">
                                <blockquote class="card-blockquote">
                                    
                                    <div style="display: flex;">
                                       
                                        <h6 class="solvers">Solvers: <span class="solver_num">
                                            <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=16");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                        </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                        <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_16_chart"></canvas></div>
                                    </div>
                                    <p>The distress signal was not foreign to Darlene's ears, and for an unknown reason, the word 'SOS' formed in her mind. Wonder why? <br>
                                    Note: Change '(' to '{' when submitting the flag!
                                    </p>
                                    <a target="_blank" href="Challenge(13-16)-Mr.Robot/index.html" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2" download></span>Link</a>
                                    <a target="_blank" href="http://bit.ly/4rc4neRobot30" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>
                                    <a href="#hint15" data-toggle="modal" data-target="#hint15" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                    <div class="input-group mt-3">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
            <!--Challenge 17-->
                <div class="col-md-12 mb-3">
                    <div class="card category_pwning">
                        <div class="card-header solved" data-target="#problem_id_16" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_16" width=20px>
                            MR. ROBOT IV<span class="ml-4 badge align-self-end">20 points</span>
                        </div>
                         
                        <div id="problem_id_16" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                
                                <div style="display: flex;">
                                   
                                    <h6 class="solvers">Solvers: <span class="solver_num"><?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=17");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?></span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_17_chart"></canvas></div>
                                </div>
                                <p> 
                                Mr X's instructions were pretty clean, read closely and lets finish up the task! Find him, EDWARD!<br>
                                NOTE: The flag format is Arcane{flag_format} and not Arcane(flag-format)
                                </p>
                                <a target="_blank" href="Challenge(13-16)-Mr.Robot/index.html" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2" download></span>Link</a>
                                <a target="_blank" href="https://bit.ly/4rc4neRobot4" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2" download></span>Download</a>
                                <a href="#hint16" data-toggle="modal" data-target="#hint16" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Hardened Level</label>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                
                    <!--Challenge 18-->
                    <div class="col-md-12 mb-3">
                        <div class="card category_web">
                            <div class="card-header solved" data-target="#problem_id_18" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_15" width=20px>
                                Cookie Jar<span class="ml-4 badge align-self-end">20 points</span>
                            </div>
                             
                            <div id="problem_id_18" class="collapse card-body">
                                <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">
                                        <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=18");
                                    $row = mysqli_fetch_array($result);
                                    echo $row['chall_count'];
                                    ?>
                                    </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_18_chart"></canvas></div>
                                    </div>
                                    <p> 
                                        Best Cookie Recipe
                                        2 cups + 2 Tablespoons all-purpose flour.
1/2 teaspoon baking soda.
1/2 teaspoon salt.
12 Tablespoons butter (1 1/2 sticks) melted and cooled until warm.
1 cup light brown sugar.
1/2 cup granulated sugar.
1 large + 1 egg yolk egg.
2 teaspoons vanilla extract.    
                                    </p>
                                    <a target="_blank" href="Challenge(18)-Cookie_And_JWT" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2" download></span>Link</a>
                                    <a href="#hint19" data-toggle="modal" data-target="#hint19" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                    <div class="input-group mt-3">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!--Challenge 19-->
<!--                    <div class="col-md-12 mb-3">-->
<!--                        <div class="card category_crypt">-->
<!--                            <div class="card-header solved" data-target="#problem_id_19" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_19" width=20px>-->
<!--                                Secret Birthday Party<span class="ml-4 badge align-self-end">20 points</span>-->
<!--                            </div>-->
                             
<!--                            <div id="problem_id_19" class="collapse card-body">-->
<!--                                <blockquote class="card-blockquote">-->
                                    
<!--                                    <div style="display: flex;">-->
                                       
<!--                                        <h6 class="solvers">Solvers: <span class="solver_num">0</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>-->
<!--                                        <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_19_chart"></canvas></div>-->
<!--                                    </div>-->
<!--                                    <p>Alexa and Adam just got into a fight in their long loving relationship.Adam feels guilty and wants to make up.He knows her birthday is coming and plans to use this as a chance.Her friends had decided to give her a birthday party.-->
<!--The problem is that her friends are angry at him ,so he isn't invited to her birthday party..He is sure her bestfriend Celena Bromez has some idea....-->
<!--Can you find the location for him?.... <br>-->
<!--                                    Note:-->
<!--                                    Flag format=Arcane{name_of_the_building}-->
<!--                                    </p>-->
<!--                                    <a target="_blank" href="https://bit.ly/3xMZI5b" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2" download></span>Link</a>-->
<!--                                     <a href="#hint23" data-toggle="modal" data-target="#hint23" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>-->
<!--                                    <div class="input-group mt-3">-->
<!--                                        <div class="custom-control custom-radio">-->
<!--                                            <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>-->
<!--                                            <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                       <!--Challenge 20-->
                    <!--<div class="col-md-12 mb-3">-->
                    <!--    <div class="card category_crypt">-->
                    <!--        <div class="card-header solved" data-target="#problem_id_19" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_19" width=20px>-->
                    <!--            Secret Birthday Party II<span class="ml-4 badge align-self-end">20 points</span>-->
                    <!--        </div>-->
                             
                    <!--        <div id="problem_id_19" class="collapse card-body">-->
                    <!--            <blockquote class="card-blockquote">-->
                                    
                    <!--                <div style="display: flex;">-->
                                       
                    <!--                    <h6 class="solvers">Solvers: <span class="solver_num">0</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>-->
                    <!--                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_19_chart"></canvas></div>-->
                    <!--                </div>-->
                    <!--                <p>"Thankyou for finding the secret location find me a perfect gift too please..."-Adam<br>-->
                    <!--                Note:-->
                    <!--                Flag format=Arcane{color_company_model}-->
                    <!--                </p>-->
                    <!--                <a href="#hint21" data-toggle="modal" data-target="#hint21" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint1</a>-->
                    <!--                <a href="#hint22" data-toggle="modal" data-target="#hint22" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint2</a>-->
                    <!--                <div class="input-group mt-3">-->
                    <!--                    <div class="custom-control custom-radio">-->
                    <!--                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>-->
                    <!--                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </blockquote>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <!--Challenge 20-->
                    <!--<div class="col-md-12 mb-3">-->
                    <!--    <div class="card category_web">-->
                    <!--        <div class="card-header solved" data-target="#problem_id_20" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_20" width=20px>-->
                    <!--            Click Me !!!!<span class="ml-4 badge align-self-end">20 points</span>-->
                    <!--        </div>-->
                             
                    <!--        <div id="problem_id_20" class="collapse card-body">-->
                    <!--            <blockquote class="card-blockquote">-->
                    <!--            <div style="display: flex;">-->
                    <!--                <h6 class="solvers">Solvers: <span class="solver_num">-->
                    <!--                    <?php  $result = mysqli_query($db,"SELECT * FROM flag WHERE id=20");
                                                $row = mysqli_fetch_array($result);
                                                echo $row['chall_count'];
                                                ?>-->
                    <!--                </span> &nbsp;<span class="color_danger">Difficulty:</span></h6>-->
                    <!--                <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_19_chart"></canvas></div>-->
                    <!--                </div>-->
                    <!--                <p> -->
                                        
                    <!--                </p>-->
                    <!--                <a target="_blank" href="Challenge(20)-Click_Me/index.html" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-link mr-2" download></span>Link</a>-->
                    <!--                <div class="input-group mt-3">-->
                    <!--                    <div class="custom-control custom-radio">-->
                    <!--                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input" checked>-->
                    <!--                        <label class="custom-control-label" for="customRadio1_p1" checked="true">Hacktivist Level</label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </blockquote>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
        </div>
        
        
        <!-- HINTS ARE HERE-->
        <div class="modal fade" id="hint1" tabindex="-1" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        The flag is in your BOOTS. This is a TRAP.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint2" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Files and Url make up a website.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint3" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        I guess JARVIS really knows how to keep BITS HIDDEN!
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint4" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        The SPACE between good (WHITE) and evil (black) are not that wide apart.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint5" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                       23 stabs! BETRAYAL!
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint6" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        "Cowards die many times before their deaths; the valiant never taste of death but once."
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint7" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Rio loves using kali tools.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint8" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        There is a saying: "Whatever you do, don't do it halfway"
                    </div>
                </div>
            </div>
        </div>
         <div class="modal fade" id="hint9" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Public and private are the way to go.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint10" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Human <b>BRAIN</b> is an incredible pattern-matching machine, but if the brain is <b>F**K</b>ed then it’s your responsibility. 
                    </div>
                </div>
            </div>
        </div>
         <div class="modal fade" id="hint11" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        The temple of art is built in words, but it also involves working manually.
                    </div>
                </div>
            </div>
        </div>
         <div class="modal fade" id="hint12" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        SARCAE
                    </div>
                </div>
            </div>
        </div>
         <div class="modal fade" id="hint13" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                    Wonder what new <b>Information</b> the Image contains
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="hint14" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Every chat has something hidden, look closely, and go on a tour
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint15" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                    Listen to the sound closely, sound familiar? A very useful mode of secret communication which dates back to 1905 ( · · · — — — · · · )    
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="hint16" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Metasploit is one powerful tool for cracking passwords
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="hint17" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Zuckerberg might be watching, so hurry up!
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint18" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <b>Meta</b> Keywords are a specific type of <b>meta</b> tag that appear in the HTML
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint19" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Cookies and application, I wonder what connection they have?
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint20" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        How is cell id related to Radio type??
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint21" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Try other social medias...
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hint22" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        You need to go way back to find the lost mysteries...
                    </div>
                </div>
            </div>
        </div>
         <div class="modal fade" id="hint22" tabindex="0" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                       I guess that building has a skybridge....
                    </div>
                </div>
            </div>
        </div>
        
        
        </div>
        <script>
            var dataset = [
                [100, 30, 10, 10, 10, 0], // keep the zero here
                [100, 30, 10, 10, 10, 0],
                [40, 100, 30, 10, 10, 0],
                [40, 100, 30, 10, 10, 0],
                [100, 30, 10, 10, 10, 0],
                [100, 30, 10, 10, 10, 0],
                [100, 30, 10, 10, 10, 0],
                [100, 30, 10, 10, 10, 0],
                [40, 100, 30, 10, 10, 0],
                [100, 40, 30, 10, 10, 0],
                [100, 40, 30, 10, 10, 0],
                [100, 40, 30, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 40, 100, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 100, 10, 10, 10, 0],
                [40, 100, 10, 10, 10, 0]
            ]

            function getBarChartData(i) {
                return barChartData = {
                    labels: ['Easy1', 'Easy2', 'Medium3', 'Hard4', 'Hard5'],
                    datasets: [{
                        label: 'Dataset 1',
                        backgroundColor: [
                            '#17b06b', '#5728c2', '#ffce56', '#ef121b', '#2fff09'
                        ],
                        borderColor: [
                            '#17b06b', '#5728c2', '#ffce56', '#ef121b', '#2fff09'
                        ],
                        borderWidth: 1,
                        data: dataset[i - 1]
                    }]

                };
            }

            window.onload = function() {
                var numcharts = 38;
                for (let i = 1; i <= numcharts; i++) {
                    var ctx = document.getElementById('problem_id_' + i + '_chart').getContext('2d');
                    window.myBar = new Chart(ctx, {
                        type: 'bar',
                        data: getBarChartData(i),
                        options: {
                            tooltips: {
                                enabled: false,
                            },
                            responsive: false,
                            legend: {
                                display: false,
                            },
                            scales: {
                                yAxes: [{
                                    display: false
                                }],
                                xAxes: [{
                                    display: false
                                }]
                            }
                        }
                    });
                    myBar.canvas.parentNode.style.width = '80px';
                    myBar.canvas.parentNode.style.height = '20px';
                }
            };
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <br><br>
        <div style="text-align:center;margin-bottom:3rem;">
        <!--<small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every one of you to comply by the rules. Failure to do so might result in a permanent ban.</small>-->
        <!--<small id="registerHelp" class="mt-2 form-text text-muted">© - The Arcane Society</small>-->
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
    <div style="height=200px;">
    </div>
<footer class="text-center text-lg-start bg-light text-muted">
   <!--Section: Social media -->
  
  <!--<section-->
  <!--  class="d-flex justify-content-center justify-content-lg-between p-1 border-bottom">-->
  <!--</section>-->
  
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <!--<section class="">-->
    <div class="container text-center text-md-start mt-5">
      <div class="row">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-5">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i><b> ARCANE SOCIETY</b>
          </h6>
          <p>
            We look forward to building a strong and secure society together!
          </p>
        </div>
         <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-5">
          <h6 class="text-uppercase fw-bold mb-4">
            <b>Follow us</b>
          </h6>
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
          <p>
            <a href="terms.php" class="text-reset" style="text-decoration: none;">Terms and Conditions</a>
          </p>
          <p>
          <!--  <a href="privacy.php" class="text-reset" style="text-decoration: none;">Privacy Policy</a>-->
          <!--</p>-->
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-5">
          <h6 class="text-uppercase fw-bold mb-4"><b>
            Contact</b>
          </h6>
            <i class="fas fa-envelope me-3"></i>
            arcanesociety41@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
        </div>
      </div>
      <!--<a href="" class="me-4 text-reset">-->
      <!--  <i class="fab fa-facebook-f"></i>-->
      <!--</a>-->
      <!--<a href="" class="me-4 text-reset">-->
      <!--  <i class="fab fa-instagram"></i>-->
      <!--</a>-->
      <!--<a href="" class="me-4 text-reset">-->
      <!--  <i class="fab fa-linkedin"></i>-->
      <!--</a>-->
      <!--<a href="" class="me-4 text-reset">-->
      <!--  <i class="fab fa-github"></i>-->
      <!--</a>-->
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">arcanesociety.in</a>
  </div>
</footer>

</body>

</html>
<?php 
} else {
   header("Location: Login/login.php");
}
?>

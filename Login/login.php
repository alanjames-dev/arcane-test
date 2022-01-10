<?php
    ob_start();
    include 'db_conn.php';
    

    // $ipaddress = $_SERVER['REMOTE_ADDR'];
    // $datetime = date("F j, Y, g:i a");
    // $useragent = $_SERVER['HTTP_USER_AGENT'];

    // $query = $conn->prepare("INSERT INTO visited_users (ip_address, date_time, Browser) VALUES (?, ?, ?)");
    // $query->execute([$ipaddress, $datetime, $useragent]);
    
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcane Society</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
        
        
    }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/bootstrap4-neon-glow.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="../css/main.css">

    <style>

iframe {
        width: 100%;
        height: 545px;
        margin-top: 1%;
        margin-bottom: 1%;
        
        
      }
      .hezd{
        font-size: 20px;
    }
    
    </style>
    
</head>

<body class="imgloaded" id="bodyID">
    <?php
        if (isset($_POST['email']) && isset($_POST['password'])) {
            
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
            
            if (empty($email)) {
                echo "<script>alert('Email is required');</script>";
            } else if (empty($password)){
                echo "<script>alert('Password is required');</script>";
            } else {
                $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
                $stmt->execute([$email]);

                if ($stmt->rowCount() === 1) {
                    $user = $stmt->fetch();

                    $user_id = $user['id'];
                    $user_email = $user['email'];
                    $user_password = $user['password'];
                    $user_full_name = $user['full_name'];
                    $user_user_name = $user['username'];
                    $user_active = $user['active'];
                    
                    if ($user_active == 1) {
                        if ($email === $user_email) {
                            if (password_verify($password, $user_password)) {
                                $_SESSION['user_id'] = $user_id;
                                $_SESSION['user_email'] = $user_email;
                                $_SESSION['user_full_name'] = $user_full_name;
                                $_SESSION['user_user_name'] = $user_user_name;
                                header("Location: index.php");
                            } else {
                                $msg = 'Incorrect Username or Password';
                            }
                        } else {
                            $msg = 'Incorrect Username or Password';
                        }
                    } else {
                        $msg = 'Please Activate your Account';
                    }
                } else {
                    $msg = 'Incorrect Username or Password';
                }
            }
        }
        ?>
        <!--PHP End-->
    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
    
   <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
        <a href="http://arcanesociety.in/" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">THE ARCANE SOCIETY</span><span class="color_white"></span></h3>
                        </a>
                        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <li class="nav-item ml-auto" style="list-style-type:none;">
              <a href="#" class="p-3 text-decoration-none text-light bold" style="color:white!important;" >Login</a>
              </li>
              <li class="nav-item" style="list-style-type:none;">
              <a href="register.php" class="p-3 text-decoration-none text-light bold">Register</a>
              </li>
          </div>
        </div>
      </nav>

    <div class="jumbotron bg-transparent pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">LOG</span>IN<span class="vim-caret"></span></h1>
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
                                    <form class="p-5 rounded shadow container-sm" action="" method="post">
                                        
                                        <?php
                                            if(isset($msg)){
                                                echo '<div class="alert alert-danger" role="alert" name="alertmessage">' . $msg . '</div>';
                                        } 
                                        ?>
                                        <div class="form-group mb-3">
                                            <label for="exampleInputEmail1" class="form-label hezd col-xs-2 col-lg-6 col-md-6">Email address</label>
                                            <input type="email" name="email" class="col-xs-10 col-lg-6 col-md-6 form-control btn-danger btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="exampleInputPassword1" class="form-label hezd col-xs-2 col-lg-6 col-md-6">Password</label>
                                            <input type="password" class=" col-xs-10 col-lg-6 col-md-6 form-control btn-danger btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" name="password" id="exampleInputPassword1" placeholder="Password" required>
                                            <!-- -->
                                            <!--style="margin-left: 4.8rem!important"-->
                                        </div>
                                        <button type="submit" class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left " style="margin-left:2rem!important">LOGIN</button><br>
                                        <a href="register.php" class="py-3" style="margin-top:10px; text-decoration: none;">Don't have an account? Register Now!</a><br>
                                        <a href="forgot-password.php" class="py-2" style="margin-top:20px; text-decoration: none;">Forgot Password?!</a><br>
                                       
                                    </form>

                                    
                                    
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



    
</body>



</html>

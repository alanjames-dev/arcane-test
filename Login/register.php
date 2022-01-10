<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register System PHP</title>
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


        // connect to the database
        include 'db_conn.php';

        if (isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
            
            $fullname = mysqli_escape_string($db, $_POST['fullname']);
            $username = mysqli_escape_string($db, $_POST['username']);
            $email = mysqli_escape_string($db, $_POST['email']);
            $password = mysqli_escape_string($db, $_POST['password']);
            $cpassword = mysqli_escape_string($db, $_POST['cpassword']);
                
            //Email Validation
            $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
            if(!preg_match($pattern, $email)){
                $msg = 'The email you have entered is invalid, please try again';
            } else {

                //Matching Passwords
                if ($password === $cpassword) {
                    $user_check_query = $conn->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
                    $user_check_query->execute([$email]);

                    // if user exists
                    if ($user_check_query->rowCount() === 1) {
                        $user = $user_check_query->fetch();

                        if ($user['email'] === $email) {
                            $msg = 'Email already exists!';
                        } else if ($user['username'] == $username){
                            $msg = 'Username already exists! Try another one!';
                        }
                    } else {
                        
                        //Password Validation
                        $number = preg_match('@[0-9]@', $password);
                        $uppercase = preg_match('@[A-Z]@', $password);
                        $lowercase = preg_match('@[a-z]@', $password);
                        $specialChars = preg_match('@[^\w]@', $password);

                        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                            $msg = 'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character';
                        } else {

                            //Register User
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            $query = $conn->prepare("INSERT INTO users (full_name, username, email, password) VALUES (?, ?, ?, ?)");
                            $query->execute([$fullname, $username, $email, $hashed_password]);
                            $_SESSION['username'] = $username;
                            //$_SESSION['success'] = "You are now logged in";

                            // use PHPMailer\PHPMailer\PHPMailer;
                            // use PHPMailer\PHPMailer\SMTP;

                            // require $_SERVER['DOCUMENT_ROOT'] . '/Login/mail/Exception.php';
                            // require $_SERVER['DOCUMENT_ROOT'] . '/Login/mail/PHPMailer.php';
                            // require $_SERVER['DOCUMENT_ROOT'] . '/Login/mail/SMTP.php';
                            require 'mail/PHPMailerAutoload.php';
                            
                            $mail = new PHPMailer();
                            $mail->isSMTP(); 
                            $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
                            $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
                            $mail->Port = 587; // TLS only
                            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ssl is deprecated
                            $mail->SMTPAuth = true;
                            $mail->Username = 'arcanesociety41@gmail.com'; // email
                            $mail->Password = 'Arcane 15 4 society'; // password
                            
                            $mail->setFrom('arcanesociety41@gmail.com', 'Arcane Society'); // From email and name
                            $mail->addAddress($email, 'Mr./Ms.'.$fullname); // to email and name
                            $mail->Subject = 'Arcane Account Verfication';
                            $mail->isHTML(true);
                            $mail->msgHTML("<html><body>
                            Thanks for signing up!<br>
                            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br>
                              
                            ----------------------------------------<br>
                            Username: " . $username . "<br>
                            Email: " . $email . "<br>
                            Password: " . $password . "<br>
                            ----------------------------------------<br>
                              
                            Please click this link to activate your account:<br>
                            http://arcanesociety.in/verify.php?email=%27" . $email . "%27&hash=%27" . $hashed_password . "%27 <br></body></html>"); 
                            //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
                            $mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
                            // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
                            // $mail->SMTPOptions = array(
                            //                     'ssl' => array(
                            //                         'verify_peer' => false,
                            //                         'verify_peer_name' => false,
                            //                         'allow_self_signed' => true
                            //                     )
                            //                 );
                            
                            if(!$mail->send()){
                                $msg = 'Mailer Error:' . $mail->ErrorInfo;
                            }else{
                                $msg = 'Confirmation Email Sent';
                            }
                            
                        }
                    }
                }
            }
        } elseif (isset($_POST['password']) && isset($_POST['cpassword']) && $password !== $cpassword) {
            $msg = "Password's do not match";
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
              <a href="login.php" class="p-3 text-decoration-none text-light bold"  >Login</a>
              </li>
              <li class="nav-item" style="list-style-type:none;">
              <a href="#" class="p-3 text-decoration-none text-light bold" style="color:white!important;">Register</a>
              </li>
          </div>
        </div>
      </nav>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">REGI</span>STER<span class="vim-caret"></span></h1>
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
                                            <label for="exampleInputFullname1" class="form-label hezd col-xs-2 col-lg-6 col-md-6">Full Name</label>
                                            <input type="text" class="col-xs-10 col-lg-6 col-md-6 mx-auto btn-danger btn-outline-danger btn-shadow text-left typewriter form-control" name="fullname" id="exampleInputFullname1" placeholder="Full Name"  required>
                                            
                                            <!--style="margin-left: 6.5rem!important"-->
                                            <!--px-3 my-2 ml-0 ml-sm-1 text-left-->
                                        </div>
                                        
                                        
                                        <div class="form-group mb-3">
                                            <label for="exampleInputFullname1" class="form-label hezd col-xs-2 col-lg-6 col-md-6">Username</label>
                                            <input type="text" class="col-xs-10 col-lg-6 col-md-6 mx-auto btn-danger btn-outline-danger btn-shadow text-left typewriter form-control" name="username" id="exampleInputFullname1" placeholder="Username"  required>
                                            <!--style="margin-left: 7.4rem!important"-->
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="exampleInputEmail1" class="form-label hezd col-xs-2 col-lg-6 col-md-6">Email Address</label>
                                            <input type="email" name="email" class=" col-xs-10 col-lg-6 col-md-6 mx-auto btn-danger btn-outline-danger btn-shadow text-left typewriter form-control" id="exampleInputEmail1" placeholder="Email address" required>
                                            <!--style="margin-left: 2.8rem!important"-->
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="exampleInputPassword1" class=" col-xs-2 col-lg-6 col-md-6 form-label hezd">Password</label>
                                            <input type="password" class=" col-xs-10 col-lg-6 col-md-6 mx-auto btn-danger btn-outline-danger btn-shadow form-control text-left typewriter" name="password" id="exampleInputPassword1" placeholder="Password"  required>
                                            <!--style="margin-left: 7.4rem!important"-->
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="exampleInputPassword2" class="form-label hezd  col-xs-2 col-lg-6 col-md-6">Confirm Password</label>
                                            <input type="password" class=" col-xs-10 col-lg-6 col-md-6 mx-auto btn-danger btn-outline-danger btn-shadow text-left typewriter form-control" name="cpassword" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left ">REGISTER</button><br>
                                        
                                        
                                        <a href="login.php" class="py-2" style="margin-top:10px">Already have an account? Login Now!</a>
                                        
                                         
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


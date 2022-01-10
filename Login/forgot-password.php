<?php
    session_start();
    ob_start();
    $otp = mt_rand(100000,999999);
    $_SESSION['otp'] = $otp;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CTF Challenges for Arcane Society Member. Join our Discord for more info!">
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
    .marg{
        margin-top:25px;
    }
    
    .container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
    .container .form{
        background: #fff;
        padding: 30px 35px;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .container .form form .form-control{
        height: 40px;
        font-size: 15px;
    }
    .container .form form .forget-pass{
        margin: -15px 0 15px 0;
    }
    .container .form form .forget-pass a{
       font-size: 15px;
    }
    .container .form form .button{
        background: #6665ee;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .container .form form .button:hover{
        background: #5757d1;
    }
    .container .form form .link{
        padding: 5px 0;
    }
    .container .form form .link a{
        color: #6665ee;
    }
    .container .login-form form p{
        font-size: 14px;
    }
    .container .row .alert{
        font-size: 14px;
    }
    .text-center{
        color:black;
    }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap4-neon-glow.min.css">
    <link rel=“icon” type=“image/x-icon” href="favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="imgloaded">
    <?php
        // connect to the database
        include 'db_conn.php';
        
        if (isset($_POST['email'])) {
    
            $email = mysqli_escape_string($db, $_POST['email']);
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
            $mail->addAddress($email); // to email
            $mail->Subject = 'Arcane Account Password Reset';
            $mail->isHTML(true);
            $mail->msgHTML("<html><body>
            Your account password has been reset, you can change  your password by using the OTP below.<br>
              
            ----------------------------------------<br>
            OTP: " . $otp . "<br>
            ----------------------------------------<br> ");
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
    ?>
    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <?php 
                        if(isset($msg)){
                            echo '<div class="alert alert-danger" role="alert" name="alertmessage">' . $msg . '</div>';
                        } 
                    ?>
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                        <?php
                            if(isset($_POST['check-email'])){
                                $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
                                if(!preg_match($pattern, $email)){
                                    $otppage = 0;
                                    $msg = 'The email you have entered is invalid, please try again';
                                }
                                else{
                                    $otppage = 1;
                                    $_SESSION['email'] = $_POST['email'];
                                    header("location:user-otp.php");
                                }
                            }
                        ?>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>


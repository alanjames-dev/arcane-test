<?php 
    session_start();
    ob_start();
    $valid = $_SESSION['valid'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
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
                <form action="new-password.php" method="POST" autocomplete="off">
                    <?php 
                        if(isset($msg)){
                            echo '<div class="alert alert-danger" role="alert" name="alertmessage">' . $msg . '</div>';
                        } 
                    ?>
                    <h2 class="text-center">New Password</h2>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass" placeholder="Enter New Password" required><br>
                        <input class="form-control" type="password" name="cpass" placeholder="Confirm New Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                        <?php
                            if(isset($_POST['check'])){
                                if($_POST['pass'] == $_POST['cpass']){
                                    if($valid == 1){
                                        $otpmsg = "Success!";
                                        include 'db_conn.php';
                                        $password = $_POST['pass'];
                                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                                        $query = $conn->prepare("UPDATE users SET password=? WHERE email=?");
                                        $query->execute([$hashed_password, $email]);
                                        header("location:login.php");
                                    }
                                    else{
                                        $msg = "Incorrect OTP";
                                    }
                                }
                                else{
                                    $msg = "Password not matching";
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


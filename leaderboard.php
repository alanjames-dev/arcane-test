<?php 
        ob_start();
        $servername = "localhost";
        $uname = "id15200193_arcane_root";
        $pass = "A$0c1ety4dm1n$%#";
        $dbname = "id15200193_users";
       
        $db = new mysqli($servername, $uname, $pass, $dbname);
       
        if ($db->connect_error) {
            error_log('Connection error: ' . $db->connect_error);
        }
        
        $sql = "SELECT * FROM users ORDER BY points DESC";
        $result = $db->query($sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //print_r($data[0]["username"]);
        session_start();
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
    .dropdown:hover>.dropdown-menu{
        display: block;
    }
    
.dropdown-item:focus, .dropdown-item:hover {
    color: #020203;
    text-decoration: none;
    background-color: #2d2e3f;
}
    *{
      box-sizing: border-box;
    }
    
    .Leaderboard{
        padding: 40px 20px;
        margin: auto;
        max-width: 800px;
    }
    .leader-wrap {
        display: flex;
    }
    
    .leader{
        padding: 8px 16px;
        margin-bottom: 8px;
        animation-name: revealLeaders;
        animation-duration: .4s;
        animation-fill-mode: both;
        animation-timing-function: ease-in-out;
    }
    
    .leader-ava {
        padding: 8px;
        margin-right: 16px;
        position: relative;
    }
    
    .leader-score {
        display: flex;
        align-items: center;
        opacity: 0.6;
    }
    
    .leader-score svg{
        display: block;
        margin-right: 4px;
    }
    
    .leader-score_title{
        line-height: 1;
    }
    
    .leader-ava::after{
        content: "";
        left: 0;
        bottom: 0;
        display: block;
        height: 6px;
        position: absolute;
        border: 0px transparent solid;
        border-left-width: 20px;
        border-right-width: 20px;
        border-bottom-width: 6px;
        border-bottom-color: #fff;
        transition: border-bottom-color .2s ease-in-out;
    }
    
    .leader-bar {
        margin-top: 8px;
        animation-name: barLoad;
        animation-duration: .4s;
        animation-fill-mode: both;
        animation-timing-function: cubic-bezier(0.6, 0.2, 0.1, 1);
        transform-origin: left;
    }
    
    .bar {
        height: 4px;
        border-radius: 2px;
    }
    
    @keyframes revealLeaders{
        from{
            transform: translateX(-200px);
            opacity: 0;
        }
        to{
            transform: none;
            opacity: 1;
        }
    }
    
    @keyframes barLoad{
        from{
            transform: scaleX(0);
        }
        to{
            transform: scaleX(1)
        }
    }
    
  </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    <link rel=“icon” type=“image/x-icon” href="favicon.ico" />


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
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
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">LEADER</span>BOARD<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey lead text-spacey text-center hackerFont">
                    </p>
                    <div class="row justify-content-center my-5">
                        <div class="col-xl-10">
                            <div id="app"></div>
                            <!-- partial -->
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.0.2/react.js'></script>
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.0.2/react-dom.js'></script>
                            <script>
                                let colors = [
                                '#FFB900',
                                '#69797E',
                                '#847545',
                                '#E74856',
                                '#0078D7',
                                '#0099BC',
                                '#7A7574',
                                '#767676',
                                '#FF8C00',
                                '#E81123',
                                '#0063B1',
                                '#2D7D9A',
                                '#5D5A58',
                                '#4C4A48',
                                '#F7630C',
                                '#EA005E',
                                '#8E8CD8',
                                '#00B7C3',
                                '#68768A',
                                '#CA5010',
                                '#C30052',
                                '#6B69D6',
                                '#038387',
                                '#515C6B',
                                '#4A5459',
                                '#DA3B01',
                                '#E3008C',
                                '#8764B8',
                                '#00B294',
                                '#567C73',
                                '#647C64',
                                '#EF6950',
                                '#BF0077',
                                '#744DA9',
                                '#018574',
                                '#486860',
                                '#525E54',
                                '#D13438',
                                '#C239B3',
                                '#B146C2',
                                '#00CC6A',
                                '#498205',
                                '#FF4343',
                                '#9A0089',
                                '#881798',
                                '#10893E',
                                '#107C10',
                                '#7E735F'];
                                
                                
                                class Leaderboard extends React.Component {
                                  constructor() {
                                    super();
                                    this.state = {
                                      leaders: [],
                                      maxScore: 500 };
                                
                                    this.getData = this.getData.bind(this);
                                  }
                                  getData() {
                                      let data = {
                                      success: true,
                                      leaders: [
                                        <?php
                                       
                                    //     foreach ($data as $val) {
                                    //         echo "{ id: ".$val['id'].", name: '".$val['username']."', score: ".$val['points']." },";    
                                    //   }
                                    
                                    for ($i=0;$i<5;$i++) {
                                            echo "{ id: ".$data[$i]['id'].", name: '".$data[$i]['username']."', score: ".$data[$i]['points']." },";    
                                      }
                                    
                                    ?>
                                     ],
                                
                                      maxScore: 1500 };
                                    
                                
                                    this.setState({
                                      leaders: data.leaders,
                                      maxScore: data.maxScore });
                                
                                  }
                                  componentWillMount() {
                                    this.getData();
                                    /*data is refreshing every 3 minutes*/
                                    setInterval(this.getData, 180000);
                                  }
                                  render() {
                                    return (
                                      React.createElement("div", { className: "Leaderboard" },
                                    //   React.createElement("h1", null, "Leaderboard"),
                                      React.createElement("div", { className: "leaders" },
                                      this.state.leaders ?
                                      this.state.leaders.map((el, i) =>
                                      React.createElement("div", {
                                        key: el.id,
                                        style: {
                                          animationDelay: i * 0.1 + 's' },
                                
                                        className: "leader" },
                                
                                      React.createElement("div", { className: "leader-wrap" },
                                      i < 3 ?
                                      React.createElement("div", {
                                        style: {
                                          backgroundColor: colors[i] },
                                
                                        className: "leader-ava" },
                                
                                      React.createElement("svg", {
                                        fill: "#fff",
                                        xmlns: "http://www.w3.org/2000/svg",
                                        height: 24,
                                        width: 24,
                                        viewBox: "0 0 32 32" },
                                
                                      React.createElement("path", { d: "M 16 3 C 14.354991 3 13 4.3549901 13 6 C 13 7.125993 13.63434 8.112309 14.5625 8.625 L 11.625 14.5 L 7.03125 11.21875 C 7.6313215 10.668557 8 9.8696776 8 9 C 8 7.3549904 6.6450096 6 5 6 C 3.3549904 6 2 7.3549904 2 9 C 2 10.346851 2.9241199 11.470238 4.15625 11.84375 L 6 22 L 6 26 L 6 27 L 7 27 L 25 27 L 26 27 L 26 26 L 26 22 L 27.84375 11.84375 C 29.07588 11.470238 30 10.346852 30 9 C 30 7.3549901 28.645009 6 27 6 C 25.354991 6 24 7.3549901 24 9 C 24 9.8696781 24.368679 10.668557 24.96875 11.21875 L 20.375 14.5 L 17.4375 8.625 C 18.36566 8.112309 19 7.125993 19 6 C 19 4.3549901 17.645009 3 16 3 z M 16 5 C 16.564129 5 17 5.4358709 17 6 C 17 6.5641291 16.564129 7 16 7 C 15.435871 7 15 6.5641291 15 6 C 15 5.4358709 15.435871 5 16 5 z M 5 8 C 5.5641294 8 6 8.4358706 6 9 C 6 9.5641286 5.5641291 10 5 10 C 4.4358709 10 4 9.5641286 4 9 C 4 8.4358706 4.4358706 8 5 8 z M 27 8 C 27.564129 8 28 8.4358709 28 9 C 28 9.5641283 27.564128 10 27 10 C 26.435872 10 26 9.5641283 26 9 C 26 8.4358709 26.435871 8 27 8 z M 16 10.25 L 19.09375 16.4375 L 20.59375 16.8125 L 25.59375 13.25 L 24.1875 21 L 7.8125 21 L 6.40625 13.25 L 11.40625 16.8125 L 12.90625 16.4375 L 16 10.25 z M 8 23 L 24 23 L 24 25 L 8 25 L 8 23 z" }))) :
                                
                                
                                      null,
                                      React.createElement("div", { className: "leader-content" },
                                      React.createElement("div", { className: "leader-name" }, i + 1 + '. ' + el.name),
                                      React.createElement("div", { className: "leader-score" },
                                      React.createElement("svg", {
                                        fill: "currentColor",
                                        height: "20",
                                        viewBox: "0 0 493 493",
                                        version: "1.1",
                                        xmlns: "http://www.w3.org/2000/svg" },
                                
                                      React.createElement("path", { d: "M247,468 C369.05493,468 468,369.05493 468,247 C468,124.94507 369.05493,26 247,26 C124.94507,26 26,124.94507 26,247 C26,369.05493 124.94507,468 247,468 Z M236.497159,231.653661 L333.872526,231.653661 L333.872526,358.913192 C318.090922,364.0618 303.232933,367.671368 289.298112,369.742004 C275.363292,371.81264 261.120888,372.847943 246.570473,372.847943 C209.522878,372.847943 181.233938,361.963276 161.702804,340.193617 C142.17167,318.423958 132.40625,287.169016 132.40625,246.427855 C132.40625,206.805956 143.738615,175.914769 166.403684,153.753368 C189.068753,131.591967 220.491582,120.511432 260.673112,120.511432 C285.856523,120.511432 310.144158,125.548039 333.536749,135.621403 L316.244227,177.257767 C298.336024,168.303665 279.700579,163.826682 260.337335,163.826682 C237.840155,163.826682 219.820296,171.381591 206.277218,186.491638 C192.734139,201.601684 185.962702,221.915997 185.962702,247.435186 C185.962702,274.073638 191.419025,294.415932 202.331837,308.462679 C213.244648,322.509425 229.109958,329.532693 249.928244,329.532693 C260.785092,329.532693 271.809664,328.413447 283.002291,326.174922 L283.002291,274.96891 L236.497159,274.96891 L236.497159,231.653661 Z" })),
                                
                                      React.createElement("div", { className: "leader-score_title" }, el.score)))),
                                
                                
                                
                                      React.createElement("div", { style: { animationDelay: 0.4 + i * 0.2 + 's' }, className: "leader-bar" },
                                      React.createElement("div", {
                                        style: {
                                          backgroundColor: colors[i],
                                          width: el.score / this.state.maxScore * 100 + '%' },
                                
                                        className: "bar" })))) :
                                
                                
                                
                                
                                
                                      React.createElement("div", { className: "empty" }, "\u041F\u0443\u0441\u0442\u043E"))));
                                
                                
                                
                                
                                  }}
                                
                                
                                ReactDOM.render(React.createElement(Leaderboard, null), document.getElementById('app'));
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5  justify-content-center">
                <div class="col-xl-10">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark hackerFont">
                            <tr>
                                <th>#</th>
                                <th>Hacker Name</th>
                                <th># Challenges Solved</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($data as $val) {
                                echo "<tr>
                                    <th scope='row'>".$count."</th>
                                    <td>".$val['username']."</td>
                                    <td>".$val['solved']."</td>
                                    <td>".$val['points']."</td>
                                </tr>";
                                $count = $count + 1;
                            }
                            
                            
                            ?>
                        </tbody>
                    </table><br><br>
                    <!--<div style="text-align:center;">-->
                    <!--<small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every one of you to comply by the rules. Failure to do so might result in a permanent ban.</small>-->
                    <!--<small id="registerHelp" class="mt-2 form-text text-muted">© - The Arcane Society</small>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

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
<?php
    mysqli_close($db);
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Windows 10 Concept</title>
   <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
    .marg{
        margin-top:25px;
    }
    </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet' href='https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js'><link rel="stylesheet" href="./css/window.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/0e7d5843d0.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">



<div class="desktop">
  <div class="start-menu-fade"></div>
  <div class="start-menu">
    <div class="start-menu__list">
      <div class="media">
        <a class="user-info" href="#">
        <img class="user-info__img media__img" src="https://i.imgur.com/KkCqvK9.png" alt="User image">
        <div class="user-info__name media__body">
          <?php
            echo $_SESSION['user_full_name'];?>
        </div>
        </a>
        <a class="user-info__power" onclick="war()">
          <i class="fa fa-power-off"></i>
        </a>
        <script>
            function war(){
                parent.document.getElementById('windowframe').src = './dist/poweron.html';
            }
        </script>
      </div>
      <ul class="start-menu__recent">
        <li class="start-menu__crypto">
          <a data-window="crypto">
            <i class="fas fa-unlock-alt"></i>
            CRYPTO
          </a>
        </li>
        <li class="start-menu__web">
          <a data-window="web">
            <i class="fas fa-globe-americas"></i>
            WEB
          </a>
        </li>
        <li class="start-menu__forensics">
          <a data-window="forensics">
            <i class="fas fa-fingerprint"></i>
            FORENSICS
          </a>
        </li>
        <li class="start-menu__pwn">
          <a data-window="pwn">
            <i class="fas fa-terminal" style="font-size:15px;"></i>
            PWN
          </a>
        </li>
        <li class="start-menu__osint">
          <a data-window="osint">
            <i class="fas fa-search"></i>
            OSINT
          </a>
        </li>
        <li class="start-menu__misc">
          <a data-window="misc">
            <i class="fab fa-buromobelexperte"></i>
            MISC
          </a>
        </li>
        
      </ul>
      <script>
        function StartMenuShow() {
          var element1 = document.getElementById("extra_start_menu");
          var element2 = document.getElementById("start-arrow-r");
          var element3 = document.getElementById("start-arrow-d");
          element1.classList.remove("startmenu__item--hidden");
          element2.classList.add("startmenu__item--hidden");
          element3.classList.remove("startmenu__item--hidden");          
          
        }
        function StartMenuHide() {
          var element1 = document.getElementById("extra_start_menu");
          var element2 = document.getElementById("start-arrow-r");
          var element3 = document.getElementById("start-arrow-d");
          element1.classList.add("startmenu__item--hidden");
          element2.classList.remove("startmenu__item--hidden");
          element3.classList.add("startmenu__item--hidden");          
          
        }
      </script>
      <a class="all-apps" href="#">
        All apps
        <div class="startmenu__item--hidden" onclick="StartMenuShow()" id="start-arrow-r">
          <i class="fa fa-arrow-right"></i>
        </div>
        <div class="" onclick="StartMenuHide()" id="start-arrow-d">
          <i class="fa fa-arrow-down"></i>
        </div>
      </a>
      
      <input type="text" class="search" placeholder="Search files and folders">
    </div>
    <div class="start-screen-scroll" id="extra_start_menu">
    <div class="start-screen">
      <a class="start-screen__tile start-screen__tile--explorer masonry-item" target="_blank" href="https://infosecwriteups.com/tagged/ctf">
        <img width="100%" height="100%" src='https://cdn-images-1.medium.com/fit/c/75/75/1*AYD5ja6D0tjSzJ4RjetQtQ.png'/>
        <span>InfoSec</span>
      </a>
      <a class="start-screen__tile masonry-item" href="https://www.hackthebox.eu/" target="_blank"><img width="100%" height="100%" src='https://www.bing.com/th?id=AMMS_c9e4735a986f0acff8cfcb552aa78f60&w=110&h=110&c=7&rs=1&qlt=95&pcl=f9f9f9&o=6&cdv=1&dpr=1.25&pid=16.1'/>
      <span>Hack The Box</span>
      </a>

      <a class="start-screen__tile start-screen__tile--wide masonry-item"  data-ss-colspan="2" target="_blank" href="https://tryhackme.com/">
      <img width="100%" height="100%" src='https://assets.tryhackme.com/img/logo/tryhackme_logo_full.svg'><span></span>
      </a>
      <a class="start-screen__tile start-screen__tile--wide masonry-item"  data-ss-colspan="2" target="_blank" href="https://ctftime.org/writeups"><img width="100%" height="100%" class="fa" aria-hidden="true" src="https://www.bing.com/images/blob?bcid=SxGtc0pUW14DDw"></img>
      <span>CTFtime</span>
      </a>
      <a class="start-screen__tile start-screen__tile--wide masonry-item"  data-ss-colspan="2" target="_blank" href="https://wiki.bi0s.in/"><img width="100%" height="100%"src=" https://wiki.bi0s.in/_static/img/bi0s-logo.png">
      <span>Bios</span>
      </a>
      
      <a class="start-screen__tile start-screen__tile--notepad masonry-item" target="_blank" href="https://medium.com/ctf-writeups"><img width="100%" height="100%" src="https://cdn-images-1.medium.com/fit/c/45/45/1*5zNB5VCkfVKpJgEN5laETw.png"><span>CTF</span>
      </a>
      <a class="start-screen__tile start-screen__tile--large start-screen__tile--mail masonry-item"  data-ss-colspan="2" target="_blank" href="https://challenges.reply.com/tamtamy/challenges/category/cybersecurity#home'/"><img style="width:100%; height:100%;" src='https://cdn.reply.com/tamtamy/skins/code_challenge/dist/graphic/challenges-logo.svg?v=192632'/>
        <span>Reply Challenges</span>
      </a>
      <a class="start-screen__tile masonry-item" target="_blank" href="https://www.hackerone.com/"><img width="100%" height="100%" src='https://pbs.twimg.com/profile_images/1410537742006734849/sVIAVWSp_400x400.png'/><span>Hackerone</span>
      </a>
    </div>
    </div>
  </div>
  
  <div class="taskbar">
    <a class="taskbar__item taskbar__item--start"  data-window="start">
      <i class="fa fa-windows"></i>
    </a>
    <a class="taskbar__item taskbar__item--crypto taskbar__item--hidden"  data-window="crypto" >
      <i class="fas fa-unlock-alt"></i>
    </a>
    <a class="taskbar__item taskbar__item--web taskbar__item--hidden"  data-window="web" >
      <i class="fas fa-globe-americas"></i>
    </a>
    <a class="taskbar__item taskbar__item--forensics taskbar__item--hidden"  data-window="forensics">
      <i class="fas fa-fingerprint"></i>
    </a>
    <a class="taskbar__item taskbar__item--pwn taskbar__item--hidden"  data-window="pwn" >
      <i class="fas fa-terminal" style="font-size:15px;"></i>
    </a>
    <a class="taskbar__item taskbar__item--osint taskbar__item--hidden"  data-window="osint">
      <i class="fas fa-search"></i>
    </a>
    <a class="taskbar__item taskbar__item--misc taskbar__item--hidden" " data-window="misc">
      <i class="fab fa-buromobelexperte"></i>
    </a>
    
    <div class="taskbar__tray">
      <span class="time">
        <script>
          
         </script>
      </span>
    </div>
  </div>
  
  <!-- ------------Crypto------------ -->
  <div class="window window--crypto" data-window="crypto" style="display:none;width:640px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
            
      <span class="window__title">
        Crypto WriteUps
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <!-- <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul> -->
    
    <div class="window__body">
      <div class="window__side">
        
        <ul class="side__list">
          <li>
            <a onclick='cryptonb("https://arcanesociety.github.io/WriteUps/crypto/Vulcon%20CTF/")'>Vulcon CTF</a>
            <ul>
              <li><a onclick='cryptonb("https://arcanesociety.github.io/WriteUps/crypto/Can_you_c_the_password/Can_you_c_the_password.html")'>Can_you_c_the_password?</a></li>
              <li><a onclick='cryptonb("../index.php")'>Double</a></li>
          </ul>
          </li>
          <!-- <li>
            <a href="#">This Device</a>
            <ul style="display:none">
              <li><a href="#">Desktop</a>
                <ul style="display:none">
                  <li>
                    <a href="#">Folder 1</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">Documents</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Local Disk  (C:)</a></li>
          </li> -->
        </ul>
      </div>
      <div class="window__main">
        <iframe class="" src="https://arcanesociety.github.io/WriteUps/crypto/Can_you_c_the_password/Can_you_c_the_password.html" style="border:none;height:100%;width:100%;" id="crypto-iframe"></iframe>
      </div>
    </div>
    
  </div>


  <!-- ------------Web------------ -->
  <div class="window window--web" data-window="web" style="display:none;width:640px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
            
      <span class="window__title">
        Web WriteUps
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <div class="window__body">
      <div class="window__side">
        
        <ul class="side__list">
          <li>
            <a onclick='web_pop("https://arcanesociety.github.io/WriteUps/crypto/Web%20CTF/"")'>Vulcon CTF</a>
            <ul>
              <li><a onclick='web_pop("../index.php")'>MAZE</a></li>
          </ul>
          </li>
          
        </ul>
      </div>
      <div class="window__main">
        <iframe class="" src="https://arcanesociety.github.io/WriteUps/" style="border:none;height:100%;width:100%;" id="web-iframe"></iframe>
      </div>
    </div>
    
  </div>
    


  <!-- ------------Forensics------------ -->
  <div class="window window--forensics" data-window="forensics" style="display:none;width:640px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
            
      <span class="window__title">
        Forensics WriteUps
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    
    <div class="window__body">
      <div class="window__side">
        
        <ul class="side__list">
          <li>
            <a onclick='forensics_pop("https://arcanesociety.github.io/WriteUps/crypto/Forensics%20CTF/"")'>Vulcon CTF</a>
            <ul>
              <li><a onclick='forensics_pop("../index.php")'>Phishy Email</a></li>
          </ul>
          </li>
          
        </ul>
      </div>
      <div class="window__main">
        <iframe class="" src="https://arcanesociety.github.io/WriteUps/" style="border:none;height:100%;width:100%;" id="forensics-iframe"></iframe>
      </div>
    </div>
    
  </div>




  <!-- ------------Pwning------------ -->
  <div class="window window--pwn" data-window="pwn" style="display:none;width:640px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
            
      <span class="window__title">
        Pwning WriteUps
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <div class="window__body">
      <div class="window__side">
        
        <ul class="side__list">
          <!-- <li>
            <a href="#">Vulcon CTF</a>
            <ul>
              <li><a href="#">Can_you_c_the_password?</a></li>
              <li><a href="#">Double</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
      <div class="window__main">
        <iframe class="" src="https://arcanesociety.github.io/WriteUps/" style="border:none;height:100%;width:100%;"></iframe>
      </div>
    </div>
    
  </div>

  <!-- ------------Osint------------ -->
  <div class="window window--osint" data-window="osint" style="display:none;width:640px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
            
      <span class="window__title">
        OSINT WriteUps
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <div class="window__body">
      <div class="window__side">
        
        <ul class="side__list">
          <li>
            <a onclick='osint_pop("https://arcanesociety.github.io/WriteUps/crypto/OSINT%20CTF/"")'>Vulcon CTF</a>
            <ul>
              <li><a onclick='osint_pop("../index.php")'>Flying Bear</a></li>
              <li><a onclick='osint_pop("../index.php")'>Find The Coin</a></li>
          </ul>
          </li>
        </ul>
      </div>
      <div class="window__main">
        <iframe class="" src="https://arcanesociety.github.io/WriteUps/" style="border:none;height:100%;width:100%;" id="osint-iframe"></iframe>
      </div>
    </div>
    
  </div>



  <!-- ------------Misc------------ -->
  <div class="window window--misc" data-window="misc" style="display:none;width:640px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
            
      <span class="window__title">
        Misc WriteUps
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <div class="window__body">
      <div class="window__side">
        
        <ul class="side__list">
          <li>
            <a onclick='misc_pop("https://arcanesociety.github.io/WriteUps/crypto/Misc%20CTF/"")'>Vulcon CTF</a>
            <ul>
              <li><a onclick='misc_pop("../index.php")'>Noob-Bot’s Welcomes You</a></li>
              <li><a onclick='misc_pop("../index.php")'>Sanity Check</a></li>
              <li><a onclick='misc_pop("../index.php")'>All I know was zip</a></li>
              <li><a onclick='misc_pop("../index.php")'>T1G3R</a></li> 
          </ul>
          </li>
        </ul>
      </div>
      <div class="window__main">
        <iframe class="" src="https://arcanesociety.github.io/WriteUps/" style="border:none;height:100%;width:100%;" id="misc-iframe"></iframe>
      </div>
    </div>
    
  </div>

    
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js'></script><script  src="./js/window.js"></script>
<script>
function cryptonb(x){
  document.getElementById('crypto-iframe').src = x;
  document.getElementById('web-iframe').src = x;
}
function web_pop(x){
  document.getElementById('web-iframe').src = x;
}
function forensics_pop(x){
  document.getElementById('forensics-iframe').src = x;
}
function osint_pop(x){
  document.getElementById('osint-iframe').src = x;
}
function misc_pop(x){
  document.getElementById('misc-iframe').src = x;
}
</script>
</body>
</html>

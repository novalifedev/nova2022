<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no maximum-scale=1.0, user-scalable=no"" />
  <meta name=" description" content="" />
  <meta name="author" content="" />
  <title>NovaLife</title>
  <link rel="shortcut icon" href="<?php echo base_url('/assets/img/coin.png'); ?>" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="<?php echo base_url('/assets/B5/css/styles.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('/assets/B5/css/nova.css'); ?>" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">
        <!-- Novalife -->
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav left">
        <li class="nav-link js-scroll-trigger"><a href="#about">
            <div class="hoverbg" id="home2" alt="" height="24px"></i><span class="material-icons" style="margin-right:4px;vertical-align: middle;">home</span>| HOME</div>
          </a></li>
        <li class="nav-link js-scroll-trigger"><a href="#nlcc">
            <div class="hoverbg" id="home3" alt="" height="24px"></i><span class="material-icons" style="margin-right:4px;vertical-align: middle;">account_balance_wallet</span>| NLCC</div>
          </a></li>
        <li class="nav-link js-scroll-trigger"><a href="#section4">
            <div class="hoverbg" id="home4" alt="" height="24px"></i><span class="material-icons" style="margin-right:4px;vertical-align: middle;">local_grocery_store</span>| MARKET</div>
          </a></li>
        <li class="nav-link js-scroll-trigger"><a href="#section5">
            <div class="hoverbg" id="home5" alt="" height="24px"></i><span class="material-icons" style="margin-right:4px;vertical-align: middle;">account_balance</span>| NC BANK</div>
          </a></li>
        <li class="nav-link js-scroll-trigger"><a href="#section6">
            <div class="hoverbg" id="home6" alt="" height="24px"><span class="material-icons" style="margin-right:4px;vertical-align: middle;">widgets</span>| NVO</div>
          </a></li>
        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li> -->
      </ul>
    </div>
  </nav>
  <!-- Page Content-->
  <nav class="navbar2 navbar-inverse">
    <div class="row d-flex flex-row">
    </div class="col-sm-1 pull-left"><img class="loggo" src="<?php echo base_url('/assets/img/logo_NovaLife_textStyle_white.png'); ?>"></div>
    <div class="neoninfo">
      <div class="menuheader"><span class="material-icons" style="color:white;">
          person
        </span>
        <div class="textmenuheader adjust">1.000.000<span class="neon">Registered</span></div>
      </div>
      <div class="headerhr"></div>
      <div class="menuheader"><span class="material-icons" style="color:white;">
          people
        </span>
        <div class="textmenuheader adjust">1.000.000<span class="neon">Online Today</span></div>
      </div>
      <div class="headerhr"></div>
      <div class="menuheader "><img class="loggo" src="<?php echo base_url('/assets/img/logo_coin_1024x1024.png'); ?>">
        <div class="textmenuheader adjustcoin">1.000.000<span class="neon">NLC-Coin</span></div>
      </div>
    </div>

    <div class=" col-sm-11 neoninfo2 pull-right">
      <div class="menuheader">
        <div id="loginbtn" onclick="showboxlogina()" style="margin-right: 20px;">ENGLISH</div>
      </div>
      <div class="menuheader">
        <div id="loginbtn" onclick="showboxlogina()">LOGIN</div>
      </div>
      <div class="menuheader">
        <div id="registerbtn" onclick="showboxregistera()">REGISTER</div>
      </div>
    </div>
  </nav>
  <div class="container-fluid p-0">
    <!-- About home-->
    <section class="resume-section fullwidth" id="about">
      <div class="imgjumbotron">
        <div class="centerhome">
          <div class="bghome0">
            <h1 class="home1">Lorem ipsum dolor sit
              Consectetur Adipisicing</h1>
            <div class="rowhome">
              <div class="homehr"></div>
              <p style="margin-left: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br />do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row row-btn align-items-md-stretch">
              <button class="button home" style="margin-right:1rem"><span style="font-size: 28px;"><i class="fab fa-windows"></span></i> <span style="vertical-align: super; margin-left:5px;">WINDOWS</span></button>
              <button class="button home"><span style="font-size: 28px;"><i class="fab fa-apple"></i></span> <span style="vertical-align: super; margin-left:5px;">APPLE</span></button>
            </div>
          </div>
          <div class="bghome">
            <span class="tooltiptext">Dec 31, 2025 00:00:00</span>
            <h2 class="home1">SALES ROUND XXxxxx</h2><br /><br />
            <div class="inputdata">
              <div class="inputbox"><input type="text" id="days">
                <p>days</p>
              </div>
            </div>
            <div class="inputdata">
              <div class="inputbox"><input type="text" id="hours">
                <p>hours</p>
              </div>
            </div>
            <div class="inputdata">
              <div class="inputbox"><input type="text" id="minutes">
                <p>minutes</p>
              </div>
            </div>
            <div class="inputdata">
              <div class="inputbox"><input type="text" id="second">
                <p>second</p>
              </div>
            </div>
            <h3 style="margin-top:-10%">Current price $XXX <br />
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div><br />
              <div class="homenote">
                <div class="minnlcc">XXX NLCC</div>
                <div class="maxnlcc">XXX NLCC</div>
              </div>
            </h3>
            <div class="buycoin text-center">BUY COIN</div>
          </div>

        </div>
      </div>

    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
      <div class="resume-section-content">
        <div class="flex-grow-1 text-center">
          <h1>Welcome to NovaLife</h1>
          <hr class="new1">
          <p style="margin-bottom:50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br />ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>

        <div class="flex-grow-1">
          <div class="container-fluid timeline ">
            <div class="outer">
              <div class="card">
                <div class="info">
                  <h3 class="title"><span style="margin-top: 100px;margin-left: 38px;position: relative;top: -60px;">Lorem Ipsum</span></h3>
                  <p class="timeline1">1</p>
                  <div class="d-flex flex-row firsttimeline" style="margin-top: -60px;margin-left: -2px;height:309px;">
                    <div class="col-sm-8 tcontent">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                    </div>
                    <div class="col-sm-8 tcontent1024">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p>
                    </div>
                    <div class="col-sm-4">
                      <div class="videoright"></div>
                      <div class="videoright1024"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="info">
                  <h3 class="title"><span style="margin-top: 100px;margin-left: 38px;position: relative;top: -60px;">Lorem Ipsum</span></h3>
                  <p class="timeline2">2</p>
                  <div class="d-flex flex-row firsttimeline" style="margin-top: -60px;margin-left: -2px;height:309px;">
                    <div class="col-sm-8 tcontent">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                    </div>
                    <div class="col-sm-8 tcontent1024">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p>
                    </div>
                    <div class="col-sm-4">
                      <div class="videoright"></div>
                      <div class="videoright1024"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="info">
                  <h3 class="title"><span style="margin-top: 100px;margin-left: 38px;position: relative;top: -60px;">Lorem Ipsum</span></h3>
                  <p class="timeline2">3</p>
                  <div class="d-flex flex-row firsttimeline" style="margin-top: -60px;margin-left: -2px;height:309px;">
                    <div class="col-sm-8 tcontent">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p><br />
                    </div>
                    <div class="col-sm-8 tcontent1024">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt</p>
                    </div>
                    <div class="col-sm-4">
                      <div class="videoright"></div>
                      <div class="videoright1024"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-grow-1 text-center">
          <h1 style="margin-top: 345px;">Our Partner</h1>
          <hr class="new2">
          <p class="ourpartner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br />
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>

        </div>
        <div class="flex-grow-1">
          <div class="row partner-row">
            <div class="partner">
              <span class="material-icons md-60" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span>
            </div>
            <div class="partner"> <span class="material-icons md-60" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span></div>
            <div class="partner"> <span class="material-icons md-60" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span></div>
          </div>
        </div>
        <div class="container text-center my-3">
          <div class="row mx-auto my-auto justify-content-center sliderwidth">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="col-md-3">
                    <div class="card partner1024">
                      <span class="material-icons md-602" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span>

                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card partner1024">
                      <span class="material-icons md-602" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span>

                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card partner1024">
                      <span class="material-icons md-602" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span>

                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card partner1024">
                      <span class="material-icons md-602" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span>

                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card partner1024">
                      <span class="material-icons md-602" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span>

                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card partner1024 img-fluid">
                      <span class="material-icons md-602" style="display: block;">account_balance</span><span class="partner-h3">XXXX</span>

                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <hr class="m-0" />
    <!-- NLCC-->
    <section class="resume-section" id="nlcc">
      <div class="resume-section-content">
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1 text-center">
            <h1>NovaLive Chain-Coin</h1>
            <hr class="new1">
            <br /><br /><br />
            <p style="margin-bottom: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br />
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <div class="chaincoin"><img src="<?php echo base_url('assets/img/core2.png'); ?>" class="img-fluid background centered" alt="Responsive image">
              <div class="topleft">
                <div class="content">
                  <h3>LOREMIPSUM</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est</p>
                </div>
              </div>
              <div class="bottomleft">
                <div class="content">
                  <h3>LOREMIPSUM</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est</p>
                </div>
              </div>
              <div class="bottomright">
                <div class="content">
                  <h3>LOREMIPSUM</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est</p>
                </div>
              </div>
              <div class="topright">
                <div class="content">
                  <h3>LOREMIPSUM</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1 text-center details">
            <h1>NLC-Coin Details</h1>
            <hr class="nlccdetails">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br />
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1 testing">
            <div class="row nlcc d-flex p-2 flex-row">
              <div class="col-md-4 nlccbox"><img src="<?php echo base_url('/assets/img/equalizer_white_48dp.svg'); ?>" style="width: 71px;
                height: 71px;
                margin-bottom: 10px;
                margin-top: 20px;">
                <div class="nlccfont">CURRENT SUPPLY</div>
                <div class="nlccfontlg">XX.XXX.XXX.XX</div>
              </div>
              <div class="col-md-4 nlccbox"><img src="<?php echo base_url('/assets/img/groups_white_48dp.svg'); ?>" style="">
                <div class="nlccfont">HOLDER</div>
                <div class="nlccfontlg">XX.XXX.XXX.XX</div>
              </div>
              <div class="col-md-4 nlccbox"><img src="<?php echo base_url('/assets/img/lock_white_48dp.svg'); ?>" style="width: 61px;
  height: 61px;
  margin-bottom: 20px;
  margin-top: 20px;">
                <div class="nlccfont">CURRENT LOCKED SUPPLY</div>
                <div class="nlccfontlg">XX.XXX.XXX.XX</div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1 text-center">
            <h1>Initial Game Offering</h1>
            <hr class="new1">
            <p style="margin-top:20px;margin-bottom: 90px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br />ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1 text-center">
            <div class="initial">
              <div class="rowbar"></div>
              <div class="roundone">
                <h3>Sales Round 1</h3>
                <p>0.20$ per NLC-Coin<br />
                  15.000.000 NLC-Coins<br />
                  3.000.000 USD</p>
              </div>
              <div class="roundthree">
                <h3>Sales Round 3</h3>
                <p>0.50$ per NLC-Coin<br />
                  74.000.000 NLC-Coins<br />
                  37.000.000 USD</p>
              </div>

              <div class="roundtwo">
                <h3>Sales Round 2</h3>
                <p>0.25$ per NLC-Coin<br />
                  40.000.000 NLC-Coins<br />
                  10.000.000 USD</p>
              </div>

              <div class="roundfour">
                <h3>Sales Round 4</h3>
                <p>0.75$ per NLC-Coin<br />
                  66.666.666 NLC-Coins<br />
                  50.000.000 USD</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1 text-center">
            <div class="row nlcc2">
              <div class="col-md-3 nlccbox2">
                <div class="nlccfont">AIRDROP & MARKETING</div>
                <div class="nlccfontlg">54.333.334</div>
              </div>
              <div class="col-md-3 nlccbox2">
                <div class="nlccfont">TOTAL SALE SUPPLY</div>
                <div class="nlccfontlg">195.666.666</div>
              </div>
              <div class="col-md-3 nlccbox2">
                <div class="nlccfont">COMPANY SUPPLY</div>
                <div class="nlccfontlg">80.000.000</div>
              </div>
              <div class="col-md-3 nlccbox2">
                <div class="nlccfont">ECO-SYSTEM SUPPLY</div>
                <div class="nlccfontlg">670.000.000</div>
              </div>

            </div>
          </div>
        </div>
        <div class="nlccsupply nlccfontbig">1.000.000.000<p class="pmaxsupply">MAXIMUM COIN SUPPLY | NLC-COINS</p>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Markets -->
    <section class="resume-section" id="skills">
      <div class="resume-section-content text-center">
        <h1>Buy or Sell NFTs & NLC-Coins</h1>
        <hr class="marketline">
        <p style="margin-top: 20px;margin-bottom: 110px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br />
          ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1 text-center">
          <div class="market">
              <h2>Buy and Sell<br /> NLC-NFT's</h2>
              <p style="margin-top: 40px;margin-bottom: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                sed do eiusmod tempor incididunt ut labore et dolore magna</p>
              <ul role="list">
                <div>
                  <li>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </li>
                  <li>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </li>
                  <li>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </li>
                </div>

              </ul>
            </div>
          </div>
          <div class="flex-grow-1 text-center">
            <h2 class="mb-5">Interests</h2>
          </div>
        </div>

      </div>

    </section>
    <hr class="m-0" />
    <!-- Interests-->
    <section class="resume-section" id="interests">
      <div class="resume-section-content">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>
    <hr class="m-0" />
    <!-- Awards-->
    <section class="resume-section" id="awards">
      <div class="resume-section-content">
        <h2 class="mb-5">Awards & Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
            Google Analytics Certified Developer
          </li>
          <li>
            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
            Mobile Web Specialist - Google Certification
          </li>
          <li>
            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
            1
            <sup>st</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2009
          </li>
          <li>
            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
            1
            <sup>st</sup>
            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
          </li>
          <li>
            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
            2
            <sup>nd</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2008
          </li>
          <li>
            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
            1
            <sup>st</sup>
            Place - James Buchanan High School - Hackathon 2006
          </li>
          <li>
            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
            3
            <sup>rd</sup>
            Place - James Buchanan High School - Hackathon 2005
          </li>
        </ul>
      </div>
    </section>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->

</body>
<script src="<?php echo base_url('assets/B5/js/scripts.js'); ?>"></script>

</html>

<script src="<?php echo base_url('/assets/nova.js'); ?>"></script>
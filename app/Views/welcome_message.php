<!DOCTYPE html>
<html lang="en">

<head>
  <title>NOVALIFE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('/assets/img/coin.png'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style.css'); ?>">
  <style>

  </style>
</head>

<body class="parallax" onload="myFunction()" style="margin:0;" data-spy="scroll" data-target=".hoverbg" data-offset="50">
  <div id="loader"></div>
  <div class="logina" id="logina">
    <div class="loginheader">
      <div class="titlelogin">LOGIN</div>
      <div class="closelogin" onclick="closboxlogina()">X</div>
    </div>
    <p>Please enter the code sent to</p><input type="text">
    <div class="rowbox">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
    </div>
    <p style="margin: 0 0 0px;">Not received the code ? Resend</p>
    <p style="margin: 0 0 0px;">Change your E-mail ? Reset</p>
    <button class="button positiona">LOGIN NOW</button>
  </div>
  <div class="loginb" id="loginb">
    <div class="loginheader">
      <div class="titlelogin">LOGIN</div>
      <div class="closelogin" id="closelogina" onclick="closboxloginb()">X</div>
    </div>
    <img src="<?php echo base_url('assets/img/pngegg.png'); ?>" alt="">
    <p>Please enter the 2FA code</p>
    <div class="rowboxb">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
    </div>
    <p style="margin: 0 0 0px;">Lost your 2FA ? Reset</p>
    <button class="button positiona">LOGIN NOW</button>
  </div>
  <div class="loginc" id="loginc">
    <div class="loginheader">
      <div class="titlelogin">LOGIN</div>
      <div class="closelogin" onclick="closboxloginc()">X</div>
    </div>
    <p>Please enter the code sent to</p><input type="text">
    <div class="rowbox">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
      <input type="text" name="" id="">
    </div>
    <p style="margin: 0 0 0px;">Not received the code ? Resend</p>
    <p style="margin: 0 0 0px;">Change your Number ? Reset</p>
    <button class="button positiona">LOGIN NOW</button>
  </div>
  <div class="parallax"></div>
  <div style="display:none;" id="myDiv" class="animate-bottom">
    <nav class="navbar navbar-inverse">
      <div class="">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li><img class="loggo" src="<?php echo base_url('/assets/img/logowhite.png'); ?>"></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">
                <div class="menuheader"><img class="loggo" src="<?php echo base_url('/assets/img/personone.png'); ?>">
                  <div class="textmenuheader">XXXXXX<span class="neon">Registered</span></div>
                </div>
              </a></li>
            <li><a href="#">
                <div class="menuheader"><img class="loggo" src="<?php echo base_url('/assets/img/people.png'); ?>">
                  <div class="textmenuheader">XXXXXX<span class="neon">Online Today</span></div>
                </div>
              </a></li>
            <li><a href="#">
                <div class="menuheader"><img class="loggo" src="<?php echo base_url('/assets/img/coin.png'); ?>">
                  <div class="textmenuheader">XXXXXX<span class="neon">NLC-Coin</span></div>
                </div>
              </a></li>

            <li><a href="#">
                <div id="translate">ENGLISH</div>
              </a></li>
            <li><a href="#">
                <div id="loginbtn" onclick="showboxlogina()">LOGIN</div>
              </a></li>
            <li><a href="#">
                <div id="registerbtn">REGISTER</div>
              </a></li>

          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="col-sm-2">
        <div class="menuleft">
          <div class="hoverbg" onmouseout="homeout(this);" onmouseover="homein(this);" id="home2"><img id="homeicon" src="<?php echo base_url('/assets/img/home2.png'); ?>" alt="" height="24px" style="margin-right:10px"><a href="#section2">| HOME</a></div>
          <div class="hoverbg" onmouseout="nlccout(this);" onmouseover="nlccin(this);" id="home3"><img id="nlcc" src="<?php echo base_url('/assets/img/account_balance_wallet.png'); ?>" alt="" height="24px" style="margin-right:10px"><a href="#section3">| NLCC</a></div>
          <div class="hoverbg" onmouseout="marketout(this);" onmouseover="marketin(this);" id="home4"><img id="market" src="<?php echo base_url('/assets/img/local_grocery_store.png'); ?>" alt="" height="24px" style="margin-right:10px"><a href="#section4">| MARKET</a></div>
          <div class="hoverbg" onmouseout="ncout(this);" onmouseover="ncin(this);" id="home5"><img id="ncbank" src="<?php echo base_url('/assets/img/account_balance2.png'); ?>" alt="" height="24px" style="margin-right:10px"><a href="#section5">| NC BANK</a></div>
          <div class="hoverbg" onmouseout="backed(this);" onmouseover="changeicon(this);" id="home6"><img id="myImg" src="<?php echo base_url('/assets/img/widgets.png'); ?>" alt="" height="24px" style="margin-right:10px"><a href="#section5">| NVO</a></div>
        </div>
      </div>
      <div class="contenthome">
        <div class="col-lg-5 text-left" style="height: 400px;padding-top:5%;">
          <h1 class="home1">Lorem ipsum dolor sit amet, consectetur adipiscing elitass</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          <div class="row">
            <div class="col-lg-4"><img src="<?php echo base_url('assets/img/windows.png'); ?>"></div>
            <div class="col-lg-4"><img src="<?php echo base_url('assets/img/mac.png'); ?>"></div>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="bghome">
            <span class="tooltiptext">Dec 31, 2025 00:00:00</span>
            <h2 class="home1">SALES ROUND XX</h2><br /><br />
            <i class="fas fa-home"></i>
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
      <!-- end of div row partner -->
      <div class="main" id="section1">
        <br />
      </div>

      <div id="section2">
        <div class="row content">
          <div class="col-sm-9 text-center">
            <h1>Welcome to Novalife</h1>
            <i class="fas fa-home"></i>
            <hr class="new1">
            <p style="margin-bottom:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <nav class="circular-menu" style="margin-top:50px">
              <div class="circle open">
                <a href="" class="searchEngineLink">
                  <div class="textposition" onmouseout="showfinance(this);" onmouseover="hidefinance(this);">
                    <h3 id="finance">FINANCE</h3><img src="<?php echo base_url('/assets/img/finance.png'); ?>" height="40">
                  </div>
                  <div class="popupfinance" id="popupfinance">
                    <h2>FINANCE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="vl"></div>
                </a>
                <a href="" class="searchEngineLink">
                  <div class="textposition2" onmouseout="showfriends(this);" onmouseover="hidefriends(this);">
                    <h3 id="friends">FRIENDS</h3><img src="<?php echo base_url('/assets/img/friend.png'); ?>" height="40">
                  </div>
                  <div class="popupfriends" id="popupfriends">
                    <h2>FRIENDS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </a>
                <a href="" class="searchEngineLink">
                  <div class="textposition3" onmouseout="showcareer(this);" onmouseover="hidecareer(this);">
                    <h3 id="career">CAREER</h3><img src="<?php echo base_url('/assets/img/career.png'); ?>" height="40">
                  </div>
                  <div class="popupcareer" id="popupcareer">
                    <h2>CAREER</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </a>
                <a href="" class="searchEngineLink">
                  <div class="textposition4" onmouseout="showchat(this);" onmouseover="hidechat(this);">
                    <h3 id="chat">CHAT</h3><img src="<?php echo base_url('/assets/img/chat.png'); ?>" height="40">
                  </div>
                  <div class="v4"></div>
                  <div class="popupchat" id="popupchat">
                    <h2>CHAT</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </a>
                <a href="" class="searchEngineLink">
                  <div class="textposition5" onmouseout="showinvest(this);" onmouseover="hideinvest(this);">
                    <h3 id="invest">INVESTMENT</h3><img src="<?php echo base_url('/assets/img/invest.png'); ?>" height="40">
                  </div>
                  <div class="popupinvest" id="popupinvest">
                    <h2>INVESTMENT</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </a>
                <a href="" class="searchEngineLink">
                  <div class="textposition6" onmouseout="showwww(this);" onmouseover="hidewww(this);">
                    <h3 id="www">WORLD WIDE</h3><img src="<?php echo base_url('/assets/img/www.png'); ?>" height="40">
                  </div>
                  <div class="v3"></div>
                  <div class="popupwww" id="popupwww">
                    <h2>WORLD WIDE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </a>
                <a href="" class="searchEngineLink">
                  <div class="textposition7" onmouseout="showsecure(this);" onmouseover="hideshowsecure(this);">
                    <h3 id="secure">SECURE</h3><img src="<?php echo base_url('/assets/img/secure.png'); ?>" height="40">
                  </div>
                  <div class="v2"></div>
                  <div class="popupsecure" id="popupsecure">
                    <h2>SECURE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </a>
                <a href="" class="searchEngineLink">
                  <div class="textposition8" onmouseout="shownft(this);" onmouseover="hidenft(this);">
                    <h3 id="nft">NFT</h3><img src="<?php echo base_url('/assets/img/nft.png'); ?>" height="40">
                  </div>
                  <div class="popupnft" id="popupnft">
                    <h2>NFT</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </a>
              </div>
              <a href="" class="menu-button"><img src="<?php echo base_url('/assets/img/person.png'); ?>" height="60"></a>
            </nav>

            <h1 style="margin-top:250px;">How to Play Novalife</h1>
            <hr class="new1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


            <div class="timeline ">
              <div class="outer">
                <div class="card">
                  <div class="info">
                    <h3 class="title">Lorem Ipsum</h3>
                    <div class="row">
                      <div class="col-sm-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                      <div class="col-sm-4"><iframe width="250px" height="100%" src="https://www.youtube.com/embed/CNbmVEEW-mA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="info">
                    <h3 class="title">Lorem Ipsum</h3>
                    <div class="row">
                      <div class="col-sm-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                      <div class="col-sm-4"><iframe width="250px" height="100%" src="https://www.youtube.com/embed/CNbmVEEW-mA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="info">
                    <h3 class="title">Lorem Ipsum</h3>
                    <div class="row">
                      <div class="col-sm-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                      <div class="col-sm-4"><iframe width="250px" height="100%" src="https://www.youtube.com/embed/CNbmVEEW-mA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="info">
                    <h3 class="title">Lorem Ipsum</h3>
                    <div class="row">
                      <div class="col-sm-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                      <div class="col-sm-4"><iframe width="250px" height="100%" src="https://www.youtube.com/embed/CNbmVEEW-mA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="info">
                    <h3 class="title">Lorem Ipsum</h3>
                    <div class="row">
                      <div class="col-sm-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                      <div class="col-sm-4"><iframe width="250px" height="100%" src="https://www.youtube.com/embed/CNbmVEEW-mA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <h1>Our Partner</h1>
            <hr class="new1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div class="row">
              <div class="col-xs-4" style="display:flex;justify-content:center">
                <div class="partner"></div>
              </div>
              <div class="col-xs-4" style="display:flex;justify-content:center">
                <div class="partner"></div>
              </div>
              <div class="col-xs-4" style="display:flex;justify-content:center">
                <div class="partner"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="section3">
        <div class="row content">
          <div class="col-sm-9 text-center" style="margin-top:80px">
            <h1>NovaLive Chain-Coin</h1>
            <hr class="new1">
            <br /><br /><br />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <img src="<?php echo base_url('assets/img/core.png'); ?>" class="img-fluid" alt="Responsive image" style="height:25em;margin-top:40px;margin-bottom:100px">
            <h1>NLC-Coin Details</h1>
            <hr class="new1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="row nlcc">
              <div class="col-md-4 nlccbox"><img src="<?php echo base_url('/assets/img/equalizer.png'); ?>">
                <div class="nlccfont">CURRENT SUPPLY</div>
                <div class="nlccfontlg">XX.XXX.XXX.XX</div>
              </div>
              <div class="col-md-4 nlccbox"><img src="<?php echo base_url('/assets/img/Vector.png'); ?>" style="width:83px;height:75px;margin-bottom:14px;margin-top:8px">
                <div class="nlccfont">HOLDER</div>
                <div class="nlccfontlg">XX.XXX.XXX.XX</div>
              </div>
              <div class="col-md-4 nlccbox"><img src="<?php echo base_url('/assets/img/https.png'); ?>">
                <div class="nlccfont">CURRENT LOCKED SUPPLY</div>
                <div class="nlccfontlg">XX.XXX.XXX.XX</div>
              </div>
            </div>
            <h1>Initial Game Offering</h1>
            <hr class="new1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <img class="img-fluid" src="<?php echo base_url('/assets/img/nlccstat.png'); ?>" height="150px" width="800px" style="margin-top:80px">
            <br /> <br />
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
            <div class="nlccsupply nlccfontbig">1.000.000.000<p>MAXIMUM COIN SUPPLY | NLC-COINS</p>
            </div>
          </div>
        </div>

      </div>
      <div id="section4">
        <div class="row content">
          <div class="col-sm-9 text-center">
            <h1>Buy or Sell NFTs & NLC-Coins</h1>
            <hr class="new1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div class="market">
              <div class="row">
                <div class="col-sm-6 marketa">
                  <div class="">
                    <h2>Buy and Sell<br /> NLC-NFT's</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <ul role="list">
                      <div style="margin-left:130px;">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                      </div>

                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 marketb">
                  <img src="<?php echo base_url('/assets/img/blank.jpg'); ?>" alt="">
                </div>
              </div>
            </div>

            <div class="markets">
              <div class="row">
                <div class="col-sm-6 marketa">
                  <img src="<?php echo base_url('/assets/img/blank.jpg'); ?>" alt="">
                </div>
                <div class="col-sm-6 marketc">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="far fa-puzzle-piece"></i>&nbsp;Plots</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><i class="fal fa-home-alt"></i>&nbsp;Flat & Houses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#references" role="tab" data-toggle="tab"><i class="fas fa-car"></i>&nbsp;Cars</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="profile">
                      <h1 style="text-align: left;">sit amet consectetur
                        adipiscing elit</h1>
                      <p style="text-align: left;" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                      <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="buzz">
                      <h1 style="text-align: left;">sit amet consectetur
                        adipiscing elit</h1>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="references">
                      <h1 style="text-align: left;">sit amet consectetur
                        adipiscing elit</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end of markets content c -->
            <div class="marketpresale">
              <div class="row">
                <h1>NFT & Market Launch</h1>
                <hr class="new1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                <img src="<?php echo base_url('/assets/img/presale.png'); ?>" alt="">
              </div>
            </div>

            <div class="marketpresale">
              <div class="row boxm">
                <div class="boxmarket"><img src="<?php echo base_url('assets/img/homey.png'); ?>">
                  <h3>Presale Plots & Flats/Houses</h3>
                  <p style="margin-left:10px;margin-right:10px">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elitsed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua
                    Ut enim ad minim veniam, quis nostrud
                    exercitation</p>
                </div>
                <div class="boxmarket"><img src="<?php echo base_url('assets/img/store.png'); ?>">
                  <h3>Presale Plots & Flats/Houses</h3>
                  <p style="margin-left:10px;margin-right:10px">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elitsed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua
                    Ut enim ad minim veniam, quis nostrud
                    exercitation</p>
                </div>
                <div class="boxmarket"><img src="<?php echo base_url('assets/img/queue.png'); ?>">
                  <h3>Presale Plots & Flats/Houses</h3>
                  <p style="margin-left:10px;margin-right:10px">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elitsed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua
                    Ut enim ad minim veniam, quis nostrud
                    exercitation</p>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>

      <div id="section5">
        <div class="row content">
          <div class="col-sm-9 text-center">
            <h1>NovaCircle - Bank</h1>
            <hr class="new1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>

            <div class="novacircle">
              <div class="row">
                <div class="col-sm-12">
                  <div class="">
                    <img src="<?php echo base_url('/assets/img/blank.jpg'); ?>" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="novacircle" style="display:inline-flex">
              <div class="row boxm">
                <div class="boxcircle"><img src="<?php echo base_url('assets/img/homey.png'); ?>">
                  <h3>Receive</h3>
                  <p>Lorem ipsum dolor sit amet
                    consectetur adipiscing elit</p>
                </div>
                <div class="boxcircle"><img src="<?php echo base_url('assets/img/store.png'); ?>">
                  <h3>Send</h3>
                  <p>Lorem ipsum dolor sit amet
                    consectetur adipiscing elit</p>
                </div>
                <div class="boxcircle"><img src="<?php echo base_url('assets/img/queue.png'); ?>">
                  <h3>Exchange</h3>
                  <p>Lorem ipsum dolor sit amet
                    consectetur adipiscing elit</p>
                </div>
                <div class="boxcircle"><img src="<?php echo base_url('assets/img/queue.png'); ?>">
                  <h3>Spend</h3>
                  <p>Lorem ipsum dolor sit amet
                    consectetur adipiscing elit</p>
                </div>
              </div>
            </div>
            <div class="market">
              <div class="row">
                <div class="col-sm-6 marketa">
                  <div class="">
                    <h2>Store your Crypto and <br />
                      Fiat in one place</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <ul role="list">
                      <div style="height:100px;width: 400px;margin-left: 135px;">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                      </div>

                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 marketb">
                  <img src="<?php echo base_url('assets/img/blank.jpg'); ?>" alt="">
                </div>
              </div>
            </div>
            <div class="market">
              <div class="row" style="margin-top: -40px;">
                <div class="col-sm-6 marketa">
                  <img src="<?php echo base_url('assets/img/blank.jpg'); ?>" alt="">
                </div>
                <div class="col-sm-6 marketb">
                  <div class="">
                    <h2 style="text-align:left">Exchange your assets <br />
                      at anytime</h2>
                    <p style="text-align:left">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <ul role="list">
                      <div style="height:100px;width: 400px;margin-left: -5px;">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="market">
              <div class="row" style="margin-top: -40px;">
                <div class="col-sm-6 marketa">
                  <div class="">
                    <h2>Get returns on your <br />
                      NLC-Coins</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <ul role="list">
                      <div style="height:100px;width: 400px;margin-left: 135px;">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                      </div>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 marketb">
                  <img src="<?php echo base_url('assets/img/blank.jpg'); ?>" alt="">
                </div>
              </div>
            </div>
            <div class="market">
              <div class="row">
                <div class="col-sm-6 marketa">
                  <img src="<?php echo base_url('assets/img/blank.jpg'); ?>" alt="">
                </div>
                <div class="col-sm-6 marketb">

                  <div class="">
                    <h2 style="text-align:left">Manage and keep <br />
                      your NLC-NFT’s</h2>
                    <p style="text-align:left">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <ul role="list">
                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                      <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      </li>
                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <footer class="footer">
      <div class="box">Legal<br /><a href="http://localhost:8080/home/imprint">Imprint</a><a href="http://localhost:8080/home/toc">Terms & Conditions</a><a href="http://localhost:8080/home/privacy">Privacy policy</a><a href="#">AML/Exchange Policy</a><a href="#">AML/Wallet Policy</a></div>
      <div class="footerhrv"></div>
      <div class="box">About<br /><a href="#">Imprint</a><a href="#">Terms & Conditions</a><a href="#">Privacy policy</a><a href="#">AML/Exchange Policy</a><a href="#">AML/Wallet Policy</a></div>
      <div class="footerhrv"></div>
      <div class="box">Products <br /><a href="#">Exchange</a><a href="#">Wallet</a><a href="#">App</a><a href="#">Card</a><a href="#">Payments</a></div>
      <div class="footerhrv"></div>
      <div class="box">Features <br /><a href="#">Pricing</a><a href="#">Personal</a><a href="#">Business</a><a href="#">AdCash</a><a href="#">Blog</a></div>
      <div class="footerhrv"></div>
      <div class="box">Social Media <br /><a href="#">Instagram</a><a href="#">Facebook</a><a href="#">Youtube</a><a href="#">Medium</a><a href="#">Linkedln</a></div>
    </footer>
</body>

</html>
<script src="<?php echo base_url('/assets/novascript.js'); ?>"></script>
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/style.css'); ?>">
    <style>

    </style>
</head>

<body class="parallax" onload="myFunction()" style="margin:0;background: rgba(44, 54, 126, 0.85);">
    <div id="loader"></div>
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
                        <li><img class="loggo" src="<?php echo base_url('/assets/img/coin.png'); ?>"></li>
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
                                <div id="loginbtn">LOGIN</div>
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
                    <div class="hoverbg" id="home"><i class="fas fa-home"></i><a href="#section2">| HOME</a></div>
                    <div class="hoverbg" id="home"><i class="fas fa-wallet"></i><a href="#section3">| NLCC</a></div>
                    <div class="hoverbg"><i class="fas fa-wallet"></i>| MARKET</div>
                    <div class="hoverbg"><i class="fas fa-university"></i>| NC BANK</div>
                    <div class="hoverbg"><i class="fas fa-university"></i>| NVO</div>
                </div>
            </div>
        </div>
        
        <div class="row" style="margin-top: 100px;">
          <div class="col-sm-12 text-center">
            <h1>Imprint</h1>
            <hr class="new1">
            <div class="row imprint">
              <div class="col-md-6">
                <h2>Company</h2>
                <h3>NovaLife <br />
                  Registered Number: xxxxxxxxx <br />
                  23 Park Mall, Gowork, 3rd floor <br />
                  Kuta, Bali, Indonesia</h3>
              </div>
              <div class="col-md-6">
                <h2>Contact</h2>
                <h3>support@mail.com <br />
                  www.novalife.io <br />
                  Monday - Friday: 8am - 6pm <br /><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-facebook-f"></i></i></a><a href="#"><i class="fab fa-youtube"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a></h3> <br />

              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
            <div class="box">Legal<br /><a href="#">Imprint</a><a href="#">Terms & Conditions</a><a href="#">Privacy policy</a><a href="#">AML/Exchange Policy</a><a href="#">AML/Wallet Policy</a></div>
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
<script>
    function chbg(color) {
        document.getElementById('b').style.backgroundColor = color;
    }
</script>
<script>
    // Demo by http://creative-punch.net

    var items = document.querySelectorAll('.circle a');

    for (var i = 0, l = items.length; i < l; i++) {
        items[i].style.left = (50 - 35 * Math.cos(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";

        items[i].style.top = (50 + 35 * Math.sin(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";
    }

    document.querySelector('.menu-button').onclick = function(e) {
        e.preventDefault();
        document.querySelector('.circle').classList.toggle('open');
    }
</script>
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>
<script>
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 0) {
            $(".navbar").addClass("active");
            $(".parallax").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".navbar").removeClass("active");
            $(".parallax").removeClass("active");
        }
    });

    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 0) {
            $(".parallax").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".parallax").removeClass("active");
        }
    });
</script>

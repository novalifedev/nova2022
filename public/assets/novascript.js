  function closboxlogina() {
      var x = document.getElementById("logina");
      x.style.display = "none";
  }

  function showboxlogina() {
      var x = document.getElementById("logina");
      x.style.visibility = "visible";
      x.style.display = "block";

      var y = document.getElementById("loginb");
      y.style.visibility = "visible";
      y.style.display = "block";

      var z = document.getElementById("loginc");
      z.style.visibility = "visible";
      z.style.display = "block";

  }

  function closboxloginb() {
      var x = document.getElementById("loginb");
      x.style.display = "none";
  }

  function showboxloginb() {
      var x = document.getElementById("loginb");
      x.style.display = "block";
  }

  function closboxloginc() {
      var x = document.getElementById("loginc");
      x.style.display = "none";
  }

  function showboxloginc() {
      var x = document.getElementById("loginc");
      x.style.display = "block";
  }


  function chbg(color) {
      document.getElementById('b').style.backgroundColor = color;
  }


  var items = document.querySelectorAll('.circle a');

  for (var i = 0, l = items.length; i < l; i++) {
      items[i].style.left = (50 - 35 * Math.cos(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";

      items[i].style.top = (50 + 35 * Math.sin(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";
  }

  document.querySelector('.menu-button').onclick = function(e) {
      e.preventDefault();
      document.querySelector('.circle').classList.toggle('open');
  }


  var myVar;

  function myFunction() {
      myVar = setTimeout(showPage, 1200);
  }

  function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
  }


  $(window).on("scroll", function() {
      if ($(window).scrollTop() > 50) {
          $(".navbar").addClass("active");
          $(".parallax").addClass("active");
      } else {
          //remove the background property so it comes transparent again (defined in your css)
          $(".navbar").removeClass("active");
          $(".parallax").removeClass("active");
      }
  });

  $(window).on("scroll", function() {
      if ($(window).scrollTop() > 1000) {
          $(".parallax").addClass("active");
      } else {
          //remove the background property so it comes transparent again (defined in your css)
          $(".parallax").removeClass("active");
      }
  });



  $(document).ready(function() {
      document.getElementById("homeicon").src = "/assets/img/home.png";
      document.getElementById("home2").classList.add("active");
  });
  $(window).on("scroll", function() {
      if ($(window).scrollTop() > 0 && $(window).scrollTop() < 3200) {
          document.getElementById("market").src = "/assets/img/local_grocery_store.png";
          document.getElementById("homeicon").src = "/assets/img/home.png";
          document.getElementById("nlcc").src = "/assets/img/account_balance_wallet.png";
          document.getElementById("ncbank").src = "/assets/img/account_balance2.png";
          document.getElementById("home2").classList.add("active");
          document.getElementById("home3").classList.remove("active");
          document.getElementById("home4").classList.remove("active");
          document.getElementById("home5").classList.remove("active");
          //$(".hoverbg").addClass("active");
      } else if ($(window).scrollTop() > 3200 && $(window).scrollTop() < 3800) {
          //remove the background property so it comes transparent again (defined in your css)
          //$(".hoverbg").removeClass("active");
          document.getElementById("homeicon").src = "/assets/img/home2.png";
          document.getElementById("nlcc").src = "/assets/img/account_balance_wallet2.png";
          document.getElementById("market").src = "/assets/img/local_grocery_store.png";
          document.getElementById("ncbank").src = "/assets/img/account_balance2.png";
          document.getElementById("home2").classList.remove("active");
          document.getElementById("home3").classList.add("active");
          document.getElementById("home4").classList.remove("active");
          document.getElementById("home5").classList.remove("active");
      } else if ($(window).scrollTop() > 4500 && $(window).scrollTop() < 6800) {
          //remove the background property so it comes transparent again (defined in your css)
          //$(".hoverbg").removeClass("active");
          document.getElementById("market").src = "/assets/img/local_grocery_store2.png";
          document.getElementById("homeicon").src = "/assets/img/home2.png";
          document.getElementById("nlcc").src = "/assets/img/account_balance_wallet.png";
          document.getElementById("ncbank").src = "/assets/img/account_balance2.png";
          document.getElementById("home2").classList.remove("active");
          document.getElementById("home3").classList.remove("active");
          document.getElementById("home4").classList.add("active");
          document.getElementById("home5").classList.remove("active");
      } else if ($(window).scrollTop() > 6800 && $(window).scrollTop() < 7800) {
          //remove the background property so it comes transparent again (defined in your css)
          //$(".hoverbg").removeClass("active");
          document.getElementById("market").src = "/assets/img/local_grocery_store.png";
          document.getElementById("homeicon").src = "/assets/img/home2.png";
          document.getElementById("nlcc").src = "/assets/img/account_balance_wallet.png";
          document.getElementById("ncbank").src = "/assets/img/account_balance.png";
          document.getElementById("home2").classList.remove("active");
          document.getElementById("home3").classList.remove("active");
          document.getElementById("home4").classList.remove("active");
          document.getElementById("home5").classList.add("active");
      }
  });



  // Set the date we're counting down to
  var countDownDate = new Date("Dec 31, 2025 00:00:00").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("days").value = days;
      document.getElementById("hours").value = hours;
      document.getElementById("minutes").value = minutes;
      document.getElementById("second").value = seconds;

      // If the count down is over, write some text 
      if (distance < 0) {
          clearInterval(x);
          document.getElementById("days").value = "EXPIRED";
      }
  }, 1000);



  function onmouseover(x) {
      document.getElementById("home2").classList.add("active");
      document.getElementById("home3").classList.remove("active");
      document.getElementById("home4").classList.remove("active");
  }

  function onmouseoverout(x) {
      document.getElementById("home2").classList.remove("active");
      document.getElementById("home3").classList.remove("active");
      document.getElementById("home4").classList.remove("active");
  }


  function changeicon(x) {
      document.getElementById("myImg").src = "/assets/img/widgets2.png";

  }

  function backed(x) {
      document.getElementById("myImg").src = "/assets/img/widgets.png";
  }

  function ncin(x) {
      document.getElementById("ncbank").src = "/assets/img/account_balance.png";
      document.getElementById("home5").classList.add("active");
  }

  function ncout(x) {
      document.getElementById("ncbank").src = "/assets/img/account_balance2.png";
      document.getElementById("home5").classList.remove("active");
  }

  function marketin(x) {
      document.getElementById("market").src = "/assets/img/local_grocery_store2.png";
      document.getElementById("home4").classList.add("active");
  }

  function marketout(x) {
      document.getElementById("market").src = "/assets/img/local_grocery_store.png";
      document.getElementById("home4").classList.remove("active");
  }

  function nlccin(x) {
      document.getElementById("nlcc").src = "/assets/img/account_balance_wallet2.png";
      document.getElementById("home3").classList.add("active");
      console.log('nlccin');
  }

  function nlccout(x) {
      document.getElementById("nlcc").src = "/assets/img/account_balance_wallet.png";
      document.getElementById("home3").classList.remove("active");
      console.log('nlccout');
  }

  function homein(x) {
      document.getElementById("homeicon").src = "/assets/img/home.png";
      document.getElementById("home2").classList.add("active");
      console.log('homein');
  }

  function homeout(x) {
      document.getElementById("homeicon").src = "/assets/img/home2.png";
      document.getElementById("home2").classList.remove("active");
      console.log('homeout');
  }

  function showsecure() {
      var x = document.getElementById("secure");
      var y = document.getElementById("popupsecure");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hideshowsecure() {
      var x = document.getElementById("secure");
      var y = document.getElementById("popupsecure");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }

  function shownft() {
      var x = document.getElementById("nft");
      var y = document.getElementById("popupnft");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hidenft() {
      var x = document.getElementById("nft");
      var y = document.getElementById("popupnft");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }

  function showfinance() {
      var x = document.getElementById("finance");
      var y = document.getElementById("popupfinance");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hidefinance() {
      var x = document.getElementById("finance");
      var y = document.getElementById("popupfinance");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }

  function showfriends() {
      var x = document.getElementById("friends");
      var y = document.getElementById("popupfriends");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hidefriends() {
      var x = document.getElementById("friends");
      var y = document.getElementById("popupfriends");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }

  function showcareer() {
      var x = document.getElementById("career");
      var y = document.getElementById("popupcareer");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hidecareer() {
      var x = document.getElementById("career");
      var y = document.getElementById("popupcareer");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }

  function showchat() {
      var x = document.getElementById("chat");
      var y = document.getElementById("popupchat");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hidechat() {
      var x = document.getElementById("chat");
      var y = document.getElementById("popupchat");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }

  function showinvest() {
      var x = document.getElementById("invest");
      var y = document.getElementById("popupinvest");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hideinvest() {
      var x = document.getElementById("invest");
      var y = document.getElementById("popupinvest");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }

  function showwww() {
      var x = document.getElementById("www");
      var y = document.getElementById("popupwww");
      x.style.display = "block";
      y.style.display = "none";
  }

  function hidewww() {
      var x = document.getElementById("www");
      var y = document.getElementById("popupwww");
      y.style.visibility = "visible";
      x.style.display = "none";
      y.style.display = "block";
  }
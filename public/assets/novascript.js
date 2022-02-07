var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);


function closboxlogina() {
    var x = document.getElementById("logina");
    x.style.display = "none";
}

function closboxregistera() {
    var x = document.getElementById("registera");
    x.style.display = "none";
}

function closboxregisterb() {
    var x = document.getElementById("registerb");
    x.style.display = "none";
}

function showboxregistera() {
    var x = document.getElementById("registera");
    $("#registera").fadeIn("slow");
    x.style.visibility = "visible";
    x.style.display = "block";

    var y = document.getElementById("registerb");
    $("#registerb").fadeIn("slow");
    y.style.visibility = "visible";
    y.style.display = "block";

}

function showboxlogina() {
    var x = document.getElementById("logina");
    $("#logina").fadeIn("slow");
    x.style.visibility = "visible";
    x.style.display = "block";

    var y = document.getElementById("loginb");
    $("#loginb").fadeIn("slow");
    y.style.visibility = "visible";
    y.style.display = "block";

    var z = document.getElementById("loginc");
    $("#loginc").fadeIn("slow");
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
    myVar = setTimeout(showPage, 10);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
}


$(window).on("scroll", function() {
    if ($(window).scrollTop() > 50) {
        $(".navbar").addClass("active");
        //$(".parallax").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".navbar").removeClass("active");
        //$(".parallax").removeClass("active");
    }
});


$(document).ready(function() {
    document.getElementById("home2").classList.add("active");
});
$(window).on("scroll", function() {
    if ($(window).scrollTop() > 0 && $(window).scrollTop() < 3200) {
        document.getElementById("home2").classList.add("active");
        document.getElementById("home3").classList.remove("active");
        document.getElementById("home4").classList.remove("active");
        document.getElementById("home5").classList.remove("active");
        document.getElementById("home6").classList.remove("active");
        console.log("Halaman 2");
        //$(".hoverbg").addClass("active");
    } else if ($(window).scrollTop() > 3200 && $(window).scrollTop() < 6000) {
        //remove the background property so it comes transparent again (defined in your css)
        //$(".hoverbg").removeClass("active");
        document.getElementById("home2").classList.remove("active");
        document.getElementById("home3").classList.add("active");
        document.getElementById("home4").classList.remove("active");
        document.getElementById("home5").classList.remove("active");
        document.getElementById("home6").classList.remove("active");
        console.log("Halaman 3");
    } else if ($(window).scrollTop() > 6000 && $(window).scrollTop() < 8000) {
        //remove the background property so it comes transparent again (defined in your css)
        //$(".hoverbg").removeClass("active");
        document.getElementById("home2").classList.remove("active");
        document.getElementById("home3").classList.remove("active");
        document.getElementById("home4").classList.add("active");
        document.getElementById("home5").classList.remove("active");
        document.getElementById("home6").classList.remove("active");
        console.log("Halaman 4");
    } else if ($(window).scrollTop() > 8000 && $(window).scrollTop() < 10000) {
        //remove the background property so it comes transparent again (defined in your css)
        //$(".hoverbg").removeClass("active");
        document.getElementById("home2").classList.remove("active");
        document.getElementById("home3").classList.remove("active");
        document.getElementById("home4").classList.remove("active");
        document.getElementById("home5").classList.add("active");
        document.getElementById("home6").classList.remove("active");
        console.log("Halaman 5");
    } else if ($(window).scrollTop() > 10000 && $(window).scrollTop() < 15000) {
        //remove the background property so it comes transparent again (defined in your css)
        //$(".hoverbg").removeClass("active");
        document.getElementById("home2").classList.remove("active");
        document.getElementById("home3").classList.remove("active");
        document.getElementById("home4").classList.remove("active");
        document.getElementById("home5").classList.remove("active");
        document.getElementById("home6").classList.add("active");
        console.log("Halaman 6");
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
    document.getElementById("home5").classList.add("active");
}

function ncout(x) {
    document.getElementById("home5").classList.remove("active");
}

function marketin(x) {
    document.getElementById("home4").classList.add("active");
}

function marketout(x) {
    document.getElementById("home4").classList.remove("active");
}

function nlccin(x) {
    document.getElementById("home3").classList.add("active");
    console.log('nlccin');
}

function nlccout(x) {
    document.getElementById("home3").classList.remove("active");
    console.log('nlccout');
}

function homein(x) {
    document.getElementById("home2").classList.add("active");
    console.log('homein');
}

function homeout(x) {
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

// Add active class to the current button (highlight it)
var header = document.getElementById("rowverify");
var btns = header.getElementsByClassName("boxemail");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

function changetype() {
    document.getElementById("verifytype").innerHTML = "Wrong number ?";
    document.getElementById("boxnumber").style.borderColor = "white";
    document.getElementById("boxemail").style.borderColor = "rgba(41, 49, 113, 0.6)";
    document.getElementById("boxnumber").style.color = "white";
    document.getElementById("boxemail").style.color = "rgba(41, 49, 113, 0.6)";
    console.log("changetype");

}

function changetoemail() {
    document.getElementById("verifytype").innerHTML = "Wrong Email ?";
    document.getElementById("boxemail").style.borderColor = "white";
    document.getElementById("boxemail").style.color = "white";
    document.getElementById("boxnumber").style.borderColor = "rgba(41, 49, 113, 0.6)";
    document.getElementById("boxnumber").style.color = "rgba(41, 49, 113, 0.6)";
    console.log("changetypetoemail");
}
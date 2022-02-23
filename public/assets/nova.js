$(window).on("scroll", function() {
    if ($(window).scrollTop() > 50) {
        $(".navbar2").addClass("active");
        //$(".parallax").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".navbar2").removeClass("active");
        //$(".parallax").removeClass("active");
    }
});
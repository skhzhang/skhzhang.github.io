/*
// check if jQuery is loaded
window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
*/

// Execute when web page is fully loaded.
$(document).ready(function() { 

    // Show / hide the navbar if the navicon is clicked.
    $(".navicon").click(function() {

        if ($("#navbar").css("display") == "block") {
            showNavbar(false);
        }
        else if ($('#navbar').css("display") == "none") {
            showNavbar(true);
        }
    });

    // Show / hide the navbar if the overlay is clicked.
    $(".overlay").click(function(){
        $(".navicon").click();
    });

    behaviourBasedOnTopbarNav();

    setCurtainHeight();
});

// Execute whenever the web page window is resized.
$(window).resize(function() {

    behaviourBasedOnTopbarNav();

    setCurtainHeight();

});

// Execute whenever the user scrolls.
$(window).scroll(function() {

    // Make the topbar transparent when it is near the top of the page.
    if ($(window).scrollTop() < 25) {
        $("#topbar.chameleon").css("background-color", "transparent");
    }
    else if ($(window).scrollTop() >= 25) {
        $("#topbar.chameleon").css("background-color", "rgb(68, 109, 122)");
    }

});

// Show the navicon if the topbar navigation menu is not shown.
// Display if the topbar navigation menu indicates a larger screen 
// (and vice versa if it is not displayed).
function behaviourBasedOnTopbarNav() {

    if ($(".topbar-nav").css("display") === "none") {
        document.getElementsByClassName("navicon")[0].style.display = "block";

        if ($("#navbar").css("display") === "block") { 

            // Show the overlay if the navbar is shown.
            $(".overlay").show(0);
        }

        // Topbar should always be the same colour.
        $("#topbar.chameleon").css("background-color", "rgb(68, 109, 122)");
        $(".navbar-top.chameleon").css("background-color", "rgb(68, 109, 122)");
    }
    else if ($(".topbar-nav").css("display") === "block") {
        document.getElementsByClassName("navicon")[0].style.display = "none";

        if ($("#navbar").css("display") == "block") { 

            // Hide the navbar and overlay if topbar navigation menu is shown.
            // This executes additional functions in addition to hiding the navbar.
            showNavbar(false, false);
        }
    }
}

// Calculate and set the height of curtain depending on position and height of curtain-end class.
function setCurtainHeight() {

    // If there is an element with curtain-end.
    if ($(".curtain-end").length) {

        var offset = parseInt($(".curtain-end").offset().top); // offset to position of element border
        offset += parseInt($(".curtain-end").outerHeight(false)) / 2; // half of height excluding margins

        $(".curtain").css("height", offset);
    }
}

// Show and hide the navbar.
function showNavbar(show, animation = true){

    // Show navbar.
    if (show) {

        if (!animation)
            $("#navbar").show();

        // Slide in from the top.
        $("#navbar").show("slide", {direction: "up"}, 200);
        $(".iconMenuGray").hide(0);
        $(".iconMenuWhite").show(0);

        // Change chameleon colour.
        $("#topbar.chameleon").css("rgba(61, 108, 122, 0.98)");
        $(".navbar-top.chameleon").css("background-color", "rgb(68, 109, 122)");

        $(".overlay").show(0);
    }

    // Hide navbar.
    else if (!show) {

        if (!animation)
            $("#navbar").hide();

        // Slide out to the top.
        $("#navbar").hide("slide", {direction: "up"}, 200);
        $(".iconMenuWhite").hide(0);
        $(".iconMenuGray").show(0);

        // Change topbar chameleon colour.
        if ($(window).scrollTop() < 25) {
            $("#topbar.chameleon").css("background-color", "transparent");
            $(".navbar-top.chameleon").css("background-color", "rgb(68, 109, 122)");
        }

        $(".overlay").hide(0);
    }
}


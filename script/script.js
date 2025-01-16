$(document).ready(function () {
    AOS.init({
        duration: 400, 
        easing: 'ease-in-out', 
        once: true, 
    });

    function openPDF() {
        const pdfPath = '../assets/docs/GBRL%20Terms%20and%20Conditions.pdf';
        window.open(pdfPath, '_blank');
    }

    $(".privacy-policy").click(function (e) {
        e.preventDefault();
        openPDF();
    });

    $(".hamburger-menu").click(function (e) { 
        e.preventDefault();
        $(".hamburger-menu").css("display", "none");
        $(".close-button").css("display", "inline");
        $(".nav-bar-div").css("height", "380px");
        setTimeout(() => {
            $(".after-dropdown-nav-bar").fadeIn(100);
            $(".after-dropdown-nav-bar").css("display", "inline");
        }, 300);
    });

    $(".close-button").click(function (e) { 
        e.preventDefault();
        $(".after-dropdown-nav-bar").fadeOut(150);
        setTimeout(() => {
            $(".after-dropdown-nav-bar").css("display", "none");
            $(".close-button").css("display", "none");
            $(".hamburger-menu").css("display", "inline");
            $(".nav-bar-div").css("height", "80px");
        }, 200);
    });

    $(window).resize(function () {
        const width = $(window).width();

        if (width > 1200) {
            $(".hamburger-menu").css("display", "none");
            $(".close-button").css("display", "none");
            $(".after-dropdown-nav-bar").css("display", "none");
            $(".nav-bar-div").css("height", "80px");
        } else if (width <= 1200 && width >= 768) {
            $(".hamburger-menu").css("display", "inline");
            $(".close-button").css("display", "none");
            $(".after-dropdown-nav-bar").css("display", "none");
            $(".nav-bar-div").css("height", "80px");
        } else if (width < 768) {
            $(".hamburger-menu").css("display", "inline");
            $(".close-button").css("display", "none");
            $(".after-dropdown-nav-bar").css("display", "none");
            $(".nav-bar-div").css("height", "80px");
        }
    });

    $(window).resize();
});

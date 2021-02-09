$(document).ready(function () {
    /* Formfix */
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    /* Scroll */
    $('a[href^="#"]').click(function (event) {
        // Prevent default action
        event.preventDefault();

        // Variable set target & $target
        var target = this.hash,
            $target = $(target);

        $("html, body").stop().animate(
            {
                scrollTop: $target.offset().top,
            },
            500,
            "swing"
        );
    });

    /* Nav */
    $(window).scroll(function () {
        var offset = 1;
        if ($(window).scrollTop() >= offset) {
            $(".navbar").addClass("active");
        } else {
            $(".navbar").removeClass("active");
        }
    });

    var request;
    var theme;

    if ($("body").attr("data-theme") == "light") {
        theme = "dark";
    }
    if ($("body").attr("data-theme") == "dark") {
        theme = "light";
    }
    console.log("TEST");
    // console.log(theme);
    /* Dark theme */
    $("#theme").click(function () {
        request = $.ajax({
            url: "/app/dark.php",
            type: "POST",
            data: "theme=" + theme,
        });

        request.done(function (response) {
            $("body").attr("data-theme", response).css("transition", "0.6s");
            if ($("body").attr("data-theme") == "light") {
                theme = "dark";
            }
            if ($("body").attr("data-theme") == "dark") {
                theme = "light";
            }

            console.log(response);
        });
    });
});

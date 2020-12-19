$(document).ready(function () {
    /* Typed */
    var typed = new Typed("#me", {
        strings: ["WebDeveloper.", "Student.", "Gamer."],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true,
    });

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

    /* Tilit */
    $("#workcard").tilt({
        glare: true,
        maxGlare: 0.1,
        scale: 1.02,
        speed: 1000,
        transition: true,
        perspective: 1000,
        maxTilt: 10,
    });

    /* Contact Form */

    var form = $("#contactform");
    form.on("submit", function (event) {
        event.preventDefault();

        $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: form.serialize(),
            dataType: "json",
        }).done(function (data) {
            console.log(data);
        });

        // req.done(function (response) {
        //     if (response == "success") {
        //         swal(
        //             "Úspešne odoslané",
        //             "Ďakujem že si ma kontaktoval, čoskoro sa ti ozvem.",
        //             "success"
        //         );
        //         console.log("Succes");
        //     }
        //     if (response == "error") {
        //         swal(
        //             "Error, niekde je chyba",
        //             "Niekde je chyba skús to znova prosím",
        //             "error"
        //         );
        //         console.log("Error");
        //     }
        // });
    });
});

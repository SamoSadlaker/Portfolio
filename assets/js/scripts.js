$(document).ready(function () {
    /* Functions */

    function popalert(type, message) {
        var icon = "info";

        if (type == "success") {
            icon = "check";
        }
        if (type == "error") {
            icon = "error";
        }

        var alert = `<div id="alert" class="alert-${type}"><i class='bx bxs-${icon}-circle'></i>${message}</div>`;

        $("main").append(alert);

        setTimeout(() => {
            $("#alert").fadeOut(400, function () {
                $(this).remove();
            });
        }, 8000);
    }

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
        });
    });

    /* Contact Form */
    var form = $("#contactform");
    var error = $("#error");
    form.submit(function (e) {
        e.preventDefault();

        request = $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: form.serialize(),
        });

        request.done(function (response) {
            var res = JSON.parse(response);

            if (res.status == "validate") {
                error.text("* " + res.message);
            }

            if (res.status == "error") {
                $("input[type=text], input[type=email], textarea ").val("");
                error.text("");
                popalert("error", res.message);
            }

            if (res.status == "success") {
                $("input[type=text], input[type=email], textarea ").val("");
                error.text("");
                popalert("success", res.message);
            }
        });
    });
});

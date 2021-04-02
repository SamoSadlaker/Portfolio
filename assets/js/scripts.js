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

    // $("main").append(alert);
    document.body.innerHTML += alert;

    setTimeout(() => {
        document.getElementById("alert").remove();
    }, 8000);
}

/* Formfix */
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

/* Scroll */
for (const link of document.querySelectorAll('a[href^="#"]')) {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        console.log("yay");
        const element = link.getAttribute("href");
        scroll({
            top: document.querySelector(element).offsetTop,
            behavior: "smooth",
        });
    });
}

/* Nav */

window.onscroll = function () {
    navtoggle();
};
navtoggle();

function navtoggle() {
    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
        document.querySelector(".navbar").classList.add("active");
    } else {
        document.querySelector(".navbar").classList.remove("active");
    }
}
/* Dark theme */

var theme;
function checkTheme() {
    if (document.querySelector("body").getAttribute("data-theme") == "light") {
        theme = "dark";
    }

    if (document.querySelector("body").getAttribute("data-theme") == "dark") {
        theme = "light";
    }
}

checkTheme();

document.getElementById("theme").addEventListener("click", () => {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "/core/dark.php", true);
    xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xmlhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xmlhttp.onreadystatechange = () => {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document
                .querySelector("body")
                .setAttribute("data-theme", xmlhttp.responseText);

            document.querySelector("body").style.transition = "all 0.5s";

            checkTheme();
        }
    };
    xmlhttp.send("theme=" + theme);
});

/* Contact Form */
var form = document.getElementById("contactform");
var error = document.getElementById("error");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", form.getAttribute("action"), true);
    xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");

    var formdata = new FormData();
    formdata.append("name", document.getElementById("name").value);
    formdata.append("subject", document.getElementById("subject").value);
    formdata.append("email", document.getElementById("email").value);
    formdata.append("message", document.getElementById("message").value);

    xmlhttp.onreadystatechange = () => {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var res = JSON.parse(xmlhttp.responseText);

            switch (res.status) {
                case "validate":
                    error.textContent = "* " + res.message;
                    break;
                case "error":
                    error.textContent = "";
                    popalert("error", res.message);
                    break;
                case "success":
                    error.textContent = "";
                    popalert("success", res.message);
                    break;
            }
        }
    };
    xmlhttp.send(formdata);
});

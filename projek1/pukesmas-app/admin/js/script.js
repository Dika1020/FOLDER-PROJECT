let text = document.getElementById("text-top-1");
let text2 = document.getElementById("text-left-1");
let text3 = document.getElementById("text-bottom-1");
let text4 = document.getElementById("logo-right-1");
let nav = document.getElementById("navigation")

window.addEventListener("scroll", () => {
    let value = window.scrollY;

    text.style.marginTop = value * -1.5 + "px";
    text2.style.marginLeft = value * -0.5 + "px";
    text3.style.marginLeft = value * 1.7 + "px";
    text4.style.marginRight = value * -1.7 + "px";
});

window.addEventListener("scroll", () => {
    if (window.scrollY > text.offsetTop) {
        nav.style.backgroundColor = "white";
    }

    if (window.scrollY + window.innerHeight >= document.documentElement.scrollHeight) {
        nav.style.backgroundColor = "none";
    }
});

// script.js
function openRegistrationForm() {
    var registrationForm = document.getElementById('registrationForm');
    registrationForm.style.display = 'block';
}

function openRegistrationForm1() {
    var registrationForm = document.getElementById('registrationForm1');
    registrationForm.style.display = 'block';
}

function closeRegistrationForm() {
    var registrationForm = document.getElementById('registrationForm');
    registrationForm.style.display = 'none';
}

function closeRegistrationForm1() {
    var registrationForm = document.getElementById('registrationForm1');
    registrationForm.style.display = 'none';
}

document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector(".menu-icon");
    const navigation = document.getElementById("navigation");

    menuIcon.addEventListener("click", function () {
        navigation.classList.toggle("show");
    });
});
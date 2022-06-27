let burgerlinks = document.getElementsByClassName("burgermenu");
let arrows = document.getElementsByClassName("arrowright");
let burger = document.getElementById("burger");
let burgermenu = document.getElementById("burgermenu");
let radio = document.getElementById("toggle");

window.onresize = function() {
    if (window.innerWidth <= 850) {


    } else {
        burgermenu.style.display = "none";
    }

}

burger.onclick = function() {

    if (burgermenu.style.display == "none") {
        burgermenu.style.display = "block";


    } else {
        burgermenu.style.display = "none";
    }



    for (let i = 0; i < burgerlinks.length; i++) {
        burgerlinks[i].onclick = function() {
            burgermenu.style.display = "none";
            radio.checked = false;
        }

    }
}
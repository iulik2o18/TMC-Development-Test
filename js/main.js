function mobileMenu() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

scroll = document.getElementById("scroll");

window.onscroll = function() {scrollDisplay()};
function scrollDisplay() {
    if(document.body.scrollTop > 35 || document.documentElement.scrollTop > 35){
        scroll.style.display = "block";
    } else {
        scroll.style.display = "none";
    }
}
document.addEventListener("DOMContentLoaded", function () {
    var ribbon = document.getElementById("stickyRibbon");
    var ribbonHeight = ribbon.clientHeight;

    // Update the ribbon's position when scrolling
    window.addEventListener("scroll", function () {
        if (window.pageYOffset > ribbonHeight) {
            ribbon.style.top = "0";
        } else {
            ribbon.style.top = "-" + ribbonHeight + "px";
        }
    });
});
var x = 0;
function trocaBanner() {
    var banner = document.querySelector(".destaque img");
    if (x == 0) {
        banner.src="img/destaque-home-2.png";
        x = 1;
    } else {
            banner.src="img/destaque-home.png";
            x = 0;
        }
}
setInterval(trocaBanner, 5000);
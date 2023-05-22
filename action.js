let nav = document.getElementById("nav");

window.onscroll = function () {
  if (scrollY >= 1) {
    nav.style.width = "100%";
    nav.style.zIndex = 1;
    nav.style.position = "fixed";
    nav.style.top = "0px";
  } else {
    nav.style.position = "unset";
  }
}

let proflie = document.querySelector(".proflie");
let list = document.querySelector(".proflie-list");
let body = document.querySelector(".body");

proflie.onclick = function () {
  var displaySetting = list.style.display;
  if (displaySetting == "block") {
    list.style.display = "none";
  } else {
    list.style.display = "block";
  }
};

body.addEventListener("click", hidelist);

function hidelist() {
  list.style.display = "none";
}
var bars = document.getElementById("bars");
var pcNavMenu = document.getElementsByClassName("pcNavMenu");
var mobileNav = document.getElementsByClassName("mobile-nav")[0];
var mobileNavElements = document.getElementsByClassName("mobNavLink");

var isMobNavOpen = false;

window.addEventListener("resize", checkSize);
window.addEventListener("load", checkSize);
window.addEventListener("click", outsideClick);
bars.addEventListener("click", clickOnMobNav);


for (var i = 0; i < mobileNavElements.length; i++) {
  mobileNavElements[i].addEventListener("click", closeMobNav);
}

function checkSize()
{
  var width = document.documentElement.clientWidth;
  if (width <= 1000)
  {
    bars.style.display = "block";
    for (var i = 0; i < pcNavMenu.length; i++) {
      pcNavMenu[i].style.display = "none";
    }
  }
  else{
    bars.style.display = "none";
    mobileNav.style.display = "none";
    for (var i = 0; i < pcNavMenu.length; i++) {
      pcNavMenu[i].style.display = "block";
    }
  }
}

function clickOnMobNav()
{
  if (isMobNavOpen){
    closeMobNav();
  }
  else{
    openMobNav();
  }
}

function openMobNav() {
    bars.style.background = "#48b2a7";
    mobileNav.style.display = "flex";
    isMobNavOpen = true;
  }

function closeMobNav(){
  bars.style.background = "";
  mobileNav.style.display = "none";
  isMobNavOpen = false;
}

function outsideClick(e)
{
  if (isMobNavOpen && (e.target != mobileNav && e.target != bars) &&
        !bars.contains(e.target) && !mobileNav.contains(e.target)){
    console.log("outsideClick");
    closeMobNav();
  }
}

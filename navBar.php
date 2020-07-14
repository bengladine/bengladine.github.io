<style>
/*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v7.0.29,
* Autoprefixer: v9.7.6
* Browsers: last 4 version
*/

  .nav{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    position: fixed;
    padding: 20px;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 50px;
    color:red;
    background: #0D171A;
    z-index: 20;
    border-bottom: 7px groove #184A45;
    border-bottom-left-radius: 30%;
    border-bottom-right-radius: 30%;
  }

  .pcContainer{
    padding: 20px 30px 20px 30px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    width: 80%;
  }

  .homeContainer{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -ms-flex-pack: distribute;
        justify-content: space-around;
    width: 225px;
  }

  a{
    color: #eceee3;
    text-align: center;
    text-decoration: none;
    font-style: bold;
    font-size: 20px;
  }

  .navLink:hover{
    color: #48b2a7;
    transform: scale(1.3);
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    text-decoration: underline;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
  }

  .mobNavSeperator{
    border-top: 1px solid #1A4C50;
    width: 100%;
    border-color: #184A45;
  }

  .icon{
    border-radius: 50%;
    transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
  }

  .icon:hover{
    transform: scale(1.25);
    -webkit-transform: scale(1.25);
    -ms-transform: scale(1.25);
    cursor: pointer;
  }

  .pcNavMenu{
    display: block;
  }

  .mobile-nav{
    background: #0D171A;
    position: fixed;
    display: none;
    top: 80px;
    right: 0px;
    max-width: 100%;
    height: 250px;
    padding: 30px 10px 40px 40px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -ms-flex-pack: distribute;
        justify-content: space-around;
    -webkit-box-align: space-around;
        -ms-flex-align: space-around;
            align-items: space-around;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    z-index: 1;
    border-bottom-left-radius: 40%;
    border-left: 2px groove  #184A45;
    border-bottom: 2px groove  #184A45;
  }

  .bars{
    padding: 10px;
    padding-right: 50px;
    border-bottom-left-radius: 30%;
    border-bottom-right-radius: 30%;
  }

  .bars:hover{
    background: #184A45;
  }
</style>


<div class="nav">

  <!-- pc container -->
  <div class="pcContainer">
  <!-- home and other links(icons) -->
    <div class="homeContainer">
      <a class="navLink" href="index.php#welcome" target="_self"><b>Ben Gladiné</b></a>
      <a href="mailto:gladine.ben@gmail.com"><img class="hoverImage icon" style="background: #1A4C50 ;max-width: 50px; float: right;" src="./Resources/mail.png"></a>
      <a href="http://www.linkedin.com/in/bengladine" target="_blank"><img class="hoverImage icon" style="background: #1A4C50 ;max-width: 50px; float: right;" src="./Resources/linkedin.png"></a>
    </div>

  <!-- pcNavMenu -->
    <a class="navLink pcNavMenu" href="index.php#projectsPage">PROJECTS</a>
    <a class="navLink pcNavMenu" href="index.php#skills" target="_self">SKILLS</a>
    <a class="navLink pcNavMenu" href="./Resources/Resume.pdf" target="_blank">RESUME</a>
    <a class="navLink pcNavMenu" href="aboutme.php" target="_self">ABOUT ME</a>
    <a class= "navLink pcNavMenu" href="./helpJacques.php" target="_self">Codename: Help Jacques</a>
  </div>
  <!-- mobile nav-->
    <a id="bars" href="javascript:void(0);" class="bars">
      <img style="width: 50px;"src="./Resources/bars.png">
    </a>
</div>

  <div class ="mobile-nav">
    <a class= "navLink mobNavLink" href="index.php#welcome" target="_self">Home</a>
    <hr class="mobNavSeperator">
    <a class= "navLink mobNavLink" href="index.php#projectsPage" target="_self">Projects</a>
    <hr class="mobNavSeperator">
    <a class= "navLink mobNavLink" href="index.php#skills" target="_self">Skills</a>
    <hr class="mobNavSeperator">
    <a class= "navLink mobNavLink" href="./Resources/Resume.pdf" target="_blank">Resume</a>
    <hr class="mobNavSeperator">
    <a class= "navLink mobNavLink" href="./aboutme.php"  target="_self">About me</a>
    <hr class="mobNavSeperator">
    <a class= "navLink mobNavLink" href="./helpJacques.php"  target="_self">Codename: Help Jacques</a>
  </div>

<script>
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


</script>

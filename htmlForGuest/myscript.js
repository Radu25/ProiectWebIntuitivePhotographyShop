///////////////////////////////Alert///////////////////////////////////
function myAlert(x) {
   // alert("Have a good day! This is only frontend.");
    swal(x);
}
////////////////////////////////Toggle Menu/////////////////////////////
var MenuItems = document.getElementById("MenuItems");
var inputVal="";
if(MenuItems)
{
    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
    }
}


/////////////////////Account///////////////////////////
var LoginForm = document.getElementById("LoginForm");
var RegisterForm = document.getElementById("RegisterForm");
var Indicator = document.getElementById("Indicator");

function register() {
    RegisterForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}

function login() {
    RegisterForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";
}



////////////////////Produse///////////////////////////////
document.getElementById("ProductImg").src = localStorage.getItem("textvalue");
document.getElementById("ProductTitle").textContent = localStorage.getItem("textvalue2");
function passvalues(x) {


    if (x == 1) {
        var varsrc = document.getElementById("Referinta1").src;
        localStorage.setItem("textvalue", varsrc);
        var vartitle = document.getElementById("Referinta1title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 2) {
        var var1 = document.getElementById("Referinta2").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta2title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 3) {
        var var1 = document.getElementById("Referinta3").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta3title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 4) {
        var var1 = document.getElementById("Referinta4").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta4title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 5) {
        var var1 = document.getElementById("Referinta5").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta5title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 6) {
        var var1 = document.getElementById("Referinta6").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta6title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 7) {
        var var1 = document.getElementById("Referinta7").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta7title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 8) {
        var var1 = document.getElementById("Referinta8").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta8title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 9) {
        var var1 = document.getElementById("Referinta9").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta9title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 10) {
        var var1 = document.getElementById("Referinta10").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta10title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 11) {
        var var1 = document.getElementById("Referinta11").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta11title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }
    if (x == 12) {
        var var1 = document.getElementById("Referinta12").src;
        localStorage.setItem("textvalue", var1);
        var vartitle = document.getElementById("Referinta12title").textContent;
        localStorage.setItem("textvalue2", vartitle);
    }


    return false;
}



/////////////////////////Move down on click/////////////////////////
function scrollWin(x, y) {
    window.scrollTo(x, y);
  }
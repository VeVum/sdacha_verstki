const color = document.querySelector(".tll");
const ipn = document.querySelector("html");
const fonts = document.querySelector("body");
const tta = document.querySelector(".menu-link");
const tta2 = document.querySelector(".menu-link2");
const tta3 = document.querySelector(".menu-link3");


var a = 0;

color.addEventListener("click", function(){
    if (a % 2 == 0){
        ipn.style.backgroundColor = "#ffffff";
        fonts.style.color = "#300505";
        tta.style.color = "#300505";
        tta2.style.color = "#300505";
        tta3.style.color = "#300505";


        a = a + 1;
    }
    else{
        ipn.style.backgroundColor = "#000000";
        fonts.style.color = "#CECFD2";
        tta.style.color = "#CECFD2";
        tta2.style.color = "#CECFD2";
        tta3.style.color = "#CECFD2";


        a = a + 1;
    }
})

window.onscroll = function () {
    scrollFunction();
};


function scrollFunction(){
    var scroll = document.documentElement.scrollTop;

    if(scroll > 150){
        document.getElementById('nav').className = "nav--scroll";
    } else {
        document.getElementById('nav').className = "";

    }
}
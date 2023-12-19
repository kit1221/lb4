var select = document.getElementsByTagName("select");
var img = document.getElementsByTagName("img");

function changePic() {
    img[0].src = "./images/" + select[0].value + ".jpg";
}

function changeParam() {
    var params = document.querySelectorAll("input");

    img[0].style.width = params[0].value + "px";
    img[0].style.height = params[1].value + "px";
    img[0].style.border = params[2].value + "px solid black";
    img[0].setAttribute("alt", params[3].value);
}

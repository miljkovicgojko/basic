function changeImage() {
    var image = document.getElementById('myImage');
    if (image.src.match("logoImg")) {
        image.src = "images/logo5.gif";
    } 
        if (image.src.match("images/logo6.gif")){
        image.src = "images/logo5.gif";
    }
            else {
                image.src = "images/logo6.gif";
    }
}
 
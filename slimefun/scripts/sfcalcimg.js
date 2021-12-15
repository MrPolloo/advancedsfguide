function showImg() {
    var items = document.getElementById("items").value;
    var image = document.getElementById("itemsimage");
    document.getElementById("totalitem").style.marginTop = "10px";
    image.style.border = "thick solid rgb(85, 85, 85)";
    image.style.borderRadius = "30px";
    image.style.backgroundColor = "white";
    if (items == 1) {
        image.src = "./assets/items/stick.png";
    } else if (items == 33) {
        image.src = "./assets/items/electromagnet.png";
    } else if (items == 34) {
        image.src = "./assets/items/electricmotor.png";
    } else {
        image.src = "./assets/items/electricmotor.png";
    }
}
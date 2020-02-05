
function change() {
    document.getElementById("Titre").style.display = "none";
    document.getElementById("image").style.width = "300px";
    document.getElementById("bold").style.display = "none";
    let elem = document.getElementById('elem');
    elem.style.display = 'block';
}
let button = document.getElementById("bold");
button.addEventListener("click",change);
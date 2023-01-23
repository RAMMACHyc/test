let myName = "Sharing the load, lightening the burden...";
let index = 1;


function writeText() {
    document.querySelector(".tExt").textContent = myName.slice(0, index);
    index++
    if (index > myName.length) {
        index = 1;

    }
}
setInterval(function() {
    writeText();
}, 90)
let btn = document.getElementById('btn');
let inp = document.getElementById('inp');
let boxs = document.querySelectorAll('.box');
let drag = null;
let myName = "Sharing the load, lightening the burden...";
let index = 1;
btn.onclick = function() {
    if (inp.value != '') {
        boxs[0].innerHTML += `
        <p class="item" draggable="true">${inp.value}</p>`
        inp.value = '';
    }

    dragItem();
}


function dragItem() {
    let items = document.querySelectorAll('.item');
    items.forEach(item => {
        item.addEventListener('dragstart', function() {
            drag = item;
            item.style.opacity = '0.5';
        })
        item.addEventListener('dragend', function() {
            drag = null;
            item.style.opacity = '1';
        })
        boxs.forEach(box => {
            box.addEventListener('dragover', function(e) {
                e.preventDefault()
                this.style.background = '#1974c7';
                this.style.color = '#fff';
            })
            box.addEventListener('dragleave', function() {
                this.style.background = '#fff';
                this.style.color = '#000';
            })
            box.addEventListener('drop', function() {
                this.append(drag);
                this.style.background = '#fff';
                this.style.color = '#000';


            })

        })

    })
}
// const addBtn = document.querySelector(".add");
// const input = document.querySelector(".input-group");

// function addInput() {
//     const name = document.createElement("input");
//     name.type = "text";
//     name.placeholder = "Add a card";

//     const btn = document.createElement("a");
//     btn.className = "delete";
//     btn.innerHTML = "&times";
//     const flex = document.createElement("a");
//     flex.className = "flex";
// }
// addBtn.addEventListener("click", addInput)
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
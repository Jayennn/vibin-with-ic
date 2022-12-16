const startTime = () => {
    const now = new Date();
    var jam = now.getHours();
    var menit = now.getMinutes();
    var detik = now.getSeconds();

    menit = checkTime(menit);
    detik = checkTime(detik);
    document.getElementById("clock").innerHTML =
        jam + ":" + menit + ":" + detik;
    var time = setTimeout(startTime, 1000);

    // console.log(jam);
}

const checkTime = (i) => {
    if (i < 10) {
        i = "0" + i;
    }
    return i
}


const menuWrapper = document.getElementById("menu")
const active = menuWrapper.getElementsByClassName("menu-link");

Array.from(active).forEach(item => {
    item.addEventListener("click", () => { 
        var selected = document.getElementsByClassName("active");
        selected[0].className = selected[0].className.replace(" active", "");
        item.className += " active"
    })
})

const click = document.querySelector(".toggle");
let sidebarWrapp = document.querySelector(".sidebar-wrapper")
let sidebar = document.querySelector(".sidebar")
let dnone = document.querySelector(".content-wrapper")
var clicked = 0;

click.addEventListener("click", () => {
    clicked++
    click.classList.add("toggle-show")
    sidebarWrapp.classList.add("close-wrapper")
    sidebar.classList.add("close-sidebar")
    dnone.classList.add("d-none")
    if (clicked % 2 == 0) {  
        dnone.classList.remove("d-none")
        click.classList.remove("toggle-show")
        sidebarWrapp.classList.remove("close-wrapper")
        sidebar.classList.remove("close-sidebar")
    }
})



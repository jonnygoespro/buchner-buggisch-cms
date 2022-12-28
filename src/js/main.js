import './../scss/style.scss'

// Nav background color
const navbar = document.querySelector("header")

document.addEventListener("scroll", () => {
    // console.log(window.scrollY)
    if (window.scrollY > 100) {
        navbar.classList.add("active")
    } else {
        navbar.classList.remove("active")

    }
})


// Burger menu
const burger = document.querySelector("#burger")
const header = document.querySelector("header")
const links = document.querySelectorAll("header .mainnav a")
let open = false;

burger.addEventListener("click", () => {
    open = !open;

    if (open) {
        header.classList.add("open")
    } else {
        header.classList.remove("open")
    }
})

links.forEach((link) => {
    link.addEventListener("click", () => {
        open = false;
        header.classList.remove("open")
    })
})

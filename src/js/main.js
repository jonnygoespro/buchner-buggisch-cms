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

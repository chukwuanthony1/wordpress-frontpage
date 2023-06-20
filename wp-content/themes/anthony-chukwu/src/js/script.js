document.querySelector("#toggle-menu")?.addEventListener("click", () => {
    document.querySelector("#nav-menu").classList.toggle("open")
})

document.querySelectorAll(".mobile-header #nav-menu li").forEach(elem => {
    elem.addEventListener("click", () => {
        elem.classList.toggle("open")
    })
})

document.querySelectorAll(" footer .footer-menu").forEach(elem => {
    elem.querySelector(".menu-title").addEventListener("click", () => {
        elem.querySelector(".footer-menu-menu").classList.toggle("open")
    })
})
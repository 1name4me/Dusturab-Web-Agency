// --------------
// Sticky Navbar
window.onscroll = function() {stickyNavbar()}

const navbar = document.getElementById("header")
const toggleSticky = "sticky"

function stickyNavbar() {
    const currentScroll = window.scrollY;  
    if (currentScroll > 80) {
        navbar.classList.add(toggleSticky)
    } 
    else {
        navbar.classList.remove(toggleSticky)
    }
}
// --------------

// --------------
// Adding space when clicking on links so the navbar doesn't hide the content

const navbarHeight = navbar.offsetHeight;
document.documentElement.style.setProperty(
    "--scroll-padding",
    navbarHeight + "px"
)
// --------------


// --------------
// Hamburger menu

const menu = document.querySelector(".menu")
const links = document.getElementById(".link")
const hamburgerIcon = document.querySelector(".hamburg-icon")
const menuIcon = document.querySelector(".menuIcon")
const closeIcon = document.querySelector(".closeIcon")
const menuLinks = document.querySelectorAll("#link")
const logo = document.querySelector(".logo")

function toggleMenu() {
    if (menu.classList.contains("showMenu")) {
        menu.classList.remove("showMenu")
        closeIcon.style.display = "none"
        menuIcon.style.display = "block"
    } 
    else {
        menu.classList.add("showMenu")
        closeIcon.style.display = "block"
        menuIcon.style.display = "none"
    }
}

hamburgerIcon.addEventListener("click", toggleMenu)

menuLinks.forEach(
    function(menuLink) {
        menuLink.addEventListener("click", toggleMenu)
    }
)

logo.addEventListener("click", () => {
    menu.classList.remove("showMenu")
})


// --------------
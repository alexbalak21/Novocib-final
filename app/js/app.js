//HOME CHAGE HEADER BACKGROUND SOURCE
if (window.location.pathname === "/")
    document.querySelector(".carousel-item img").src = "app/static/img/backgound-nameless.jpg"

// Function to set image dimensions
function enlargeImg(img) {
    console.log(img.style.width)
    if (img.style.width != "100%") {
        img.style.width = "100%"
        img.style.cursor = "zoom-out"
        window.addEventListener("scroll", () => zoom_out())
    } else {
        zoom_out()
    }
    img.style.height = "auto"
    img.style.transition = "width 0.5s ease"

    function zoom_out() {
        img.style.width = "50%"
        img.style.cursor = "zoom-in"
    }
}

function copy_to_cipboard(text = "vale") {
    navigator.clipboard.writeText("contact@novocib.com")
}

//NAVBAR
function open_dropdown(li, chevron) {
    if (window.innerWidth > 1391) return
    li.classList.toggle("open")
    if (chevron.classList.contains("fa-caret-down")) chevron.classList.replace("fa-caret-down", "fa-minus")
    else chevron.classList.replace("fa-minus", "fa-caret-down")
}

const lis = document.querySelectorAll("header nav ul li")
lis.forEach((li) => {
    if (li.querySelector("ul")) {
        const dropdown_activator = document.createElement("span")
        dropdown_activator.classList.add("dropdown-activator")
        const chevron = document.createElement("i")
        chevron.classList.add("fa-solid", "fa-caret-down")
        dropdown_activator.appendChild(chevron)
        li.querySelector("a").after(dropdown_activator)
        dropdown_activator.addEventListener("click", () => open_dropdown(li, chevron))
    }
})

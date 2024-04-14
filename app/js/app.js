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
    const copied = document.getElementById("copied")
    copied.innerText = "Copyed !"
    setTimeout(() => {
        copied.innerText = ""
    }, 800)
}

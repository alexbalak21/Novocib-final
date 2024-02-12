const nav_items = document.querySelectorAll("nav ul li")
const sub_nav_items = document.querySelectorAll("nav ul li ul li")

nav_items.forEach((item) => {
    item.addEventListener("click", () => {
        if (item.classList.contains("open")) item.classList.remove("open")
        else {
            nav_items.forEach((it) => it.classList.remove("open"))
            item.classList.add("open")
        }
    })
})

sub_nav_items.forEach((item) => {
    item.addEventListener("click", () => {
        if (item.classList.contains("subopen")) item.classList.remove("subopen")
        else {
            sub_nav_items.forEach((item) => item.classList.remove("subopen"))
            item.classList.add("subopen")
        }
    })
})

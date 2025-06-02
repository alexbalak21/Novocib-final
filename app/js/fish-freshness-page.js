const formulas = document.querySelectorAll(".formula")
const formula_imgs = document.querySelectorAll(".formula-img")

const angles = document.querySelectorAll(".fa-angle-down")



function display_hide_formula(img, formula, index) {
    img.addEventListener("click", () => {
        if (formula.style.display !== "block"){
            formula.style.display = "block"
            angles[index].classList.remove("fa-angle-down")
            angles[index].classList.add("fa-angle-up")
        }
        else{
            formula.style.display = "none"
            angles[index].classList.remove("fa-angle-up")
            angles[index].classList.add("fa-angle-down")
        }
    })
}

formulas.forEach((formula, index) => {
    display_hide_formula(formula_imgs[index], formula, index)
});

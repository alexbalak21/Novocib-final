const img_1 = document.querySelector("#formula-img-1")
const img_2 = document.querySelector("#formula-img-2")
const img_3 = document.querySelector("#formula-img-3")

const formula_1 = document.querySelector("#formula-1")
const formula_2 = document.querySelector("#formula-2")
const formula_3 = document.querySelector("#formula-3")



function display_hide_formula(img, formula) {
    img.addEventListener("click", () => {
        console.log("click")
        formula.style.display = formula.style.display !== "block" ? "block" : "none"
    })
}

display_hide_formula(img_1, formula_1)
display_hide_formula(img_2, formula_2)
display_hide_formula(img_3, formula_3)
const keyWordInput = document.querySelector("#addSearchItem #keyword")
const addBtn = document.querySelector("#addSearchItem #add")
const keyWords = document.querySelector("#addSearchItem #keywords")

const words = new Set()

addBtn.addEventListener("click", (e) => {
  e.preventDefault()
  const word = keyWordInput.value.toLocaleLowerCase()
  if (words.has(word)) return
  keyWords.innerHTML += `<span class='badge text-bg-secondary me-1'>${word}</span>`
  words.add(word)
  keyWordInput.value = ""
})

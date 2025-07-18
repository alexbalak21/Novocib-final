const keyWordInput = document.querySelector("#addSearchItem #keyword")
const addBtn = document.querySelector("#addSearchItem #add")
const keyWordsDiv = document.querySelector("#addSearchItem #keyWordsDiv")
const keyWords = document.querySelector("#keyWords")
const addText = document.querySelector("#addText")
const textAreaDiv = document.querySelector("#textAreaDiv")



let t = 1
addText.addEventListener("click", (e) => {
  e.preventDefault()
  const textArea = document.createElement("textarea")
  textArea.setAttribute("class", "form-control mb-2")
  textArea.setAttribute("name", `txt_${t++}`)
  textAreaDiv.appendChild(textArea)
})

keyWordInput.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    e.preventDefault()
    addBtn.click()
  }
})

const words = new Set();
let i = 0;

addBtn.addEventListener("click", (event) => {
  event.preventDefault();

  const input = keyWordInput.value.toLowerCase().trim();
  const entries = input.split(",").map(e => e.trim()).filter(e => e !== "");

  for (const word of entries) {
    if (words.has(word)) continue;

    const badge = document.createElement("span");
    badge.setAttribute("class", "badge text-bg-secondary me-1");
    badge.innerText = word;
    keyWordsDiv.appendChild(badge);
    words.add(word);

    keyWords.value += i > 0 ? ", " : "";
    keyWords.value += `"${word}"`;
    i++;
  }

  keyWordInput.value = "";
});

function search_functionality() {
  console.log("Load Search")
}



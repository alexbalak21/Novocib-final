const copy_btn = document.querySelector("#copy");
const copy_icon = document.querySelector(".fa-clipboard");
const copied = copy_btn.querySelector("span");
const text = "Copied";
let index = 0;

function addLetter() {
    if (index < text.length) {
        copied.innerText += text[index];
        index++;
        setTimeout(addLetter, 50); // Adjusted to 0.05 seconds
    }
}

copy_btn.addEventListener("click", () => {
    copied.innerText = ""; // Reset before each click
    index = 0; // Reset index
    addLetter();
    navigator.clipboard.writeText("contact@novocib.com");
    copy_icon.classList.replace("fa-clipboard", "fa-clipboard-check");
    copy_btn.classList.replace("text-secondary", "text-success");
    copied.style.display = "inline-block";

    // Revert after 0.5 second
    setTimeout(() => {
        copy_icon.classList.replace("fa-clipboard-check", "fa-clipboard");
        copy_btn.classList.replace("text-success", "text-secondary");
        copied.style.display = "none";
    }, 500);
});

const mailto = document.querySelector("#mailto");
const mail_icon = mailto.querySelector("i");

mailto.addEventListener("mouseover", () => mail_icon.classList.replace("fa-envelope", "fa-envelope-open"));
mailto.addEventListener("mouseout", () => mail_icon.classList.replace("fa-envelope-open", "fa-envelope"));

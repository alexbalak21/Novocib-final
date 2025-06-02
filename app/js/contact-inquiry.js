const copy_btn = document.querySelector("#copy")
    const copy_icon = document.querySelector(".fa-clipboard")
    const copied = copy_btn.querySelector("span")

    copy_btn.addEventListener("click", () => {
        navigator.clipboard.writeText("contact@novocib.com")
        copy_icon.classList.replace("fa-clipboard", "fa-clipboard-check");
        copy_btn.classList.replace("text-secondary", "text-success");
        copied.style.display = "inline-block"

        // Revert after 2 seconds
        setTimeout(() => {
            copy_icon.classList.replace("fa-clipboard-check", "fa-clipboard");
            copy_btn.classList.replace("text-success", "text-secondary");
            copied.style.display = "none"
        }, 500);
    })

    const mailto = document.querySelector("#mailto")
    const mail_icon = mailto.querySelector("i")

    mailto.addEventListener("mouseover", () => mail_icon.classList.replace("fa-envelope", "fa-envelope-open"))
    mailto.addEventListener("mouseout", () => mail_icon.classList.replace("fa-envelope-open", "fa-envelope"))
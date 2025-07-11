const searchInput = document.getElementById("searchInput");
const searchBtn = document.getElementById("searchBtn");
const search_btn = document.getElementById("search_btn");
const clear_searchbar = document.getElementById("clear-searchbar")

function handleSearch() {
    let query = searchInput.value.trim();
    if (query === "") return;
    query = encodeURIComponent(query);
    window.location.href = `/search?sq=${query}`;
}

// Attach to both buttons
searchBtn.addEventListener("click", handleSearch);
search_btn.addEventListener("click", handleSearch);

// Trigger search on Enter key
searchInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") handleSearch();
});

if (searchInput.value !== "") clear_searchbar.classList.add("visible")

searchInput.addEventListener("input", () => {
    if (searchInput.value.trim() !== "") {
        clear_searchbar.classList.add("visible");
    } else {
        clear_searchbar.classList.remove("visible");
    }
});

clear_searchbar.addEventListener("click", () => {
    searchInput.value = "";
    clear_searchbar.classList.remove("visible");
});



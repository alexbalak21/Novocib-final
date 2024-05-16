<?php
class Searchbar
{
    static function get()
    {
        ob_start(); ?>
        <div class="searchbar">
            <input id="searchInput" class="search_input" type="text" name="search" placeholder="Search..." />
            <a id="searchBtn" class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
        <script>
            const searchBtn = document.getElementById("searchBtn")
            const searchInput = document.getElementById("searchInput")
            searchBtn.addEventListener("click", () => {
                let query = searchInput.value;
                if (query === "") return
                query = query.trim()
                query = query.replace(/^\s+|\s+$/gm, '')
                window.location.href = `/search?sq=${query}`
            })
            searchInput.addEventListener('keypress', (e) => {
                if (e.key === "Enter") searchBtn.click()
            })
        </script>
        <style>
            #searchBtn:hover {
                cursor: pointer;
            }
        </style>
<?php return ob_get_clean();
    }
} ?>
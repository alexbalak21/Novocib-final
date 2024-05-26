<?php
$title = "Search";
require_once "app/templates/base.php";
require_once "app/logic/db_operations.php";

$novoblue = "#4167b1";

$search = isset($_GET['sq']) ? $_GET['sq'] : "";

$search = trim($search);

$searchResults = [];
if ($search !== "") $searchResults = search_db($search);


if ($searchResults) {
    ob_start(); ?>
    <ul class="list-group search-results">
        <?php foreach ($searchResults as $item) : ?>
            <li class="list-group-item">
                <h3><a href="<?= $item['page_url'] ?>"><?= $item['title'] ?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></h3>
                <p><?= substr($item['content'], 0, 270) . "..." ?></p>
            </li>
        <?php endforeach ?>
    </ul>
<?php $searchItems = ob_get_clean();
} else {
    ob_start(); ?>
    <div class="bg-light">
        <div class="not-found container d-flex justify-content-center flex-wrap">
            <h2 class="novo-blue text-center w-100 pt-3 mb-4">No Result found</h2>
            <div class="col-lg-9">
                <ol class="list-group pb-4">
                    <li class="list-group-item mb-2 px-5">
                        Try searching for other keywords, using simple search terms.
                    </li>
                    <li class="list-group-item mb-2 px-5">
                        Use specific terms or keyword related to the the service you are
                        searching for.
                    </li>
                    <li class="list-group-item mb-2 px-5">
                        Check your search for errors or typos.
                    </li>
                    <li class="list-group-item mb-2 px-5">
                        Live us a message to let us know your specific need.
                    </li>
                </ol>
            </div>
        </div>
    </div>
<?php $searchItems = ob_get_clean();
}

addContent(Banner::gen("/app/static/img/search.jpg"));
$content_title = UnderlinedTitle::get("Search", "novoblue", "center");
$searchbar = Searchbar::get();
$page_content = <<<CONTENT
<div class="container my-5 d-flex justify-content-center">
$searchbar
</div>
<h2 class="col-12 novo-blue mt-3 text-center">Search Results for : <span class="text-dark">$search</span></h2>
<main class="d-flex justify-content-center">
<div class="col-lg-8 mt-3 mb-5">
$searchItems
</div>
</main>
CONTENT;

addContent($page_content);
render();

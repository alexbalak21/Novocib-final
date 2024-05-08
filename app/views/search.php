<?php
$title = "Search";
require_once "app/templates/base.php";

$novoblue = "#4167b1";

$noSearchResults = <<<NORESULT
<div class="bg-light">
    <div class="not-found container d-flex justify-content-center flex-wrap">
        <h2 class="novo-blue text-center w-100 pt-3 mb-4">No Result found</h2>
        <div class="col-lg-9">
            <ol class="list-group pb-4">
                <li class="list-group-item mb-2 px-5">Try searching for other keywords, using simple search terms.</li>
                <li class="list-group-item mb-2 px-5">
                    Use specific terms or keyword related to the the service you are searching for.
                </li>
                <li class="list-group-item mb-2 px-5">Check your search for errors or typos.</li>
                <li class="list-group-item mb-2 px-5">Live us a message to let us know your specific need.</li>
            </ol>
        </div>
    </div>
</div>
NORESULT;

function gen_searchList(array $array): string
{
    ob_start(); ?>
    <ul class="list-group">
        <?php foreach ($array as $item) : ?>
            <li class="list-group-item"><?= $item ?></li>
        <?php endforeach ?>
    </ul>
<?php return ob_get_clean();
}

$programmingLanguages = [
    "JavaScript",
    "Python",
    "Java",
    "C++",
    "C#",
    "Ruby",
    "PHP",
    "Swift",
    "Kotlin",
    "TypeScript",
    "Go",
    "Rust",
    "R",
    "Perl",
    "Scala",
    "Lua",
    "Objective-C",
    "Visual Basic",
    "Dart",
    "Haskell",
];
$searchResults = gen_searchList($programmingLanguages);




addContent(Banner::gen());
$content_title = UnderlinedTitle::get("Search", "novoblue", "center");
$searchbar = Searchbar::get();
$page_content = <<<CONTENT
<div class="container my-5 d-flex justify-content-center">
$searchbar
</div>
<main class="d-flex justify-content-center">

<div class="col-lg-8">
    <ul class="list-group search-results">
        <li class="list-group-item">
        <h3><a href="">Analytical Services <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis blanditiis exercitationem quas tempore repellat? </p>
        </li>
        <li class="list-group-item">
        <h3><a href="">Analytical Services <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis blanditiis exercitationem quas tempore repellat? </p>
        </li>
    </ul>
</div>
</main>
CONTENT;

addContent($page_content);
render();

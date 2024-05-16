<?php
require_once "templates/head.php";
$page = "search";

define("__ROOT__", $_SERVER['DOCUMENT_ROOT'] . "\app");
define("__LOGIC__", $_SERVER['DOCUMENT_ROOT'] . "\app\logic\\");

require_once __LOGIC__ . "connect_db.php";
require_once __LOGIC__ . "db_operations.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    extract($_POST);
    $texts = [];
    foreach ($_POST as $key => $value)
        if (str_starts_with($key, "txt_")) array_push($texts, $value);
    $content = join(" | ", $texts);
    create_entry($url, $title, $content, $keywords);
}

?>

<?= Nav::gen() ?>
<main class="" style="height: 93vh;">
    <div class="container d-flex justify-content-center flex-wrap">
        <div class="text-center mt-4 w-100">
            <h3>Database <?= connect_db() !== NULL  ? "<span class='badge text-bg-success'>Online</span>" : "<span class='badge text-bg-danger'>Offline</span>" ?></h3>
        </div>
        <div class="col-lg-9 col-12">
            <form action="search.php" method="post" id="addSearchItem" onload="">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" required min="10" max="255">
                <label class="form-label mt-3">Page Url</label>
                <input type="text" name="url" required class="form-control">
                <div id="textAreaDiv">
                    <label class="mt-3">Text</label>
                    <textarea class="form-control mb-2" name="txt_0"></textarea>
                </div>
                <div class="text-end my-1">
                    <button class="btn btn-outline-success" id="addText">Add Text</button>
                </div>

                <h6 class="text-center">Keywords</h6>
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-8">
                        <input class="form-control" type="text" id="keyword">
                        <input type="hidden" name="keywords" id="keyWords">
                    </div>
                    <button class="btn btn-success ms-4" id="add">Add</button>
                </div>
                <div id="keyWordsDiv" class="text-center mt-3"></div>
                <div class="text-center mt-4"><button class="btn btn-primary">Submit</button></div>

            </form>
        </div>
    </div>
    <?php
    $data = read_all();
    print_r($data);
    ?>
</main>


<?php
require_once "templates/foot.php";
?>
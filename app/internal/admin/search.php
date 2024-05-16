<?php
require_once "templates/head.php";
$page = "search";

define("__ROOT__", $_SERVER['DOCUMENT_ROOT'] . "\app");
define("__LOGIC__", $_SERVER['DOCUMENT_ROOT'] . "\app\logic\\");

require_once __LOGIC__ . "connect_db.php";
require_once __LOGIC__ . "db_operations.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    print_r($_POST);
    extract($_POST);
    $keywords = explode(',', $keywords);
    $content = $text1 . ' | ' . $text2;
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
            <form action="search.php" method="post" id="addSearchItem">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" required min="10" max="255">
                <label class="form-label mt-3">Page Url</label>
                <input type="text" name="url" required class="form-control">
                <h5 class="text-center mt-4">Content</h5>
                <label class="form-label">Text 1</label>
                <textarea class="form-control" rows="7" name="text1"></textarea>
                <label class="form-label mt-2">Text 2</label>
                <textarea class="form-control" rows="7" name="text2"></textarea>
                <h5 class="text-center mt-4">KeyWords</h5>
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-8">
                        <input class="form-control" name="keywords" type="text" id="keyword">
                    </div>
                    <button class="btn btn-success ms-4" id="add">Add</button>
                </div>
                <div id="keywords" class="text-center mt-3"></div>
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
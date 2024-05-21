<?php
$logic_root = str_ends_with($_SERVER['DOCUMENT_ROOT'], '/') || str_ends_with($_SERVER['DOCUMENT_ROOT'], '\\') ? $_SERVER['DOCUMENT_ROOT']  . "app/logic/" : $_SERVER['DOCUMENT_ROOT'] . "/app/logic/";

define("__LOGIC__", $logic_root);
require_once __LOGIC__ . "connect_db.php";
require_once __LOGIC__ . "db_operations.php";



function alert($message = "", $type = "success")
{
    ob_start(); ?>
    <div class="alert alert-success alert-<?= $type ?> fade show" role="alert">
        <div class="d-flex">
            <div class="text-center col-11 my-0"><strong><?= $message ?></strong></div>
            <button type="button" class="btn-close mt-3" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php echo ob_get_clean();
}

function clean($string)
{
    $string = trim($string);
    $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\_]/', '', $string); // Removes special chars.
    return str_replace('_', ' ', $string);
}




//POST
if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['_method'] === "POST") {
    extract($_POST);
    $texts = [];
    foreach ($_POST as $key => $value)
        if (str_starts_with($key, "txt_")) array_push($texts, clean($value));
    $content = join(" | ", $texts);
    $res = create_entry($url, clean($title), $content, $keywords);
    if ($res) alert("Search Item created.");
}

//DELETE
if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['_method'] === "DELETE") {
    extract($_POST);
    $res = delete_item($id);
    if ($res) alert("Item deleted.", "danger");
}

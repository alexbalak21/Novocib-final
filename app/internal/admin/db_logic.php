<?php
$logic_root = str_ends_with($_SERVER['DOCUMENT_ROOT'], '/') || str_ends_with($_SERVER['DOCUMENT_ROOT'], '\\') ? $_SERVER['DOCUMENT_ROOT']  . "app/logic/" : $_SERVER['DOCUMENT_ROOT'] . "/app/logic/";

define("__LOGIC__", $logic_root);
require_once __LOGIC__ . "db_operations.php";

function alert($message = "", $type = "success")
{
    ob_start(); ?>
    <div class="alert alert-success alert-<?= $type ?> fade show" role="alert">
        <div class="d-flex">
            <div class="text-center col-11 my-0"><strong><?= $message ?></strong></div>
            <button type="button" class="btn-close mt-3" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            // Auto-dismiss alert after 10 seconds (10,000 milliseconds)
            setTimeout(() => {
                const alert = document.querySelector('.alert');
                if (alert) {
                    const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                    bsAlert.close();
                }
            }, 3000);
        </script>
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


if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['_method']) && $_POST['_method'] === "DELETE") {
    if (isset($_POST['visitor_search'])) {
        $id = $_POST['visitor_search'];
        $res = visitors_search_delete($id);
        if ($res) alert("Visitor search deleted.", "danger");
        return;
    } else if (isset($_POST['search_item'])) {
        $id = $_POST['search_item'];
        $res = delete_search_item($id);
        if ($res) alert("Item deleted.", "danger");
        return;
    } else if (isset($_POST['request_404'])) {
        $id = $_POST['request_404'];
        $res = delete_404_request($id);
        if ($res) alert("404 request deleted.", "danger");
        return;
    } else {
        alert("Invalid request.", "danger");
    }
}

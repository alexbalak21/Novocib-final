<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/session/check_session.php";

function serve()
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $e_mail = $_POST['e_mail'];
    $link = "https://novocib.com/seccure/transfer?f_name=$first_name&l_name=$last_name&e_mail=$e_mail";
    $title = "Customer Link";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/app/internal/admin/templates/base.php";
?>
    <main style="height: 94vh; display: flex; align-items: center; justify-content: center;">
        <div>
            <h4 class="text-muted"><?= $link ?></h4>
            <div class="text-center mt-3"><button class="btn btn-success" onclick="navigator.clipboard.writeText('<?= $link ?>');">Copy</button></div>
        </div>

    </main>
<?php
}

if ($_SERVER['REQUEST_METHOD'] !== "POST") header("Location: index.php");
else serve();

<?php
require_once "templates/head.php";
$page = "SQL";
?>
<?= Nav::gen() ?>

<main style="height: 93vh;">
    <h1 class="text-center">SQL Execution</h1>
    <?php require_once "db_logic.php"; ?>
    <div class="d-flex align-items-center justify-content-center">
        <form action="sql.php" method="post">
            <input type="hidden" name="_method" value="EXEC">
            <label>SQL Query</label>
            <textarea name="sql_exec" class="form-control"></textarea>
            <div class="mt-3"><button class="btn btn-success">Execute</button>
                <!-- <button class="btn btn-outline-danger">Cancel</button> -->
            </div>
        </form>

    </div>

</main>





<?php
require_once "templates/foot.php";
?>
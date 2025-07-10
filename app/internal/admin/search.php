<?php
$title = "Search";
require_once __DIR__ . "/templates/base.php";
?>



<main class="" style="height: 93vh;">

    <?php require_once "db_logic.php"; ?>
    <div class="container d-flex justify-content-center flex-wrap">
        <div class="text-center mt-4 w-100">
            <h3>Database <?= connect_db() !== NULL  ? "<span class='badge text-bg-success'>Online</span>" : "<span class='badge text-bg-danger'>Offline</span>" ?></h3>
        </div>

        <div class="col-lg-9 col-12">
            <form action="search.php" method="post" id="addSearchItem">
                <input type="hidden" name="_method" value="POST">
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
    <?php $search_data = search_items_read_all(); ?>
    <div class="mt-5 col-10 mx-auto">
        <h2 class="text-center mb-2">Search Items</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Contents</th>
                    <th>Keywords</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($search_data as $search_item) : ?>
                    <tr>
                        <td>
                            <?= $search_item['title'] ?>
                        </td>
                        <td>
                            <a href="<?= $search_item['page_url'] ?>"><?= $search_item['title'] ?></a>
                        </td>
                        <td>
                            <?= substr($search_item['content'], 0, 20) . "..." ?>
                        </td>
                        <td>
                            <?= $search_item['keywords'] ?>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Delete
                                </button>
                                <div class="dropdown-menu text-center">
                                    <h6>Confirm</h6>
                                    <form action="search.php" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="search_item" value="<?= $search_item['id'] ?>">
                                        <button class="btn btn-danger">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="/app/internal/admin/js/search.js"></script>
</main>
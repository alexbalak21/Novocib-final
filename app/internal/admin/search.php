<?php
global $title;
$title = "Search";
require_once __DIR__ . "/templates/base.php";
?>
<main style="height: 93vh;">
    <?php require_once "db_logic.php"; ?>
    <div class="container d-flex justify-content-center flex-wrap">
        <div class="text-center mt-4 w-100">
            <h3>Database <?= connect_db() !== NULL ? "<span class='badge text-bg-success'>Online</span>" : "<span class='badge text-bg-danger'>Offline</span>" ?></h3>
        </div>

        <div class="col-lg-9 col-12">
            <form action="search.php" method="post" id="addSearchItem">
                <input type="hidden" name="_method" value="POST">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" required minlength="10" maxlength="255">
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
    <div class="mt-5 px-1">
        <h2 class="text-center mb-2">Search Items</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10%;">Title</th>
                    <th style="width: 10%;">Url</th>
                    <th style="width: 60%;">Contents</th>
                    <th style="width: 10%;">Keywords</th>
                    <th style="width: 10%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($search_data as $search_item) : ?>
                    <tr>
                        <td><?= htmlspecialchars($search_item['title']) ?></td>
                        <td><a href="<?= htmlspecialchars($search_item['page_url']) ?>"><?= htmlspecialchars($search_item['title']) ?></a></td>
                        <td style="max-width: 1000px;">
                            <span
                                class="text-decoration-none"
                                data-bs-toggle="modal"
                                data-bs-target="#contentModal"
                                data-content="<?= htmlspecialchars($search_item['content']) ?>">
                                <?= mb_substr($search_item['content'], 0, 500) . "..."  ?>
                                <i class="fa-solid fa-arrow-pointer"></i>
                            </span>
                        </td>
                        <td class="text-muted small">
                            <?= (empty($search_item['keywords']) || $search_item['keywords'] === '[]')
                                ? ''
                                : substr($search_item['keywords'], 0, 130) . "..." ?>
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

    <!-- Modal for Full Content -->
    <div class="modal fade" id="contentModal" tabindex="-1" aria-labelledby="contentModalLabel" aria-hidden="true">
        <<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Full Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalContent"></div>
            </div>
    </div>
    </div>

    <script>
        const contentModal = document.getElementById('contentModal');
        contentModal.addEventListener('show.bs.modal', event => {
            const trigger = event.relatedTarget;
            const content = trigger.getAttribute('data-content');
            document.getElementById('modalContent').textContent = content;
        });
    </script>

    <script src="/app/internal/admin/js/search.js"></script>
</main>
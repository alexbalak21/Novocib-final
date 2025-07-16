<?php
global $title;
$title = "Visitor Searches";
require_once __DIR__ . "/templates/base.php";
require_once "db_logic.php";
$page = $_GET['page'] ?? 1;
?>
<main class="container" style="height: 93vh;">

    <?php $search_data = visitors_searches_read_all($page); ?>
    <div class=" mt-5 mx-auto">
        <table class="table table-bordered">
            <thead class="bg-light">
                <tr>
                    <th width="60%"> Search Query</th>
                    <th width="20%">Time</th>
                    <th width="20%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($search_data) && is_array($search_data)): ?>
                    <?php foreach ($search_data as $search): ?>
                        <tr>
                            <td class="text-center pt-3"><?= htmlspecialchars($search['search_query']) ?></td>
                            <td class="text-center pt-3"><?= htmlspecialchars($search['created_at']) ?></td>
                            <td class="d-flex justify-content-center gap-1">
                                <a href="/search?sq=<?= urlencode($search['search_query']) ?>" class="btn btn-primary">
                                    Execute <i class="fa fa-search"></i>
                                </a>
                                <div class="dropdown">
                                    <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Delete <i class="fa fa-trash ms-2"></i>
                                    </button>
                                    <div class="dropdown-menu text-center">
                                        <h6>Confirm</h6>
                                        <form action="visitor-searches.php" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="visitor_search" value="<?= $search['id'] ?>">
                                            <button class="btn btn-danger">
                                                Yes <i class="fa-solid fa-check ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div>
            <a href="?page=<?= $page - 1 ?>" class="btn btn-secondary <?= $page === 1 ? 'disabled' : '' ?>">Previous</a>
            <a href="?page=<?= $page + 1 ?>" class="btn btn-secondary">Next</a>
        </div>
        <div>
            <span>Page <?= $page ?></span>
        </div>
    </div>
</main>
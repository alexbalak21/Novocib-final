<?php
$title = "404 Requests";
require_once __DIR__ . "/templates/base.php";
require_once "db_logic.php";
$page = $_GET['page'] ?? 1;
$requests = request404_read_all($page);
$total = count_404_requests();
?>

<main class="container" style="height: 93vh;">
    <div class="mt-5 mx-auto">
        <table class="table table-bordered">
            <thead class="bg-light">
                <tr>
                    <th width="40%">Requested Url</th>
                    <th width="20%">IP</th>
                    <th width="20%">Time</th>
                    <th width="20%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requests as $request): ?>
                    <tr>
                        <td class="text-center pt-3">
                            <?= htmlspecialchars($request['url']) ?>
                        </td>
                        <td class="text-center pt-3"><?= htmlspecialchars($request['ip']) ?> <br> <?= get_country_from_ip($request['ip']) ?></td>
                        <td class="text-center pt-3"><?= htmlspecialchars($request['time']) ?></td>
                        <td class="text-center pt-3">
                            <div class="dropdown">
                                <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Delete <i class="fa fa-trash ms-2"></i>
                                </button>
                                <div class="dropdown-menu text-center">
                                    <h6>Confirm</h6>
                                    <form action="404-requests.php" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="request_404" value="<?= $request['id'] ?>">
                                        <button class="btn btn-danger">Yes <i class="fa-solid fa-check ms-2"></i></button>
                                    </form>
                                </div>
                                <a target="_blank" href="<?= $request['url'] ?>" class="btn btn-primary">Go <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div>
            <a href="?page=<?= $page - 1 ?>" class="btn btn-secondary <?= $page === 1 ? 'disabled' : '' ?>">Previous</a>
            <a href="?page=<?= $page + 1 ?>" class="btn btn-secondary <?= $page * 10 >= $total ? 'disabled' : '' ?>">Next</a>
        </div>
        <div>
            <span>Page <?= $page ?> of <?= ceil($total / 10) ?></span>
        </div>
</main>
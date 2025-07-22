<?php
global $title;
$title = "Messages";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";

$MessageRepo = new Message_repository();
$messages = $MessageRepo->get_all_messages();
?>
<div class="col-11 mx-auto mt-1" style="height: 85px;">

    <?php
    if (isset($_GET['message'])) {
        switch ($_GET['message']) {
            case 'deleted':
                echo Alert::gen("success", "Message Deleted.");
                break;

            case "error":
                echo Alert::gen("warning", "Error Deleting message.");
                break;
        }
    }

    ?>
</div>
<section>
    <div class="col-11 mx-auto">
        <h2 class="text-center mb-2">Messages</h2>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Need</th>
                    <th>Message</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($messages)) : ?>
                    <?php foreach ($messages as $message) : ?>
                        <tr>
                            <td><?= htmlspecialchars($message['name']) ?></td>
                            <td><?= htmlspecialchars($message['email']) ?></td>
                            <td><?= htmlspecialchars($message['need']) ?></td>
                            <td>
                                <a href="message.php?id=<?= $message['id'] ?>" class="text-decoration-none text-reset">
                                    <?= htmlspecialchars($message['message']) ?>... <i class="fa-solid fa-arrow-pointer"></i>
                                </a>
                            </td>
                            <td><?= $message['created_on'] ?></td>
                            <td>
                                <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Delete
                                </button>
                                <div class="dropdown-menu text-center">
                                    <h6>Confirm</h6>
                                    <form action="controllers/message_controller.php" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="message" value="<?= $message['id'] ?>">
                                        <button class="btn btn-danger">Yes</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">No messages</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</section>


<style>
    th,
    td {
        text-align: center;
    }
</style>
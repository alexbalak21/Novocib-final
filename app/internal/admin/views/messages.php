<?php
global $title;
$title = "Messages";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";

$MessageRepo = new Message_repository();
$messages = $MessageRepo->get_all_messages();

?>

<section class="mt-5">
    <style>
        th,
        td {
            text-align: center;
        }
    </style>
    <div class="mt-5 col-11 mx-auto">
        <h2 class="text-center mb-2">Messages</h2>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Need</th>
                    <th>Message</th>
                    <th>Created On</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $msg) : ?>
                    <tr>
                        <td><?= htmlspecialchars($msg['name']) ?></td>
                        <td><?= htmlspecialchars($msg['email']) ?></td>
                        <td><?= htmlspecialchars($msg['need']) ?></td>
                        <td><?= htmlspecialchars($msg['message']) ?></td>
                        <td><?= $msg['created_on'] ?></td>
                        <td><a href="message.php?if=<?= $msg['id'] ?>">View</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?php
global $title;
$title = "Messages";

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";

$MessageRepo = new Message_repository();
$messages = $MessageRepo->get_all_messages();

$messages = [
    [
        'id' => 3,
        'name' => 'Candelaria McVicars',
        'email' => 'turnerfisher348382@gmail.com',
        'need' => 'Bhzsxixfhelle',
        'message' => 'Hello Need Help Managing Your Social Media? Social Media Manager keeps your brand active across all platforms...',
        'created_on' => '2025-07-20 18:32:25'
    ],
    [
        'id' => 2,
        'name' => 'Yasmin',
        'email' => 'info@mark.medicopostura.com',
        'need' => 'Kquoftqmpx cbz',
        'message' => 'Good Morning Looking to improve your posture and live a healthier life?...',
        'created_on' => '2025-07-20 02:47:28'
    ]
];

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
                    <th>View</th>
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
                        <td><a href="message.php?id=<?= $msg['id'] ?>">View</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
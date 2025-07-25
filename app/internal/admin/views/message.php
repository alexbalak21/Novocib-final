<?php
global $title;
$title = "Message";

$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) header("Location : /messages.php");

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/internal/admin/templates/base.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";

$MessageRepo = new Message_repository();
$message = $MessageRepo->get_message_by_id($id);
?>
<section class="mt-5 pt-4">
    <style>
        .message-container {
            max-width: 700px;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .message-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .message-header h3 {
            margin: 0;
        }

        .message-detail {
            margin: 15px 0;
        }

        .fa {
            margin-right: 10px;
            color: #007bff;
        }

        .message-footer {
            text-align: right;
            font-size: 0.9em;
            color: #666;
        }
    </style>

    <div class="message-container">
        <div class="message-header">
            <h3><i class="fa fa-user"></i><?= htmlspecialchars($message['name']) ?></h3>
            <span><i class="fa fa-calendar"></i><?= $message['created_on'] ?></span>
        </div>

        <div class="message-detail">
            <p><i class="fa fa-envelope"></i><strong>Email:</strong> <?= htmlspecialchars($message['email']) ?></p>
            <p><i class="fa fa-bullseye"></i><strong>Need:</strong> <?= htmlspecialchars($message['need']) ?></p>
            <p><i class="fa fa-comment"></i><strong>Message:</strong><br><?= htmlspecialchars($message['message']) ?></p>
        </div>

        <div class="message-footer">
            Message ID: <?= $message['id'] ?>
        </div>
        <div class="text-end mt-2 me-2">
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
        </div>
    </div>
</section>
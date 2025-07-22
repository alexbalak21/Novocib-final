<?php
class Alert
{
    private static $types = ['primary', 'secondary', 'success', 'danger', 'warning', 'info'];

    /**
     * Generate a Bootstrap alert.
     *
     * @param string $type    Alert type (validated against allowed types)
     * @param string $content Content to display in the alert
     * @param int    $timeout Optional timeout in milliseconds before auto-dismiss
     *
     * @return string Rendered alert HTML
     */
    public static function gen($type, $content, $timeout = 3000)
    {
        if (!in_array($type, self::$types)) {
            $type = 'info'; // fallback to default
        }

        ob_start(); ?>
        <div class="alert alert-<?= $type ?> alert-dismissible fade show" role="alert">
            <p class="text-center"><?= htmlspecialchars($content) ?></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            setTimeout(() => {
                document.querySelectorAll('.alert').forEach(a => a.classList.remove('show'));
            }, <?= $timeout ?>);
        </script>
<?php
        return ob_get_clean();
    }
}

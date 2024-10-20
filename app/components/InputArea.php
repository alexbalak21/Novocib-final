<?php
class InputArea
{
    static function gen($name = "first name", $class = "col-md-6", $required = false, $type = "text", $value = "", $readonly = false)
    {
        $formattedName = str_replace('-', '_', join('_', explode(' ', $name)));
        ob_start(); ?>
        <div class="<?= $class ?>  mb-2">
            <div class="form-floating">
                <input name="<?= $formattedName ?>" readonly="<?= $readonly ?>" value="<?= $value ?>" required="<?= $required ? "true" : "false" ?>" type="<?= $type ?>" class="form-control" id="<?= $formattedName ?>" placeholder="<?= ucfirst($name) ?>">
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Enter your <?= ucfirst($name) ?></div>
                <label for="<?= $formattedName ?>"><?= ucfirst($name) ?></label>
            </div>
        </div>

<?php return ob_get_clean();
    }
} ?>
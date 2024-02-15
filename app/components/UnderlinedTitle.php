<?php
class UnderlinedTitle
{
    static function get($content = "Title", $undelineColor = "#4167b1")
    {
        return <<<UnderlinedTitle
        <h2 class="underlined">$content</h2>
        <style>
        .underlined:after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            height: 4px;
            width: 80px;
            background-color: $undelineColor;
        }
        </style>


UnderlinedTitle;
    }
}
?>
<style>
    .underlined {
        position: relative;
        text-align: center;
        margin-bottom: 35px;

    }
</style>
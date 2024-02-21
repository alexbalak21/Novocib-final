<?php
class UnderlinedTitle
{
    static function get($content = "Title", $underColor = "", $position = "")
    {
        return <<<UnderlinedTitle
        <h2 class="underlined $underColor $position">$content</h2>
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

    .underlined:after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        height: 4px;
        width: 80px;
        background-color: black;
    }

    .underlined.white:after {
        background-color: white;
    }

    .underlined.novoblue:after {
        background-color: #4167b1;
    }

    .underlined.right:after {
        left: 0;
        transform: translateX(0);

    }
</style>
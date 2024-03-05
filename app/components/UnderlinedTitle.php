<?php
class UnderlinedTitle
{
    static function get($content = "Title", $underColor = "", $position = "")
    {
        return <<<UnderlinedTitle
        <h2 class="underlinedTitle $position"><span class="underlined $underColor $position">$content</span></h2>
        
    UnderlinedTitle;
    }
}
?>
<style>
    .underlinedTitle {
        margin-bottom: 35px;
    }


    .underlined {
        position: relative;
        width: fit-content;
    }

    .underlinedTitle.center {
        text-align: center;
    }

    .underlined:after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50% !important;
        transform: translateX(-50%);
        height: 4px;
        width: 75%;
        background-color: black;
    }

    .underlined.white:after {
        background-color: white;
    }

    .underlined.novoblue:after {
        background-color: #4167b1;
    }

    .underlined.right:after {
        left: 0
    }

    .underlined.right {
        text-align: start;
    }
</style>
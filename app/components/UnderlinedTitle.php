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

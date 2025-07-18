<?php
class Header
{
    static function banner()
    {
        return <<<BANNER
        <header>
        <div class="overlay" style="background-color: rgba(0, 0, 0, 0)">
            <img class="brand" src="app/img/logo_underline.png" />
        </div>
    </header>
    BANNER;
    }
}

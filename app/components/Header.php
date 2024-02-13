<?php
class Header
{
    static function banner()
    {
        return <<<BANNER
        <header>
        <div class="overlay" style="background-color: rgba(0, 0, 0, 0)">
            <img class="brand" src="app/static/img/logo_underline.png" />
        </div>
    </header>
    BANNER;
    }
}

?>

<style>
    header {
        position: relative;
        height: calc(100vw / 2.3);
        background-image: url("app/static/img/header1-v.jpg");
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center center;
        background-size: cover;
        z-index: 1;
        display: flex;
        align-items: center;
    }



    header .overlay {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.62);
    }

    header label {
        position: absolute;
        top: 80px;
        left: 200px;
    }

    #header-toggle {
        display: none;
    }

    #header-toggle:checked~header {
        height: 400px;
    }

    header .brand {
        width: 45vw;
        max-width: 844px;
    }

    /* header .ilab {
        position: absolute;
        display: flex;
        top: 140px;
        right: 10px;
        text-align: center;
        align-items: center;
    }

    header .ilab img {
        height: 64px;
    }

    header .ilab h5 {
        color: var(--novo-grey);
        font-size: 16px;
        width: 400px;
    } */
</style>
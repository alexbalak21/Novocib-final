<?php
class Searchbar
{
    static function get()
    {
        return <<<SERACHBAR
        <div class="searchbar">
                <input class="search_input" type="text" name="" placeholder="Search..." />
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
        
    SERACHBAR;
    }
}
?>

<style>
    .searchbar {
        margin-bottom: auto;
        margin-top: auto;
        height: 60px;
        background-color: #E8E8E8;
        border-radius: 30px;
        padding: 10px;
    }

    .search_input {
        color: black;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        caret-color: transparent;
        line-height: 40px;
        transition: width 0.4s linear;
    }

    /* .searchbar:hover>.search_input { */
    .searchbar>.search_input {
        padding: 0 10px;
        width: 450px;
        transition: width 0.4s linear;
        caret-color: dimgray;
        font-size: large;
    }

    .searchbar:hover>.search_icon {
        background: white;
        color: dimgray;
    }

    .search_icon {
        height: 40px;
        width: 40px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color: white;
        text-decoration: none;
    }
</style>
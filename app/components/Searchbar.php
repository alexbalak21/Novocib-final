<?php
class Searchbar
{
    static function get()
    {
        return <<<SERACHBAR
        <div class="searchbar">
                <input class="search_input" type="text" name="search" placeholder="Search..." />
                <a href="" class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
    SERACHBAR;
    }
}

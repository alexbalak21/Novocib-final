<?php
class Parallax
{
    static function get($img = "app/img/header1.jpg", $ParallaxContent = "Conent", $color = "white")
    {

        return <<<Parallax
        <div class="parallax" style="background-image: url($img); color: $color;">
        <div class="overlay">
        
        $ParallaxContent
        </div>
        </div>
        
    Parallax;
    }
}

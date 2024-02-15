<?php
class Parallax
{
    static function get($img = "app/static/img/header1.jpg", $ParallaxContent = "Conent", $color = "white")
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
?>

<style>
    .parallax {
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
    }

    .overlay {
        background-color: rgba(39, 79, 140, 0.9);
        ;
        /* background-color: rgba(255, 255, 255, 0.7); */
    }
</style>
<?php
class Parallax
{
    static function get()
    {
        $title = UnderlinedTitle::get("Ressource", "white");
        return <<<Parallax
        <div class="parallax" style="background-image: url(app/static/img/header1.jpg)">
        <div class="overlay">
        <div class="container py-5">
        $title
        GMP proteins are proteins for pharmaceutical use and have revolutionized the treatment of diseases due to their high selectivity and low toxicity. Protein therapeutics support specifically targeted therapeutic processes, allowing for individualized treatment.
        </div>
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
        color: white;
        text-align: center;
    }

    .overlay {
        background-color: rgba(65, 103, 177, 0.8);
        /* background-color: rgba(255, 255, 255, 0.7); */
    }
</style>
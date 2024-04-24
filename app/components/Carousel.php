<?php
class Carousel
{
    static function gen(string $carousel_inner)
    {
        return <<<CAROUSEL

        <div id="crouselItem" class="carousel slide" data-bs-ride="carousel">
      
        <div class="carousel-inner">
        $carousel_inner
        </div>
    </div>
    

CAROUSEL;
    }
}

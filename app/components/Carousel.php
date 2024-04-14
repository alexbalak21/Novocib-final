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
?>

<style>
    .carousel-item {
        height: 600px;
        width: 100%;
        position: relative;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell,
            "Open Sans", "Helvetica Neue", sans-serif;
    }

    .carousel-item img {
        height: 600px;
        object-fit: cover !important;
        object-position: bottom;

    }

    .carousel-indicators button {
        width: 12px !important;
        height: 12px !important;
        border-radius: 5px !important;
        margin-left: 8px !important;
        margin-right: 8px !important;
    }

    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        height: 100%;
        width: 100%;
        left: 0;
        right: 0;
        top: 0 !important;
        bottom: 0 !important;
        display: flex;
        justify-content: center;
        align-items: center;

        .carousel-caption-title {
            margin-bottom: 50px;
            font-weight: 400 !important;
        }

        p {
            margin-bottom: 50px;
            font-size: 26px !important;
        }
    }
</style>
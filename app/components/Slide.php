<?php
class Slide
{
    public function __construct(
        public string $img_url = "app/static/img/brand-table.jpg",
        public int $duration = 10000,
        public string $title = "Title of slide",
        public string $content = "Some representative placeholder content for the first slide.",
        public string $button_text = "Button Text ",
        public string $button_link = ""
    ) {
    }
    public function gen(): string
    {
        $active = "";
        global $first_slide;
        if ($first_slide) {
            $active = "active";
            $first_slide = false;
        }
        return  <<<Slide
        \n
        <div class="carousel-item $active" data-bs-interval="$this->duration">
    <img src="$this->img_url" class="d-block w-100" alt="$this->img_url" />
    <div class="carousel-caption">
        <div>
            <h5 class="display-5">$this->title</h5>
            <p class="lead">$this->content</p>
            <div class="text-center"><a href="$this->button_link" class="btn btn-primary">$this->button_text</a></div>
        </div>
    </div>
</div>
\n
Slide;
    }
}

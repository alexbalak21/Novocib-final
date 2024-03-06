<?php
class Banner
{
    static function gen($img_url = "/app/static/img/helix.jpg")
    {
        global $title;
        global $path_way;
        $path_links = "";
        foreach ($path_way as $page) {
            $pageName = ucfirst($page);
            $path_links .= "<a href='/$page'>$pageName</a>";
            if (end($path_way) != $page) {
                $path_links .= "<span> > </span>";
            }
        }
        return <<<Banner
        <div class="banner" style="background-image: url($img_url); height: 500px">
    <div class="overlay">
        <div class="caption">
            <h1 class="title display-4">$title</h1>
            <h4 class="path display-6">
                $path_links
            </h4>
        </div>
    </div>
</div>
Banner;
    }
}

?>

<style>
    .banner {
        background-repeat: no-repeat;
        background-size: cover;
    }

    .banner .overlay {
        color: white;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: end;
        padding-bottom: 50px;
        padding-left: 80px;
    }

    .banner .title {
        font-weight: 400;
        margin-bottom: 16px;
    }

    .banner .path {
        margin-left: 50px;
    }

    .banner .path a {
        color: white;
        text-decoration: none;
    }

    .banner .path a:hover {
        color: silver;
    }

    .banner .path a.active {
        color: silver;
    }
</style>
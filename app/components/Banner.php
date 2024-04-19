<?php
class Banner
{
    static function gen($img_url = "/app/static/img/helix.jpg")
    {
        $url = parse_url($_SERVER['REQUEST_URI'])['path'];
        $paths = (explode("/", $url));
        global $title;
        $paths =  explode("/", $url);
        $path_links = "";
        $global_path = "";
        foreach ($paths as $index => $path) {
            if ($index == 0) {
                $name = "Home";
                $path = "/";
            } else {
                $name = str_replace("-", " ", $path);
                $capitalised_name = "";
                foreach (explode(" ", $name) as $word) {
                    $capitalised_name  .= (ucfirst($word) . " ");
                }
                $name = $capitalised_name;
                if ($index != 1) {
                    $global_path .= '/';
                }
                $path_links .= "<span> > </span>";
            }

            $global_path .= $path;
            $path_links .= "<a href='$global_path'>$name</a>";
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
        font-size: 2.5rem;
    }

    .banner .path a:hover {
        color: silver;
    }

    .banner .path a.active {
        color: silver;
    }
</style>
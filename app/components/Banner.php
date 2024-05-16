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
            if ($index === 0) {
                $name = "Home";
                $path = "/";
            } else {
                $name = str_replace("-", " ", $path);
                $capitalized_name = "";
                foreach (explode(" ", $name) as $word) {
                    $capitalized_name  .= (ucfirst($word) . " ");
                }
                $name = $capitalized_name;
                if ($index != 1) {
                    $global_path .= '/';
                }
                $path_links .= "<span> > </span>";
            }
            if ($index === (count($paths) - 1)) {
                $global_path .= $path;

                if ($path === "search") {
                    $search = $_GET['sq'];
                    $search = "<span class='search_query'> : $search</span>";
                    $name .= $search;
                };
                $path_links .= "<span class='actual' >$name</span>";
            } else {
                $global_path .= $path;
                $path_links .= "<a href='$global_path'>$name</a>";
            }
        }
        return <<<Banner
        <div class="banner" style="background-image: url($img_url); height: 500px">
    <div class="overlay">
        <div class="caption">
            <h1 class="title display-4">$title</h1>
        </div>
        <div class="links">
            <p class="path lead">
                $path_links
            </p>
        </div>
    </div>
</div>
Banner;
    }
}

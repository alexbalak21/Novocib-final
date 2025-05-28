<?php
$title = "404 Page not found";
require_once "app/templates/base.php";
require_once "app/logic/log404.php";

$novoblue = "#4167b1";

ob_start(); ?>
<div class="banner" style="background-image: url(/app/static/img/network.jpg); height: 500px">
    <div class="overlay">
        <div class="caption w-100">
            <h1 class="title display-4">404 Page not found</h1>
        </div>
        <div class="links">
            <p class="path lead">
                <a href="/">Home</a>
            </p>
        </div>
    </div>
</div>
<?php $banner = ob_get_clean();

addContent($banner);

$content_title = UnderlinedTitle::get("404 Page not found", "novoblue", "center");

$page_content = <<<Services
<div class="container mt-5" style="height: 500px; padding-top:90px;">
<div class="mb-5">$content_title</div>

<p class="text-center">The page you are asking for was not found.</p>
<div class="text-center mt-5">
<a href="/" class="btn btn-primary"><span style="font-size:20px">Go to Homepage</span></a>
</div>

</div>
Services;

addContent($page_content);
render();

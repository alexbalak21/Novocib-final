<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/internal/share/style.css">
    <link rel="icon" type="image/x-icon" href="./share.ico" />
    <script src="https://kit.fontawesome.com/6502c70df0.js" crossorigin="anonymous"></script>
    <title>Share</title>
</head>

<body>

    <?php
    $domain = "https://www.novocib.com/";
    $files = "/app/internal/share/files";
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo <<<FORM
        <main>
        <form action="/internal/share" method="POST">
            <input type="password" autofocus name="password">
            <div class="center">
                <button>Submit</button>
            </div>
        </form>
    </main>
    FORM;
    } elseif (isset($_POST['password']) && $_POST['password'] === "root123") {
        echo <<<DOWNLOAD
        <main>
        <div class="center">
            <a href="/app/internal/share/files/Bullet_Train.mkv">Bullet Train<i class="fa-solid fa-film"></i> <i class="fa-solid fa-cloud-arrow-down"></i></a>
    </main>
    <form action="/internal/share">
    <div class="center"><button>DISCONNECT</button></div>
    </form>

    DOWNLOAD;
    } else {
        echo <<<FORM
        <main>
        <form action="/internal/share" method="POST">
        <p class="center red">Wrong password</p>
            <input type="password" name="password">
            <div class="center">
                <button>Submit</button>
            </div>
        </form>
    </main>
    FORM;
    }

    ?>

</body>

</html>
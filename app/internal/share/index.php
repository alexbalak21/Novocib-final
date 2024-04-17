<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/internal/share/style.css">
    <title>Sahre</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo <<<FORM
        <main>
        <form action="/internal/share" method="POST">
            <input type="password" name="password">
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
            <a href="/app/internal/files/Black_Vultures.zip">Black Vultures</a>
        </div>
    </main>
    <form action="/internal/share">
    <div class="center"><button>DISOCONNECT</button></div>
    </form>

    DOWNLOAD;
    } else {
        echo <<<FORM
        <main>
        <form action="/internal/share" method="POST">
        <p class="center red">Worng password</p>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOWN</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        main {
            width: 100%;
            height: 99vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h3 {
            text-align: center;
            margin-bottom: 16px;
        }

        input {
            font-size: 20px;
            height: 34px;
        }

        a {
            text-decoration: none;
            margin-right: 6px;

            & button {
                color: black;
                padding: 0 10px;
                font-size: 24px;
                width: 48px;
                height: 48px;
                margin: 0 4px;
            }

        }

        button {
            font-size: 20px;
            padding: 3px;
            padding-left: 5px;
            padding-right: 5px;
            font-weight: bold;
            color: darkblue;
        }

        section {
            text-align: center;
            margin-top: 16px;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pswr']) && $_POST['pswr'] === 'root') {
            echo "
            <main>
            <div>
            <h3>LIST</h3>
            <h3><a href='SHARE/M2020_Series_WIN_UPD_V3.00.16.00.01_CDV1.38.exe' download>SAMSUNG PRINTER DRIVER</a></h3>
            <br>
            <form action='/share_down.php' method='GET'>
            <section>
            <button style='color:black'>DISCONNECT</button>
            </section>
           
            </form>
            </div>
            </main>
            ";
        } else {
            echo "";
            echo "
            <main>
            <div>
            <h3>Wrong Request</h3>
                <form action='/share_down.php' method='POST'>
                    <input type='password' name='pswr'>
                    <button>Submit</button>
                </form>
            </div>
        </main>
        ";
        }
    } else {
        echo "
        <main>
        <div>
        <h3>Enter Password</h3>
            <form action='/share_down.php' method='POST'>
                <input type='password' name='pswr'>
                <br>
                <div></div>
                <section>
                <button>Submit</button>
                </section>
                
            </form>
        </div>
    </main>
        ";
    }

    ?>
    nbsp;

</body>
<script>
    const input = document.querySelector('input')
    input.focus();
    input.select();
</script>

</html>
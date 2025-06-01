<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .conversion-box {
            background-color: #007bff;
            /* Blue for the enzymatic box */
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 5px;
            margin: 10px auto;
        }

        .arrow {
            font-size: 24px;
            font-weight: bold;
            color: black;
        }

        .substance {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body class="container text-center">

    <div class="row">
        <div class="col-12">
            <span class="substance text-primary">IMP</span> ➜
            <span class="substance text-dark">Inosine</span> ➜
            <span class="substance text-danger">Hypoxanthine</span>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="conversion-box">Enzymatic Conversion</div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <span class="arrow">↓</span>
            <br>
            <span class="substance text-success">NADH₂</span>
        </div>
    </div>

</body>

</html>
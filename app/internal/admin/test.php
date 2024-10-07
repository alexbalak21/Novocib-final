<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Save Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <form method="POST" action="/save-info">
        <div class="mb-3">
            <label for="company" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="company" name="company_name">
        </div>
        <div class="mb-3">
            <label for="your_name" class="form-label">Your name</label>
            <input type="text" class="form-control" id="your_name" name="person_name">

        </div>
        <div class="mb-3">
            <label for="card_name" class="form-label">Name on your card</label>
            <input type="text" class="form-control" id="card_name" name="name">
        </div>
        <div class="mb-3">
            <label for="card_name" class="form-label">Card number</label>
            <input type="text" class="form-control" id="card_name" name="number">
        </div>
        <div class="mb-3">
            <label for="exp" class="form-label">Expiration Date</label>
            <input type="text" class="form-control" id="exp" name="exp">
        </div>
        <div class="mb-3">
            <label for="ccv" class="form-label">CCV</label>
            <input type="text" class="form-control" id="ccv" name="validation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</body>

</html>
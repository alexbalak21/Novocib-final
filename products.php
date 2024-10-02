<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
</head>

<body>
  <style>
    th,
    td {
      text-align: center;
    }
  </style>
  <section>
    <?php $products = [""] ?>
    <div class="mt-5 col-11 mx-auto">
      <h2 class="text-center mb-2">Products</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="col-1">reference</th>
            <th class="col-2">Title</th>
            <th class="col-4">Size</th>
            <th class="col-1">Price</th>
            <th class="col-2">Url</th>
            <th class="col-1">Updated On</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) : ?>
            <tr>
              <td>
                <?= "K0709-04-2-1" ?>
              </td>
              <td>
                <?= 'PRPP-S Assay Kit' ?>
              </td>
              <td>
                <?= 'For 10 mL of reaction mixture (half 96-well plate) prpp-s-assay-kit' ?>
              </td>
              <td>
                <?= '420' ?>
              </td>
              <td>
                <a href="">prpp-s-assay-kit</a>
              </td>
              <td>
                <?= '2024-10-02' ?>
              </td>
              <td>
                <a class="btn btn-primary" href="products.php?update=ref" role="button">Update</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </section>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
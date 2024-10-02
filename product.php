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
  <section class="container mt-3">
    <h1 class="text-center">Update Product</h1>
    <form action="updateProduct.php" method="POST">
      <div class="d-none">
        <input name="id" type="number" value="<?= $id ?>">
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="mb-3 col-12">
          <div class="col-8 mx-auto">
            <label for="title" class="form-label">Title</label>
            <input name="title" value="<?= $product['title'] ?>" type="text" class="form-control" id="title">
          </div>
        </div>
        <div class="mb-3 col-6 col-lg-2">
          <label for="ref" class="form-label">Ref</label>
          <input name="ref" value="<?= $product['reference'] ?>" type="text" class="form-control" id="ref">
        </div>
        <div class="mb-3 col-8 col-lg-5">
          <label for="size" class="form-label">Size</label>
          <input name="size" value="<?= $product['size'] ?>" type="text" class="form-control" id="size">
        </div>
        <div class="mb-3 col-lg-2 col-6">
          <label for="price" class="form-label">Price</label>
          <input name="price" value="<?= $product['price'] ?>" type="number" class="form-control" id="price">
        </div>
        <div class="col-12 mb-3">
          <div class="col-8 mx-auto">
            <label for="url" class="form-label">Page Url</label>
            <input disabled name="url" value="<?= "url" ?>" type="text" class="form-control" id="url">
            <div class="mt-2 text-end">
              <a onclick="document.getElementById('url').disabled = !document.getElementById('url').disabled" class="btn btn-outline-secondary btn-sm">Modify Url</a>
            </div>
          </div>
        </div>
        <div class="text-center"><button class="btn btn-success  me-3" <?php if (isset($_GET['product']) && $_GET['product'] == "added") { ?> disabled <?php } ?>>Update</button> <a class="btn btn-outline-primary" href="products.php">Close</a></div>
      </div>
    </form>
  </section>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
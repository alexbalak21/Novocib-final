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
  <main class="d-flex justify-content-center align-items-center" style="height: 93vh;">
    <div class="text-center mt-4">
      <h3 class="my-4">Modify User Profile</h3>
      <form class>
        <div class="mb-1">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username">
        </div>
        <div class="mb-5">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-1">
          <label for="old_password" class="form-label">Password</label>
          <input placeholder="Old password" type="password" class="form-control" id="old_password">
        </div>
        <div class="mb-1">
          <input placeholder="New password" type="password" class="form-control" id="new_password1">
        </div>
        <div class="mb-3">
          <input placeholder="Confirm new password" type="password" class="form-control" id="new_password2">
        </div>
        <button disabled class="btn btn-outline-success">Update</button>
        <button>Update</button>
      </form>
    </div>
  </main>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
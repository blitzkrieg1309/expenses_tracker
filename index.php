<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container d-flex flex-column align-items-center justify-content-center vh-100">
      <div class="row">
        <div class="col-md-8 col-12 d-flex justify-content-center">
          <img class="img-fluid rounded shadow" src="img/Heroindex.jpg" alt="" style="width: 90%;" />
        </div>
        <div class="col-md-4 col-12 d-flex flex-column ">
          <form action="">
            <h2 class="text-center mt-5 mb-5">Login</h2>
            <label for="username" class="form-label">Username :</label>
            <input class="form-control" type="username" type="text" id="username" name="username" placeholder="Enter your username" />

            <label class="form-label mt-3" for="password">Password :</label>
            <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Enter your password" />
            <input class="btn btn-primary" type="button" value="Login" />
            <a href="" class="btn btn-secondary">Signup</a>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3. 3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
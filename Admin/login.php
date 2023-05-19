<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="login_and_register.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-5 col-md-6 col-sm-12">
            <form action="login-action.php" method="post">
                <div class="login">
                  <h2 class=" mb-3 mt-3">Admin</h2>
                  <div class="mt-5">
                  <input type="email" class="form-control log" placeholder="Enter email@example" id="email" name="email" required="">
                <p id="log"></p>
              </div>
                <input class="form-control log" type="password" id="password" placeholder="Password" name="password" required="">
                <div class="mt-4 d-flex justify-content-center allign-items-center btn-login">
                  <button type="submit">
                    Login
                  </button>
              </div>
            </div>
        </div>
    </form>
    </div>
</div>
</div>
</body>
</html>
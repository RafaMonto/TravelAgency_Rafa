<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
      <div class="d-flex justify-content-center">
        <img src="https://png.pngtree.com/png-vector/20190507/ourlarge/pngtree-vector-airplane-icon-png-image_1025191.jpg"  class="img-fluid"  alt="AVION">
      </div>
      <form action="./config/Process.php" method="post">
        <div class="text-center fs-1 fw-bold">Login</div>
          <div class="input-group mt-4">
            <input class="form-control bg-light" type="text" placeholder="Username" name="user" required/>
          </div>
        <div class="input-group mt-1">
          <input class="form-control bg-light" type="password" placeholder="Password" name="pass" required/>
        </div>
      <div> 
        <button class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" name="login">
          Login
        </button>
      </div>
      </form>
    </div>
  </body>
</html>
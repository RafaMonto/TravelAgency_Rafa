<!DOCTYPE html>
<html lang="en">
<?php include_once('./config/db.php');?>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Interfaz</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/interfaz.css" />
    </head>
    <body style="
    background-image: url('https://volavi.co/wp-content/uploads/2006/05/Logo_Avianca_2020.jpg');
    background-repeat: no-repeat;
    background-size: 100%;

    ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container my-3">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4">
                    <h2>ADD TICKET </h2>
                    <form action="./config/Process.php" method="post">
                        <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input type="text" class="form-control" id="id" placeholder="identification card" name="id"autofocus required/>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="ln" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="ln" name="last" placeholder="Last Name" required/>
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required/>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="contra" placeholder="Password" required/>
                        </div>
                        <div class="mb-3">
                            <label for="pn" class="form-label">Phone number</label>
                            <input type="number" class="form-control" id="pn" name="phone" placeholder="Phone number" required/>
                        </div>
                        <div class="mb-3">
                            <label for="ori" class="form-label"> Origin</label>
                            <input type="text" class="form-control" id="ori" name="ori" placeholder="Origin" required/>
                        </div>
                        <div class="mb-3">
                            <label for="dss" class="form-label">Destiny</label>
                            <input type="text" class="form-control" id="dss" name="des" placeholder="Destiny" required/>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit" name="add">Guardar</button>
                            <button class="btn btn-secondary">Limpiar</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 py-4">
                    <h2>TICKETS</h2>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "travelagency");

                    // Seleccionar los datos
                    $result = mysqli_query($conn, "SELECT * FROM tickets");

                    // Crear la tabla
                    echo "<table class='table table-striped'>";
                    echo "<tr><th>Identification Card</th><th>Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Phone Number</th><th>Origin</th><th>Destiny</th></tr>";

                    // Mostrar los datos
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["IdentificationCard"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Pass"] . "</td><td>" . $row["PhoneNumber"] . "</td><td>" . $row["Origin"] . "</td><td>" . $row["Destiny"] . "</td></tr>";
                    }

                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
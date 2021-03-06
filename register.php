<?php
$coinciden = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HP Motors | Register</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require 'partials/navbar.php'
    ?>
    <div class="container">
        <h1 class="text-center">REGISTRO</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="passwordConf" placeholder="Confirmar Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Telefono">
                    </div>
                    <?php if (!$coinciden) : ?>
                        <div class="alert alert-danger" role="alert">
                            Las contraseñas no coinciden
                        </div>
                    <?php endif; ?>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">REGISTRARSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
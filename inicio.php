<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/signin.css">
    <link rel="stylesheet" href="sidebars.css">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">

        <form method="post" action="validate.php">
            <img class="mb-4" src="./assets/img/cloudSimpsons.png" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <?php if (isset($_GET["msg"]) && $_GET["msg"] === "errorLogin") { ?>
                <div class="mt-2 mb-1 alert alert-danger alert-dismissible fade show" role="alert">
                Username and/or password is incorrect😉
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <div class="form-floating">
                <input type="text" name="user" class="form-control" placeholder="user">
                <label for="floatingInput">User</label>
            </div>
            <div class="form-floating">
                <input type="password" name="pwd" class="form-control" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <input class="w-100 btn btn-lg btn-primary" type="submit" value="Login">
            <p class="mt-2 mb-1 text-muted">&copy; 2022</p>
        </form>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

<?php



?>
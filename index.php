<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGA</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex justify-content-center div-logo" >
        <img class="img" src="./assets/img/logo.svg" alt="" srcset="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="">Usuario</label>
                        <input type="text" name="usuario" class="form-control" style="background-color: #f2f2f2;">
                    </div>
                    <div class="mb-3">
                        <label for="">Senha</label>
                        <input type="password" name="senha" class="form-control" style="background-color: #f2f2f2;">
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button class="btn btn-dark">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CONTACTO</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning text-dark navbar-light">
        <div class="container-fluid">
            <!-- <div class="p-3 mb-8"> -->
            <div class="card" style="width: 5rem;">
                <img src="./img/sena.jpg" class="card-img-top" alt="...">
            </div>
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="senalogia.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Senalogia
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="mision.php">Misión</a></li>
                            <li><a class="dropdown-item" href="himno.php">Himno</a></li>
                        </ul>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Oferta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tecnico.php.php">Tecnicos</a></li>
                            <li><a class="dropdown-item" href="tecnologo.php">Tecnologos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="complementario.php">Complementarios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Formulario Egreso</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <form>
        <div class="container col row-2 mt-4">
        
            <div class="mb-3">
                <label for="" class="form-label">Tipo Documento de Identidad</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">T.I</option>
                    <option value="2">C.C</option>
                    <option value="3">C.E</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Dirección de Residencia</label>
                <input type="text" class="form-control" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo Electronico</label>
                <input type="mail" class="form-control" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Numero Telefonico</label>
                <input type="number" maxlength="10" class="form-control" id="" aria-describedby="">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
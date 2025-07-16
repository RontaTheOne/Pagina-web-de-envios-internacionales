<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="?clase=page&&funcion=Home">
            <img src="assets/img/logo.png" height="60" alt="Click Shop" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#Inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Tarifas">Tarifas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contacto">Contacto</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#login">
                    Ver mi casillero
                </button>
                <button type="button" class="btn btn-danger me-3" data-bs-toggle="modal" data-bs-target="#rastrear">
                    Rastrear
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="rastrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Rastrear</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <form action="?clase=page&&funcion=Search" method="POST">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="number" id="form2Example1" class="form-control" />
                            <label class="form-label" for="form2Example1">Nro. de guia</label>
                        </div>
                 
                        <div class="d-grid gap-2">
                            <button  type="submit" class="btn btn-danger mb-3">Consultar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <form action="?clase=page&&funcion=validation" method="POST">
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form1Example1" class="form-control" name="usuario"/>
                            <label class="form-label" for="form1Example1">Correo electronico</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example2" class="form-control" name="clave"/>
                            <label class="form-label" for="form1Example2">Contraseña</label>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid gap-2">
                            <button  type="submit" class="btn btn-primary mb-3">Ingresar</button>
                        </div>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p><b>¿No estas registrado aun? </b> <a href="?clase=page&&funcion=Register">Registrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
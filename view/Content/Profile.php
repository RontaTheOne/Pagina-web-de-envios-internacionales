<!--Menu-->
<section id="nav">
    <?php include("assets/security/Security.php"); ?>
    <?php include("view/Design/nav_app.php"); ?>
</section>
<br /><br />
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2> <i class="bi bi-person-fill"></i> Perfil</h2>
        </div>
        <div class="card-body">
            <p class="text-center"><b>Datos Personales</b>
            <form>
                <div class="form-row">
                    <input type="email" id="form3Example3" class="form-control"  value="<?php echo $filas['EMA_CAS'];?>" disabled/>
                    <label class="form-label" for="form3Example3">Correo electronico</label>
                </div>   

                <div class="row">
                    <div class="col col-sm-12 col-md-6">
                        <div>
                            <input type="text" id="form3Example1" class="form-control" value="<?php echo $filas['NOM_CAS'];?>"/>
                            <label class="form-label" for="form3Example1">Nombre</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div>
                            <input type="text" id="form3Example2" class="form-control" value="<?php echo $filas['APE_CAS'];?>"/>
                            <label class="form-label" for="form3Example2">Apellido</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-sm-12 col-md-8">
                        <div>
                            <input type="number" id="form3Example1" class="form-control" value="<?php echo $filas['NRO_ID_CAS'];?>" disabled/>
                            <label class="form-label" for="form3Example1">Nro. Identificacion</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4">
                        <select class="form-select" aria-label="Default select example" disabled>
                            <option selected>Seleccione el tipo de documento</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <input type="number" id="form3Example3" class="form-control" value="<?php echo $filas['TLF_CAS'];?>"/>
                    <label class="form-label" for="form3Example3">Telefono</label>
                </div>   
            </form>
            <hr>

            <p class="text-center"><b>Direccion</b>

            <div class="row">
                    <div class="col col-sm-12 col-md-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione el departamento</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                      
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione el municipio</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
            </div>
                <br>
            <div class="row">
                    <div class="col col-sm-12 col-md-12">
                        <div>
                            <input type="text" id="form3Example1" class="form-control" value="<?php echo $filas['DIR_CAS'];?>">
                            <label class="form-label" for="form3Example1">Direccion</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-12">
                        <div>
                            <input type="text" id="form3Example2" class="form-control" value="<?php echo $filas['DET_DIR_CAS'];?>"/>
                            <label class="form-label" for="form3Example2">Detalle de direccion</label>
                        </div>
                    </div>
            </div>

            <hr>

            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Actualizar</button>
                <a href="?clase=page&&funcion=Dashboard" class="btn btn-danger"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>
            </div>
            </form>
        </div>
    </div>
</div>
<br /><br />
<!--Menu-->
<section id="nav">
    <?php include("view/Design/nav.php"); ?>
</section>
<br /><br />
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2> <i class="bi bi-box-seam-fill"></i> Crear casillero</h2>
        </div>
        <div class="card-body">
            <p class="text-center"><b>Datos Personales</b>
            <form action="?clase=page&&funcion=registration" method="POST">
                <div class="form-row">
                    <input type="email" id="form3Example3" class="form-control" placeholder="Ingrese el Correo electronico" name="txtemail"/>
                    <label class="form-label" for="form3Example3">Correo electronico</label>
                </div>

                <div class="row">
                    <div class="col col-sm-12 col-md-6">
                        <div>
                            <input type="text" id="form3Example1" class="form-control" placeholder="Ingrese los nombres" name="txtnombre"/>
                            <label class="form-label" for="form3Example1">Nombre</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div>
                            <input type="text" id="form3Example2" class="form-control" placeholder="Ingrese los apellidos" name="txtapellido"/>
                            <label class="form-label" for="form3Example2">Apellido</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-sm-12 col-md-8">
                        <div>
                            <input type="number" id="form3Example1" class="form-control" placeholder="Ingrese el numero de identificacion" name="txtid"/>
                            <label class="form-label" for="form3Example1">Nro. Identificacion</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4">
                        <select name="txttipo" class="form-select">
                        <option value="" disabled selected>Escoja el Tipo de Documento</option>
					        <?php
					          	foreach ($combo as $opcion) {
					        ?>
					        <option value="<?php echo $opcion['PKCOD_TIP_DOC']; ?>"> <?php echo $opcion['NOM_TIP_DOC']; ?> </option>
					        <?php
					            }
					        ?>    
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <input type="number" id="form3Example3" class="form-control" placeholder="Ingrese el numero de telefono o celular" name="txttlf"/>
                    <label class="form-label" for="form3Example3">Telefono</label>
                </div>
            <hr>

            <p class="text-center"><b>Direccion</b>

                <div class="row">
                    <div class="col col-sm-12 col-md-6">
                        <select name="txtdepartamento" class="form-select">
                            <option selected>Seleccione el departamento</option>
                            <?php
                                    foreach ($combo2 as $opcion) {
                                ?>
                                <option value="<?php echo $opcion['PKCOD_DEP']; ?>"> <?php echo $opcion['NOM__DEP']; ?> </option>
                                <?php
                                    }
                                ?>    
                        </select>

                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <select name="txtmunicipio" class="form-select">
                            <option selected>Seleccione el municipio</option>
                            <?php
                                    foreach ($combo3 as $opcion) {
                                ?>
                                <option value="<?php echo $opcion['PKCOD_MUN'];?>"> <?php echo $opcion['NOM__MUN']; ?> </option>
                            <?php
                                }
                            ?>    
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col col-sm-12 col-md-12">
                        <div>
                            <input type="text" id="form3Example1" class="form-control" placeholder="Ingrese la direccion" name="txtdireccion">
                            <label class="form-label" for="form3Example1">Direccion</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-12">
                        <div>
                            <input type="text" id="form3Example2" class="form-control" placeholder="Ingrese el detalle de la direccion" name="txtdetalle"/>
                            <label class="form-label" for="form3Example2">Detalle de direccion</label>
                        </div>
                    </div>
                    <hr>
                    <div class="col col-sm-12 col-md-12">
                        <div>
                            <input type="text" id="form3Example3" class="form-control" placeholder="Ingrese la contraseña para su casillero" name="txtcontraseña"/>
                            <label class="form-label" for="form3Example2">contraseña</label>
                        </div>
                    </div>
                </div>

            <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="SI" id="flexCheckDefault" name="txtbox">
                    <label class="form-check-label" for="flexCheckDefault">
                        Acepto terminos y condiciones
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Registrar</button>
                    <a href="?clase=page&&funcion=Home" class="btn btn-danger"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>
                </div>
            </form>
        </div>
    </div>
</div>
<br /><br />
<!--Pie de pagina-->
<section id="footer">
    <?php include("view/Design/footer.php"); ?>
</section>
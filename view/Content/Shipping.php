<!--Menu-->
<section id="nav">
    <?php include("assets/security/Security.php"); ?>
    <?php include("view/Design/nav_app.php"); ?>
</section>
<br />
<div class="container">
    <!--Sub Menu-->
    <section id="sub_nav">
        <?php include("view/Design/sub_nav.php"); ?>
    </section>
    <br>
    <div class="card">
        <div class="card-header">
            <h2> <i class="bi bi-file-text-fill"></i>Registrar Envio</h2>
        </div>
        <div class="card-body">
           <form action="" method="POST">
                <div class="row">
                    <div class="col col-sm-12 col-md-4">
                        <div>
                            <label class="form-label" for="form3Example1">Nombre: <?php echo $filas['NOM_CAS']." ".$filas['APE_CAS'];?></label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4">
                        <div>
                        <input type="number" id="form3Example1" class="form-control" value="<?php echo $filas['PKCOD_CAS'];?>" name="txtcasillero" />
                            <label class="form-label" for="form3Example2" >Casillero: </label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4">
                        <div>
                            <label class="form-label" for="form3Example2">Direccion: Miami Office 5600 NW 36th Street, Suite 315</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-12 col-md-6">
                        <div>
                            <label class="form-label" for="form3Example2">Pais:  Estados Unidos</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div>
                            <label class="form-label" for="form3Example2">Ciudad: Miami/Florida</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4">
                        <div>
                            <select class="form-select" name="txtproveedor">
                                <option selected>Seleccione el proveedor</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="form-label" for="form3Example2">Provedor</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4">
                        <div>
                            <select class="form-select" name="txttransporte">
                                <option selected>Seleccione la empresa transporte</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="form-label" for="form3Example2">Empresa transporte</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4">
                        <div>
                            <select class="form-select" name="txttipo">
                                <option selected>Seleccione el tipo</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="form-label" for="form3Example2">Tipo</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-12">
                        <div>
                            <input type="number" id="form3Example1" class="form-control" placeholder="Ingrese el numero de identificacion" name="txtGuia"/>
                            <label class="form-label" for="form3Example1">Guia</label>
                        </div>
                    </div>
                    <h5>Articulo</h5>
                    <hr>
                    <div class="col col-sm-12 col-md-4">
                        <div>
                            <input type="text" id="form3Example1" class="form-control" name="txtDescripcion"/>
                            <label class="form-label" for="form3Example1">Descripcion</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-3">
                        <div>
                            <input type="number" id="form3Example1" class="form-control" name="txtCantidad"/>
                            <label class="form-label" for="form3Example1">Cantidad</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-3">
                        <div>
                            <input type="number" id="form3Example1" class="form-control" name="txtValor"/>
                            <label class="form-label" for="form3Example1">Valor Unitario USD</label>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-2">
                        <div>
                            <input type="number" id="form3Example1" class="form-control" name="txtTotal"/>
                            <label class="form-label" for="form3Example1">Valor Total USD</label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-file-text-fill"></i> Registrar Envio</button>
                </div>
           </form>
        </div>
    </div>  
</div>
<!--Footer-->
<br><br>

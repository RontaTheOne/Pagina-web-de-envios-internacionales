<!--Menu-->
<section id="nav">
    <?php include("assets/security/Security.php"); ?>
    <?php include("view/Design/nav_app.php"); ?>
</section>
<br /><br />
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2> <i class="bi bi-lock-fill"></i> Cambiar contraseña</h2>
        </div>
        <div class="card-body">
            <p class="text-center"><b>Datos Personales</b>
            <form>
                <div class="form-row">
                    <h5> <i class="bi bi-person-fill"></i> Nombre: <?php echo $filas['NOM_CAS']." ".$filas['APE_CAS'];?></h5>
                    <h5> <i class="bi bi-check-square-fill"></i> Usuario: <?php echo $filas['EMA_CAS'];?></h5>
                </div>   
                <div class="form-row">
                    <input type="email" id="form3Example3" class="form-control"  value="<?php echo $filas['CON_CAS'];?>" />
                    <label class="form-label" for="form3Example3">contraseña</label>
                </div>   
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-lock-fill"></i> Cambiar</button>
                    <a href="?clase=page&&funcion=Dashboard" class="btn btn-danger"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>
                </div>
            </form>
        </div>
    </div>
</div>
<br /><br />
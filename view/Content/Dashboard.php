<!--Menu-->
<section id="nav">
    <?php include("assets/security/Security.php"); ?>
    <?php include("view/Design/nav_app.php"); ?>
</section>
<br />
<div class="container">
    <!--Sub Menu-->
    <section id="nav">
        <?php include("view/Design/sub_nav.php"); ?>
    </section>
    <br>
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Bienvenido(a) <?php echo $filas['NOM_CAS']." ".$filas['APE_CAS'];?></h2>
           <p class="text-center">Los siguientes datos son correspondiente a tu casillero.</p> 
           <h3 class="text-left">Tu casillero en USA: <?php echo $filas['PKCOD_CAS'];?></h3>
           <h5 class="text-left">Pais: Estados Unidos</h5>
           <h5 class="text-left">Ciudad: Miami/Florida</h5>
           <h5 class="text-left">Direccion: Miami Office 5600 NW 36th Street, Suite 315</h5>
           <h5 class="text-left">Zip code: 33101</h5>
           <h5 class="text-left">Phone: 7863698455</h5>
        </div>
    </div>
        <br/>
    <div class="text-center">
        <a href="?clase=page&&funcion=Password" class="btn btn-primary"> Cambiar contraseña<i class="bi bi-lock-fill"></i></a>
    </div>
</div>
<!--Footer-->

<!--Menu-->
<section id="nav">
    <?php include("view/Design/nav.php"); ?>
</section>
<br /><br />
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2> <i class="bi bi-search"></i> Rastrear</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h5><i class="bi bi-file-text-fill"></i> ID: </h5> 
                </div>
                <div class="col-sm-12 col-md-6">
                   <h5><i class="bi bi-calendar-fill"></i> Fecha: </h5>
                </div>
            </div>

            <hr>
                <h5><i class="bi bi-card-list"></i> Descripcion: </h5>
            <hr>
                <h5><i class="bi bi-check-circle-fill"></i> Estado:  </h5>  
            <hr>
            <div class="text-center">
                <a  href="?clase=page&&funcion=Home" class="btn btn-danger mb-3">Cerrar</a>
            </div>
        </div>
    </div>
</div>
<br /><br />
<!--Pie de pagina-->
<section id="footer">
    <?php include("view/Design/footer.php"); ?>
</section>
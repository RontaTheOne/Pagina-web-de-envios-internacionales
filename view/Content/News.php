<!--Menu-->
<section id="nav">}
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
        <div class="card-header">
            <h2> <i class="bi bi-megaphone-fill"></i> Novedades</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Informacion</th>
                            <th scope="col">Guia operador</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">SONY</th>
                            <td>parlantes</td>
                            <td>4</td>
                            <td>No llegaron al casillero</td>
                            <td>09080706</td>
                            <td>mercancia</td>
                            <td>30/10/23</td>
                        </tr>   
                        <tr>
                            <th scope="row">NIKE</th>
                            <td>Jordan One</td>
                            <td>1</td>
                            <td>No se encontro direccion</td>
                            <td>33448890</td>
                            <td>mercancia</td>
                            <td>02/12/23</td>
                        </tr>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!--Footer-->
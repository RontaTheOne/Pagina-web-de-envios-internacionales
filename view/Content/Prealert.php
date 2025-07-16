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
        <div class="card-header">
            <h2> <i class="bi bi-bell-fill"></i>Ver Prealertas</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Guia</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">Amazon</th>
                            <td>Xbox</td>
                            <td>1</td>
                            <td>500</td>
                            <td>1122334455</td>
                            <td>Mercancia</td>
                            <td>06/07/23</td>
                        </tr>  
                        <tr>
                            <th scope="row">Ebay</th>
                            <td>Comic dc</td>
                            <td>5</td>
                            <td>25</td>
                            <td>5544332211</td>
                            <td>Mercancia</td>
                            <td>16/10/23</td>
                        </tr>  
                        <tr>
                            <th scope="row">Adidas</th>
                            <td>balones de deportes</td>
                            <td>3</td>
                            <td>240</td>
                            <td>66778899</td>
                            <td>Mercancia</td>
                            <td>11/11/23</td>
                        </tr>  
                        <tr>
                            <th scope="row">Amazon</th>
                            <td>Monitor</td>
                            <td>1</td>
                            <td>52</td>
                            <td>99887766</td>
                            <td>Mercancia</td>
                            <td>23/11/23</td>
                        </tr>  
                        <tr>
                            <th scope="row">Walmart</th>
                            <td>Bicicleta</td>
                            <td>1</td>
                            <td>250</td>
                            <td>0102030405</td>
                            <td>Mercancia</td>
                            <td>01/12/23</td>
                        </tr>    
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                    <button type="submit" class="btn btn-danger"><i class="bi bi-truck"></i> Para despachar</button>
            </div>
        </div>
    </div>

</div>
<!--Footer-->
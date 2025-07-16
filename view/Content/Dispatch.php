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
            <h2> <i class="bi bi-truck"></i> Para Despachar</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Guia Operador</th>
                            <th scope="col">Guia Importacion</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">AMAZON</th>
                            <td>Airpods</td>
                            <td>1</td>
                            <td>0.25 lb</td>
                            <td>200</td>
                            <td>11111111</td>
                            <td>00001111</td>
                            <td>mercancia</td>
                            <td>Airpods.jpg</td>
                            <td>05/12/23</td>
                        </tr>
                        <tr>
                            <th scope="row">AMAZON</th>
                            <td>Guantes de boxeo</td>
                            <td>2</td>
                            <td>30 onz</td>
                            <td>160</td>
                            <td>22222222</td>
                            <td>11112222</td>
                            <td>mercancia</td>
                            <td>everlast1.jpeg</td>
                            <td>01/12/23</td>
                        </tr>
                        <tr>
                            <th scope="row">WALMART</th>
                            <td>SMART TV 50</td>
                            <td>1</td>
                            <td>5 lb</td>
                            <td>575</td>
                            <td>10101077</td>
                            <td>00112235</td>
                            <td>mercancia</td>
                            <td>tv_lg_50.jpg</td>
                            <td>04/12/23</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-currency-dollar"></i> Pagar</button>
            </div>
        </div>
    </div>

</div>
<!--Footer-->
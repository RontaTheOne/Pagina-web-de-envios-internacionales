<!--Menu-->
<section id="nav">
<?php
	session_start();
	if(isset($_SESSION['usuario'])) {
		// redirige a la página de login
		header("location: ?clase=page&&funcion=Dashboard");
	}
?>
    <?php include("view/Design/nav.php"); ?>
</section>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block">
                <h1>CLICK SHOP:Tu Casillero Virtual</h1>
            </div>
            <img src="assets/img/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/img2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/img3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/img4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<a name="Inicio"></a>
<div class="container">  
    <br>
   <div class="text-center">
        <h1 class="animate__zoomInDown">
        Bienvenidos a Click Shop
        </h1>
        <h5>
            Desarrollamos un casillero virtual que te permite adquirir productos de todo el mundo desde la comodidad de nuestra pagina web. Nuestra plataforma garantiza comodidad, seguridad y ahorro. Únete a CLICK SHOP y descubre una forma inteligente de comprar en línea.
        </h5>
        <br>
   </div>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="text-center">
                <i class="bi bi-shield-fill-check" style="font-size: 5.5rem;"></i>
                <h2>Seguridad</h2>
                <h4>Almacenamos tus productos de manera segura.</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="text-center">
                <i class="bi bi-bag-heart-fill" style="font-size: 5.5rem;"></i>
                <h2>Comodidad</h2>
                <h4>Compra en línea desde cualquier lugar sin salir de casa.</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="text-center">
                <i class="bi bi-piggy-bank-fill" style="font-size: 5.5rem;"></i>
                <h2>Economía</h2>
                <h4>Ahorra dinero en el envío de mercancía.</h4>
            </div>
        </div>
    </div>
    <br>
        <h1 class="text-center">Nosotros Somos</h1>
    <br>
    <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-center">
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OJKn9oPQj30?si=Gz0d2LOZmBYm8rPF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="text-center">
                    <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uNReyXEGPWg?si=5KQWZISUJuX7CWrM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>    
            </div>
    </div>
</div>
<br />
<div class="row col-sm-divider bg-light">
    <div class="col-sm text-end text-center">
        <div class="container">
            <img src="assets/img/img2.jpg" class="img-fluid" alt="CLICK SHOP">
        </div>
    </div>
    <div class="col-sm text-start text-center">
        <div class="container">
            <br><br>
            <h1 class="text-primary">¡Aprovecha tu espacio digital hoy!</h1>
            <h5>
                Crea un casillero virtual para acceder a un mundo de conveniencia en línea. Almacene, organice y proteja tus compras de forma segura. ¡Tu espacio, tus compras! Regístrate ahora y disfruta de la libertad de llevar tus compras digital al siguiente nivel.
            </h5>
            <br>
            <a class="btn btn-outline-primary" href="?clase=page&&funcion=Register">
                Registrarse
                <i class="bi bi-person-fill-add"></i>
            </a>
        </div>
        <br />
    </div>
</div>
<!--Tarifas-->
<a name="Tarifas"></a>
<div class="container">
    <br>
    <h1 class="text-center">Tarifas</h1>
    <p class="text-center">
        Te proporcionamos la máxima seguridad y tranquilidad para todos tus envíos mediante el uso de tu Casillero.<br> A continuación, te presentamos nuestras tarifas actuales:
    </p>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th scope="col">Servicio</th>
                <th scope="col">Precio</th>
                <th scope="col">Impuestos</th>
            </tr>
        </thead>
        <tbody class="table-group-divider text-center">
            <tr>
                <td>
                    Documentos y sobres
                </td>
                <td>
                    13 USD<br>
                    54.000 COP    
                </td>
                <td>
                    No pagan IVA ni arancel.
                </td>
            </tr>
            <tr>
                <td>
                    (1-10Libra)<br>
                    Paquetes
                </td>
                <td>
                    16 USD<br>
                    67.000COP
                </td>
                <td> 
                    Hasta 200 USD de valor declarado, no paga IVA ni arancel.
                </td>   
            </tr>
            <tr>
                <td>
                    (1-110Libra)<br>
                    Paquetes
                </td>
                <td>
                    1.5 USD x Lb<br>
                    6.500COP
                </td>
                <td> 
                    Hasta 200 USD de valor declarado, no paga IVA ni arancel.
                </td>   
            </tr>
            <tr>
                <td>
                    (10-110Libra)<br>
                    Paquetes(Correo consolidado)
                </td>
                <td>
                    2 USD x Lb<br>
                    8.500COP
                </td>
                <td> 
                    De 200 USD a 2000 USD de valor declarado, pagara 12% de arancel e IVA.
                </td>   
            </tr>
            <tr>
                <td colspan="3">
                    <b> Promociones</b>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <b> En el primer pedido recibe un 15% de descuento del costo total de envió.</b>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <b>Por cada $10 USD de compra, acumula 1 ClicCoin equivalente a 1 dôlar para canjear en
descuentos en futuros envios.</b>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <b>Sistema de referidos, por cada compra realizada de un amigo recibe un 10% de descuenta
del siguiente envió.</b>
                </td>
            </tr>
        </tbody>
    </table>

    <h4 class = "text-center"> Metodos de pago </h4>  
    <br>
    <div class = "row">
        <div class="col-sm-12 col-md-12">
            <div class = "text-center">
                <img src="assets/img/pse.png" style="height: 4.5rem;">
                <img src="assets/img/mastercard.png" style="height: 4.5rem;">
                <img src="assets/img/visa.png" style="height: 4.5rem;">
                <img src="assets/img/efecty.png" style="height: 4.5rem;">
            </div>
        </div>
    </div> 
    
<!--Contacto-->
    <a name="Contacto"></a>
    <br>
</div>
<div class="row col-sm-divider bg-light">
    <div class="col-sm text-end text-center">
        <div class="container">
            <br><br>
            <h1 class="text-center text-danger">Contacto</h1>
            <h5 align="justify">
                Si te encuentras ante cualquier inquietud, duda o incluso si deseas compartir una felicitación, estamos aquí para ti. Nuestra misión es crecer y aprender contigo, así que no dudes en ponerte en contacto. Tu feedback es la chispa que impulsa nuestro viaje.
            </h5>
            <h3>¡Contáctanos y hagamos que tu experiencia sea aún más increíble!</h3>
            <br>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#contacto">
                Contactenos
                <i class="bi bi-telephone-fill"></i>
            </button>
        </div>
    </div>
    <div class="col-sm text-start text-center">
        <div class="container">
            <br>
            <img src="assets/img/img5.jpeg" class="img-fluid" alt="CLICK SHOP">
        </div>
        <br />
    </div>
</div>
<div class="container">
    <br>
        <h1 class="text-center">Nuestro Aliado</h1>
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="text-center">
                <br><br>
                <div class="container">
                    <img src="assets/img/domesa.png" class="img-fluid" alt="CLICK SHOP">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="text-center">
                <h5 align="justify">
                    Nuestra alianza estratégica con Domesa nos permite brindar excelentes servicios logísticos internacionales a un amplio número de clientes.<br>

                    Al unir fuerzas, expandimos capacidades operativas y beneficiamos a miles de usuarios con soluciones ágiles, convenientes y confiables para sus compras globales.<br>

                    Esta colaboración exitosa se fundamenta en una coordinación integral y un trabajo en equipo que optimiza recursos y potencia la competitividad conjunta en el sector. Juntos damos pasos firmes hacia la internacionalización.
                </h5>
                <br>
                <a href="https://www.domesa.com.co/" class="btn btn-primary" target="_blank">
                    Empresa aliada <i class="bi bi-truck"></i>
                </a>
            </div>    
        </div>
    </div>
    <br>
        <h1 class="text-center">Tus marcas favoritas estan aqui</h1>
    <br>
</div>

<div class="slider">
    <div class="slide-track">
            <div class="slide"> 
                <img src="assets/img/aliado1.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado2.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado3.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado4.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado5.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado6.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado7.png">
            </div>

            <div class="slide"> 
                <img src="assets/img/aliado1.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado2.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado3.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado4.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado5.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado6.png">
            </div>
            <div class="slide"> 
                <img src="assets/img/aliado7.png">
            </div>
    </div>    
</div>

<!--Pie de pagina-->
<section id="footer">
    <?php include("view/Design/footer.php"); ?>
</section>

<!-- Modal -->
<div class="modal fade" id="contacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-telephone-fill"></i> Contactenos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <form action="?clase=page&&funcion=Dashboard" method="POST">
                        <!-- Name input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Nombre</label>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form4Example2" class="form-control" />
                            <label class="form-label" for="form4Example2">Correo electronico</label>
                        </div>

                        <!-- Message input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                            <label class="form-label" for="form4Example3">Mensaje</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger mb-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
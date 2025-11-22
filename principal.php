<!DOCTYPE html>

<html>
        <head>
    
            <title>El patio Margarita</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/x-icon" href="logop.png">
            <link rel="stylesheet" href="estilos.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Special+Gothic:wght@400..700&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        </head>
        <body>
        <header>
        
        
         <h1 class="nombreP">El patio Margarita</h1>

         <nav>
            <a href="principal.html">Inicio</a>
            <a href="menu.html">Servicios</a>
            <a href="ubicacion.html">Ubicación</a>
            <a href="contacto.html">Contacto</a>
         </nav>

         

    </header>

        <video class="VideoP" src="video/video3P.MP4" autoplay muted loop></video>
    


        </video>
        <h2 class="infoP" >Conoce de nosotros</h2>

    <section>

        <img class="imagen1" src="Imagenes/IMG_0442.jpg" alt="imagen1">
        <nav class="navbar-nav">

            <p class="Descripcion1" >El Patio Margarita es uno de los puntos nocturnos 
                más reconocidos de la isla. Combina buena música,
                ambiente exclusivo y la mejor vibra de Margarita
                en un solo lugar.</p>

                <p class="Descripcion1">
                    Es uno de los puntos nocturnos más reconocidos de la isla. 
                    Combina buena música, ambiente exclusivo y la mejor vibra
                     de Margarita en un solo lugar.
                </p>

                

        </nav>

    </section>

    <P style="color: aliceblue;" >.</P>
    <P style="color: aliceblue;" >.</P>


    <p class="Descripcion2">VEN Y VIVE LA EXPERIENCIA EN EL PATIO MARGARITA</p>

    <P style="color: aliceblue;" >.</P>
    <P style="color: aliceblue;" >.</P>



    <h2 class="infoservicios">Servicios</h2>
        <section>

        
        
            <img class="imagen2" src="Imagenes/servicios.jpg" alt="">
            <nav class="navbar-nav">
            <p class="descrip3">🎧 Música en vivo y DJs invitados cada fin de semana.</p>
            <p class="descrip3">🍸 Bar completo con cocteles exclusivos y bebidas nacionales e importadas.</p>
            <p class="descrip3">🛋️ Zona VIP y reservaciones especiales para grupos o celebraciones.</p>
            <p class="descrip3">🅿️ Estacionamiento privado y vigilancia toda la noche.</p>
            <p class="descrip3">⚡ Planta eléctrica y seguridad garantizada.</p>

            </nav>

        </section>

             <P style="color: aliceblue;" >.</P>
                <P style="color: aliceblue;" >.</P>
                <P style="color: aliceblue;" >.</P>
                <P style="color: aliceblue;" >.</P>
    

            <h2 class="info-ubi" >ubicación</h2>


                <section>

                    <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.892402727215!2d-63.8259300241602!3d10.971493555563724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318f54ee87e265%3A0xce8edf68f0938186!2sEl%20Patio!5e0!3m2!1ses-419!2sve!4v1761781117812!5m2!1ses-419!2sve" 
                    src="https://www.google.com/maps/embed?pb=!1m18..."
                    width="1000"
                    height="400"
                    style="border:0; display:block; margin: 0 auto;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
      
                    ></iframe>

                </section>

                        <P style="color: aliceblue;" >.</P>

                    <section>
        
                        <h2 class="info-contacto" >Contacto</h2>

                        <img class="img-contacto" src="Imagenes/IMG_0609.jpg" alt="">

    
                        <nav class="navbar-nav">
                        <p class="descrip4" >📞 Teléfono / WhatsApp: +58 414-1234567</p>
                        <p class="descrip4" >✉️ Email: contacto@elpatiomargarita.com</p>
                        <p class="descrip4" >🌐 Redes Sociales: @elpatiomargarita</p>
                        </nav>

                    </section>


            

                    <P style="color: aliceblue;" >.</P>
                    <P style="color: aliceblue;" >.</P>
                    <P style="color: aliceblue;" >.</P>
                    <P style="color: aliceblue;" >.</P><P style="color: aliceblue;" >.</P>
                    <P style="color: aliceblue;" >.</P>
                    <P style="color: aliceblue;" >.</P>
                    <P style="color: aliceblue;" >.</P>
                    <P style="color: aliceblue;" >.</P>
    
                        

</html>

<?php  


$conexion = new mysqli("localhost", "root", "", "el_patio_margarita");

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombredelusuario'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $nota = $_POST['nota'];
    $fecha = date("Y-m-d H:i:s");

    $sql = "INSERT INTO comentarios (nombredelusuario, usuario, email, nota, fechanota)
            VALUES ('$nombre', '$usuario', '$email', '$nota', '$fecha')";
    $conexion->query($sql);
}


if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $conexion->query("DELETE FROM comentarios WHERE id=$id");
}


if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $notaNueva = $_POST['nota_editada'];

    $conexion->query("UPDATE comentarios SET nota='$notaNueva' WHERE id=$id");
}
?>



<h2 class="titulo-comentario">Agrega un comentario</h2>

<div class="contenedor-comentario">

    <form method="POST" class="form-comentario">

        <label>Nombre y Apellido</label>
        <input type="text" name="nombredelusuario" required>

        <label>Usuario (Opcional)</label>
        <input type="text" name="usuario">

        <label>Correo electrónico</label>
        <input type="email" name="email" required>

        <label>Escribe tu comentario</label>
        <textarea name="nota" required></textarea>

        <button type="submit" name="guardar" class="btn-comentario">Enviar comentario</button>

    </form>
</div>

<br><br>



<section class="lista-comentarios">

<?php
$consulta = $conexion->query("SELECT * FROM comentarios ORDER BY id DESC");

while ($fila = $consulta->fetch_assoc()):
?>

<div class="comentario-card">
    <h3><?php echo $fila['nombredelusuario']; ?></h3>
    <p class="usuario">@<?php echo $fila['usuario']; ?></p>
    <p><?php echo $fila['nota']; ?></p>
    <small><?php echo $fila['fechanota']; ?></small>

    <div class="acciones">
        <a class="btn-eliminar" href="?eliminar=<?php echo $fila['id']; ?>">Eliminar</a>

        <button class="btn-editar" onclick="document.getElementById('edit_<?php echo $fila['id']; ?>').style.display='block'">
            Editar
        </button>
    </div>


    <div id="edit_<?php echo $fila['id']; ?>" class="editar-box">
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
            <textarea name="nota_editada" required><?php echo $fila['nota']; ?></textarea>
            <button type="submit" name="editar">Guardar</button>
        </form>
    </div>

</div>

<?php endwhile; ?>

</section>

                    <section>
                        <div class="footer">
                        <p>© 2024 El patio Margarita. Todos los derechos reservados.</p>
                        </div>


                    </section>
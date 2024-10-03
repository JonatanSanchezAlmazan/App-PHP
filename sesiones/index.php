<?php
// controlSesiones/index.php
//Bloque de código que se ejecuta en el servidor
session_start(); // Iniciar la sesión

// Comprobamos si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}

// Establecemos el tiempo máximo de vida de la sesión (30 minutos en segundos)
$tiempo_maximo = 30*60; // 30 minutos

// Si no hay un tiempo de sesión registrado, lo establecemos al iniciar la sesión
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo'] = time(); // Tiempo en que se creó la sesión
}

// Comprobamos si la sesión ha caducado
if (time() - $_SESSION['tiempo'] > $tiempo_maximo) {
    // Si han pasado más de 30 minutos, destruimos la sesión
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Destruye la sesión
    header("Location: ../index.php"); // Redirige al usuario a la página principal
    exit();
}

// Actualizamos el tiempo de inicio de sesión en cada actividad
$_SESSION['tiempo'] = time();



// Incluimos el header
include "../includes/header.html";
?>
<!-- Bloque de código que se ejecuta en el entorno cliente menos las sentencias de php que vienen del servidor -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página protegida</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
  <main>
    <div class="sesion">
        <p>Usuario: <?php echo $_SESSION['usuario']; ?> </p>
        <p>Sesión iniciada el día  <?php echo date("d/m/Y"); ?>  a las  <?php echo date("G:i:s",  $_SESSION['tiempo']) ?> </p>
    </div> 
    <div class="cerrarSesion">
        <a href="controlSesiones/cerrarSesion.php">Cerrar sesión</a>
    </div>   
  </main>
  
<!-- Incluir el footer -->
<?php include "../includes/footer.html"; ?>

<script>
 // Se que quizás no es lo apropiado pero al ver que la sesion no se me cerraba sola y no se si es normal o no he incluido una función de JavaScript para que pasado los 30 minutos cierre la sesión.

setTimeout(function() {
    window.location.href = "../index.php"; 
}, 1800000);

</script>
</body>
</html>

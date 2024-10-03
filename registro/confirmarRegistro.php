<?php
// confirmarRegistro.php
// Bloque de codigó que se ejecuta des de el servidor.

// incluir el archivo funciones.
include "../funciones/funciones.php";

// Declarar la función procesarRegistro a una variable.
$datosUsuario = procesarRegistro($_POST);

// Comprbamos si llegan datos al formulario si es así entramos en el condicional if
if ($datosUsuario) {
    $nombre = $datosUsuario['nombre'];
    $edad = $datosUsuario['edad'];
    $nick = $datosUsuario['nick'];   
    
    // Determinar el mensaje según la edad, se declara una variable mensajeEdad que al principio es un string vacío y con el condicional if se comprueba si el usuario tiene entre 15 y 20 años se le asigna el valor de Joven y con el elseif comprueba si el usuario tiene más de 60 años se le asigna el valor de senior.
    $mensajeEdad = '';
    if ($edad >= 15 && $edad <= 20) {
        $mensajeEdad = "Joven";
    } elseif ($edad >= 60) {
        $mensajeEdad = "Senior";
    }
?>

<!-- Bloque de de código que se ejecuta en el cliente quitado de las sentencias php que los datos provienen del servidor-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Registro</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
    <body>
<!-- incluir el header a la página -->
<?php include "../includes/header.php"; ?>
  
<main>
    <h2>Confirmar Registro</h2>
        <form action="../registro/registroCreado.php" method="post">
            <label for="nombre">Nombre: <?php echo $nombre; ?></label>
            <input type="hidden" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
            <label for="edad">Edad: <?php echo $edad; ?><?php echo $mensajeEdad; ?></label>
            <input type="hidden" id="edad" name="edad" value="<?php echo $edad; ?>" required>
            <label for="nick">Nick: <?php echo $nick; ?></label>
            <input type="hidden" id="nick" name="nick" value="<?php echo $nick; ?>" required>
            <button type="submit">Confirmar Datos</button>
            <button type="submit" formaction="nuevoRegistro.php">Corregir Datos</button> 
        </form>
</main>
           
     
<!-- Incluye el footer a la página -->
<?php include "../includes/footer.php"; ?> 

    </body>
</html>

<?php
//  Si no llegan datos mandamos un error al usuario con datos no recibidos.
} else {
    echo "<h1>Error: Datos no recibidos</h1>";
}
?>

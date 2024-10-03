<?php
// nuevoRegistro.php
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

?>

 <!-- incluir el header a la página -->
<?php include "../includes/header.php"; ?> 

<!-- Bloque de de código que se ejecuta en el cliente quitado de las sentencias php que los datos provienen del servidor-->
<head>
<link rel="stylesheet" href="../css/styles.css">
<title>Nuevo Registro</title>
</head>



<main>
    <h2>Formulario de Registro</h2>
        <form action="../registro/confirmarRegistro.php" method="post">                
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo ($nombre)  ?>" required>                
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" value="<?php echo ($edad) ?>" required>                 
            <label for="nick">Nick:</label>
            <input type="text" id="nick" name="nick" maxlength="8" value="<?php echo ($nick) ?>" required>               
            <label for="password">Contaseña:</label>
            <input type="password" id="password" name="password" minlength="5"  required>                
            <button type="submit">Enviar</button>                
        </form>
        <a href="../index.php"> Volver atras</a>
</main>

            
     
<!-- Incluye el footer a la página -->
<?php include "../includes/footer.php"; ?> 
<?php

// Sino llegan datos al formulario enviamos el formulario vacío para que lo rellene el usuario.

}else{
?>
<!-- incluir el header a la página -->
<?php include "../includes/header.php"; ?> 

<head>
<link rel="stylesheet" href="../css/styles.css">
<title>Nuevo Registro</title>
</head>

<main>
    <h2>Formulario de Registro</h2>
        <form action="../registro/confirmarRegistro.php" method="post">                
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>                
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>                
            <label for="nick">Nick:</label>
            <input type="text" id="nick" name="nick" maxlength="8" required>               
            <label for="password">Contaseña:</label>
            <input type="password" id="password" name="password" minlength="5" required>                
            <button type="submit">Enviar</button>                
        </form>
        <a href="../index.php"> Volver atras</a>
</main>

<!-- Incluye el footer a la página -->
<?php include "../includes/footer.php"; ?> 

<?php 
}
?>


    
  


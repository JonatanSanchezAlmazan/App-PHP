<?php

include "../funciones/funciones.php";

$datosUsuario = procesarRegistro($_POST);

if ($datosUsuario) {
    $nombre = $datosUsuario['nombre'];
    $edad = $datosUsuario['edad'];
    $nick = $datosUsuario['nick'];


?>

<?php include "../includes/header.php"; ?> 
<head>
<link rel="stylesheet" href="../css/styles.css">
<title>Registro Completado</title>
</head>
<main>
    <h2>Registro Completado</h2>
    <div class="registroCompletado">
        <p>El usuario <?php echo $nombre?> ha sido creado satisfactoriamente</p>
        <p>Nombre: <?php echo$nombre?></p>
        <p>Edad:<?php echo $edad ?>   <?php if($edad >= 15 && $edad <=20){ echo "<img src='../assets/cool.png' alt='Joven' />";}?></p>
    </div>
    <a href="../index.php">Volver al inicio</a>

</main>
<?php include "../includes/footer.php"; ?> 


<?php
}else {
    echo "<h1>Error en la recepción de datos.</h1>";
}

?>
?>

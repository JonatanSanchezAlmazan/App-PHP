<?php
// controlSesiones/validarSesion.php
//Bloque de código que se ejecuta en el servidor.
session_start(); // Iniciamos sesión

// Verificamos si el formulario ha sido enviado
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    
    // Comparamos las credenciales
    if (($_POST['usuario'] === 'admin') && ($_POST['password'] === 'abcdef')) {
        // Crear sesión para el usuario
        $_SESSION['usuario'] = 'Admin';
        $_SESSION['tiempo'] = time(); // Marca el inicio de sesión

        // Redirigir a la página principal
        header("Location: ../index.php");
        exit;
    } else {
        
        // Si las credenciales son incorrectas, redirigir al formulario de nuevo
        header("Location: ../../index.php"); // Redirige al formulario de inicio de sesión
        exit;
    }
} 
?>





  



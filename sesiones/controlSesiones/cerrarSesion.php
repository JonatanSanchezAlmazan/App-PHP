<?php
// Sentencía de codigó para destruir la sesión y redirigir al usuario a la página principal
session_start();
session_destroy(); // Destruye todas las sesiones activas
header("Location: ../../index.php"); // Redirige al la página principal
exit;
?>
<?php
// Función encargada de procesar los datos del formulario se le pasa por parámetro el método a utilizar y comprueba que esten todos si es así retorna un array asaciativo con clave valor si los datos le llega o retorna false en el caso que los datos no les llegue.

function procesarRegistro($postData) {
  if (isset($postData['nombre']) && isset($postData['edad']) && isset($postData['nick'])) {
      $nombre = $postData['nombre'];
      $edad = $postData['edad'];
      $nick = $postData['nick'];

      return [
          'nombre' => $nombre,
          'edad' => $edad,
          'nick' => $nick
      ];
  } else {
      return false;
  }
}

?>
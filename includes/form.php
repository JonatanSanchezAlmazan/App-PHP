<main>
  <h2>Acceso</h2>
  <form action="sesiones/controlSesiones/validarSesion.php" method="post">
    <label for="usuario">Usuario:</label>
      <input
        type="text"
        id="usuario"
        name="usuario"
        placeholder="Usuario"
        required
      />
    <label for="password">Contraseña</label>
      <input
        type="password"
        id="password"
        name="password"
        placeholder="*********"
        required
      />
    <button type="submit">Enviar</button>
  </form>
  <a href="registro/nuevoRegistro.php">Nuevo Usuario</a>
</main>

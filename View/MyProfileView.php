<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/MyProfile.css">
    <link rel="icon" href="../Icons/logo_verde.png" type="image/x-icon">
    <title>Mi perfil</title>
</head>

<body>
    <div class="cont_logo">
        <img src="../Icons/logo_verde.png" alt="" class="logo">
    </div>
    <section id="section_form ">
        <form method="POST">
            <h1>Perfil</h1>
            <p>Cambia tu foto de perfil y edita tu información personal.</p>
            <img class="imagen-perfil" src="https://via.placeholder.com/150" alt="Foto de perfil">
            <button type="button" class="boton-cambiar-foto">Cambiar foto</button>
            <fieldset class="campos-personal">
                <legend>Información personal</legend>

                <label for="identificacion">N°.Identificación:</label>
                <input type="number" id="identificacion" disabled required>

                <label for="cargo">Cargo:</label>
                <input type="radio" id="cargo" name="cargo" required>Instructor

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Escriba su primer nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Escriba su apellido" required>

                <label for="email">Correo electronico:</label>
                <input type="email" id="email" name="email" placeholder="Ejemplo@gmail.com" required>

                <label for="telefono">Telefono:</label>
                <input type="number" name="telefono" id="telefono" required>

                <fieldset>
                    <legend>Cambio de contraseña</legend>

                    <label for="contraseña-antigua">Contraseña antigua:</label>
                    <input type="password" name="contrasena antigua" id="contraseña">

                    <label for="contraseña-nueva">Contraseña nueva:</label>
                    <input type="password" name="contrasena nueva" id="contraseña">

                    <label for="confirma-contraseña">Confirme su contraseña:</label>
                    <input type="password" name="confirme contrasena" id="contraseña">

                </fieldset>

            </fieldset>
            <button type="submit" name="boton-actualizar" class="boton-actualizar">Actualizar perfil</button>
        </form>
        <?php
        include("../Controller/MyProfileController.php");
        $myProfileController = new MyProfileController();
        $myProfileController->InsertDatasProfile();
        ?>
    </section>
    <footer class="footer">
        <p>Sena© <span id="year"></span>. Sistema Desarrollado Por El Grupo TPS38 | Instructor Oscar Gonzalez</p>
    </footer>
</body>

</html>
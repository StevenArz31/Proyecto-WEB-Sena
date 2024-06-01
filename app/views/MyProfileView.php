<?php
include("../Controller/MyProfileController.php");
$myProfileController = new MyProfileController();
$myProfileController->LoadDatas();
?>

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
    <header>
        <div>
            MI PERFIL
        </div>
    </header>

    <div class="cont_logo">
        <img src="../Icons/logo_verde.png" alt="" class="logo">
    </div>

    <section id="section_form ">
        <form method="POST" enctype="multipart/form-data">

            <p>Actualiza tus datos o contraseña.</p>
            <p class="nota">¡Nota: Para no tener foto de perfil, elimina la actual y haga clic en 'actualizar perfil'. Si prefieres tener foto, simplemente elija su foto y haga clic en 'actualizar foto'.!</p>

            <!-- Input para seleccionar una nueva imagen -->
            <input type="file" id="input-imagen" name="photoProfile" accept="image/png, image/jpeg" style="display: none;">
            <!-- Botón para agregar foto de perfil -->
            <button type="button" onclick="document.getElementById('input-imagen').click();" onclick="abrirGaleria()" class="boton-agregar-foto">
                <img id="vista-previa" name="img_perfil" src="<?php echo $myProfileController->getMyProfileDTO()->getImageProfile(); ?>" alt="Vista previa" title="¡Haga clic aquí para cambiar su foto de perfil!">
            </button>
            <!-- Botón para eliminar foto de perfil -->
            <input type="submit" name="DeletePhoto" class="boton-eliminar-foto" value="Eliminar foto">

            <!-- Botón para actualizar foto de perfil -->
            <input type="submit" name="UpdatePhoto" class="boton-actualizar" value="Actualizar foto">

            <input type="hidden" id="input-eliminar" name="DeletePhoto" value="1">
            <fieldset class="campos-personal">
                <legend>Información personal</legend>

                <label for="identificacion">N°.Identificación:</label>
                <input type="number" name="identificationNumber" id="identificacion" value="<?php echo $myProfileController->getMyProfileDTO()->getIdentificationNumber(); ?>" required readonly oncopy="return false;" title="¡Este este campo de identificacion, no es editable, no puede ser copiado!">

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="name" placeholder="Escriba su primer nombre" value="<?php echo $myProfileController->getMyProfileDTO()->getName(); ?>" readonly required title="¡Este campo de 'nombre' no se puede modificar!">

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="lastName" placeholder="Escriba su apellido" value="<?php echo $myProfileController->getMyProfileDTO()->getLastName(); ?>" readonly required title="¡Este campo de 'apellido' no se puede modificar!">

                <label for="email">Correo electronico:</label>
                <input type="email" id="email" name="mail" placeholder="Ejemplo@gmail.com" value="<?php echo $myProfileController->getMyProfileDTO()->getMail(); ?>" required>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="phone" pattern="[0-9]{10}" placeholder="Por favor digite su numero de telefono" value="<?php echo $myProfileController->getMyProfileDTO()->getPhone(); ?>" required>

                <fieldset class="actualizar-contaseña">
                    <legend>Cambio de contraseña</legend>

                    <label for="contraseña-antigua">Contraseña antigua:</label>
                    <input type="password" id="contraseña" name="oldPassword" placeholder="Digite su contraseña antigua (6 digitos)" pattern=".{6,}">
                    <button class="ojo-contraseña" type="button" onclick="mostrarContraseña('contraseña')"><img class="img-contraseña" src="../Icons/ojo.png"></button>

                    <label for="contraseña-nueva">Contraseña nueva:</label>
                    <input type="password" id="contraseñaNueva" placeholder="Digite su contraseña nueva (6 digitos)" pattern=".{6,}" name="newPassword">
                    <button class="ojo-contraseña" type="button" onclick="mostrarContraseña('contraseñaNueva')"><img class="img-contraseña" src="../Icons/ojo.png"></button>

                    <label for="confirma-contraseña">Confirme su contraseña:</label>
                    <input type="password" id="confirmaContraseña" name="confirmationNewPassword" pattern=".{6,}" placeholder="Asegúrese  que sea igual a la nueva contraseña (6 digitos)">
                    <button class="ojo-contraseña" type="button" onclick="mostrarContraseña('confirmaContraseña')"><img class="img-contraseña" src="../Icons/ojo.png"></button>

                </fieldset>

            </fieldset>
            <button type="submit" name="UpdateDatas" class="boton-actualizar">Actualizar perfil</button>
        </form>
        <?php
        $myProfileController->DeletePhoto();
        $myProfileController->UpdatePhoto();
        $myProfileController->UpdateDatas();
        ?>
    </section>
    <footer class="footer">
        <p>Sena© <span id="year"></span>. Sistema Desarrollado Por El Grupo TPS38 | Instructor Oscar Gonzalez</p>
    </footer>
    <script src="../JavaScript/MyProfile.js"></script>
</body>

</html>
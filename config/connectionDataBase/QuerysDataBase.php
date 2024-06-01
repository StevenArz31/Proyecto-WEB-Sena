<?php
require_once("../ConnectionDataBase/ConnectionDataBase.php");

class QuerysDataBase
{
    private $connectionDataBase;

    function __construct()
    {
        $this->connectionDataBase = new ConnectionDataBase();
    }

    //Start Querys My Profile//
    public function QueryDatasProfile($identificationNumber)
    {
        $SQL = "SELECT `numero_de_documento`, `imagen_perfil`, `nombre`, `apellido`, `email`, `telefono` FROM `usuarios` WHERE `numero_de_documento` = $identificationNumber";
        $resultQuery = mysqli_query($this->connectionDataBase->CreateConnection(), $SQL);
        $this->connectionDataBase->CloseConnection();
        return $resultQuery;
    }

    public function UpdateDatasProfile($myProfileDTO)
    {
        $identificationNumber = $myProfileDTO->getIdentificationNumber();
        $mail = $myProfileDTO->getMail();
        $phone = $myProfileDTO->getPhone();
        $newPassword = $myProfileDTO->getNewPassword();
        $incluidePassword = "";

        if (strlen($newPassword) > 0) {
            $incluidePassword = ", `contrasena`='$newPassword'";
        }

        $SQL = "UPDATE `usuarios` SET `email`='$mail', `telefono`='$phone'" . $incluidePassword . " WHERE `numero_de_documento` = '$identificationNumber'";
        $resultUpdate = mysqli_query($this->connectionDataBase->CreateConnection(), $SQL);
        $this->connectionDataBase->CloseConnection();
        return $resultUpdate;
    }

    public function QueryOldPassword($identificationNumber)
    {
        $SQL = "SELECT `contrasena` FROM `usuarios` WHERE `numero_de_documento` = $identificationNumber";
        $resultQuery = mysqli_query($this->connectionDataBase->CreateConnection(), $SQL);
        $this->connectionDataBase->CloseConnection();
        return $resultQuery;
    }

    public function UpdatePhotoProfile($myProfileDTO)
    {
        $identificationNumber = $myProfileDTO->getIdentificationNumber();
        $photoProfile = $myProfileDTO->getImageProfile();
        $SQL = "UPDATE `usuarios` SET `imagen_perfil` = '$photoProfile' WHERE `numero_de_documento` = '$identificationNumber'";
        $resultUpdate = mysqli_query($this->connectionDataBase->CreateConnection(), $SQL);
        $this->connectionDataBase->CloseConnection();
        return $resultUpdate;
    }
    //End Querys My Profile//
}

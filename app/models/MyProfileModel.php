<?php
include("../DTO/MyProfileDTO.php");
include("../ConnectionDataBase/QuerysDataBase.php");

class MyProfileModel
{
    private $queryDataBase;

    public function __construct()
    {
        $this->queryDataBase = new QuerysDataBase();;
    }

    public function LoadDatasProfile($identificationNumber)
    {
        $resultQuery = $this->queryDataBase->QueryDatasProfile($identificationNumber);
        if (mysqli_num_rows($resultQuery) > 0) {
            $datasProfile = mysqli_fetch_assoc($resultQuery);
            $myProfileDTO = new MyProfileDTO();

            $myProfileDTO->setImageProfile($datasProfile['imagen_perfil']);
            $myProfileDTO->setIdentificationNumber($datasProfile['numero_de_documento']);
            $myProfileDTO->setName($datasProfile['nombre']);
            $myProfileDTO->setLastName($datasProfile['apellido']);
            $myProfileDTO->setMail($datasProfile['email']);
            $myProfileDTO->setPhone($datasProfile['telefono']);
            return $myProfileDTO;
        }
    }

    public function UpdateDatasProfile($myProfileDTO)
    {
        $resultUpdate = $this->queryDataBase->UpdateDatasProfile($myProfileDTO);
        if ($resultUpdate) {
            echo "<div id='message' class='ok'>¡DATOS ACTUALIZADOS CORRECTAMENTE!</div>";
        } else {
            throw new Exception("");
        }
    }

    private function ValidateOldPassword($identificationNumber, $oldWrittenPassword)
    {
        $resultQuery = $this->queryDataBase->QueryOldPassword($identificationNumber);
        if (mysqli_num_rows($resultQuery) > 0) {
            $oldPassword = mysqli_fetch_assoc($resultQuery);

            if ($oldPassword['contrasena'] === $oldWrittenPassword) {
                return true;
            }
            echo "<div id='message' class='bad'>¡CONTRASEÑA ANTIGUA INCORRECTA!</div>";
        }
        return false;
    }

    private function ValidatePasswordAndConfirmation($newPassword, $confirmationNewPassword)
    {
        if (strlen($newPassword) > 0 && strlen($confirmationNewPassword) > 0) {
            if ($newPassword !== $confirmationNewPassword) {
                echo "<div id='message' class='bad'>¡CONTRASEÑA NUEVA  Y CONFIRMACION NO COINCIDEN!</div>";
            } else {
                return true;
            }
        } else {
            echo "<div id='message' class='bad'>¡CONTRASEÑA NUEVA Y CONFIRMACION DEBEN SER DILIGENCIADOS!</div>";
        }
        return false;
    }

    public function ValidatePasswords($myProfileDTO)
    {
        if (!$this->ValidateOldPassword($myProfileDTO->getIdentificationNumber(), $myProfileDTO->getOldPassword())) {
            return false;
        }
        return $this->ValidatePasswordAndConfirmation($myProfileDTO->getNewPassword(), $myProfileDTO->getConfirmationNewPassword());
    }

    public function DeletePhotoProfile($myProfileDTO)
    {
        $defaultPhoto = "../Icons/DefaultPhoneProfile.png";
        $myProfileDTO->setImageProfile($defaultPhoto);
        $resultUpdate = $this->queryDataBase->UpdatePhotoProfile($myProfileDTO);
        if ($resultUpdate) {
            echo "<div id='message' class='ok'>¡FOTO DE PERFIL ELIMINADA CORRECTAMENTE!</div>";
        } else {
            throw new Exception("");
        }
    }

    function UpdatePhotoProfile($myProfileDTO)
    {
        $nameImage = $_FILES['photoProfile']['name'];
        $temporalImage = $_FILES['photoProfile']['tmp_name'];
        $directory = "../Icons/";
        $newImage = $directory . $nameImage;
        if (move_uploaded_file($temporalImage, $newImage)) {
            $myProfileDTO->setImageProfile($newImage);
            $resultUpdate = $this->queryDataBase->UpdatePhotoProfile($myProfileDTO);
            if ($resultUpdate) {
                echo "<div id='message' class='ok'>¡FOTO DE PERFIL ACTUALIZADA CORRECTAMENTE!</div>";
            } else {
                throw new Exception("");
            }
        } else {
            throw new Exception("");
        }
    }
}

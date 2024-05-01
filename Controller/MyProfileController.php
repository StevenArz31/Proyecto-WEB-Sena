<?php
include("../Model/MyProfileModel.php");
class MyProfileController
{
    private $myProfileDTO;
    private $myProfileModel;

    function __construct()
    {
        $this->myProfileModel = new MyProfileModel();
    }

    public function LoadDatas()
    {
        try {
            $this->myProfileDTO = $this->myProfileModel->LoadDatasProfile(1001996994);
        } catch (Exception $exc) {
            echo "ERROR AL CARGAR LOS DATOS DEL PERFIL ";
        }
    }

    public function getMyProfileDTO()
    {
        return $this->myProfileDTO;
    }

    public function UpdateDatas()
    {
        try {
            if (isset($_POST['UpdateDatas'])) {
                $this->myProfileDTO->setMail($_POST['mail']);
                $this->myProfileDTO->SetPhone($_POST['phone']);
                $oldWrittenPassword = $_POST['oldPassword'] ?? "";

                if (strlen($oldWrittenPassword) > 0) {
                    $this->myProfileDTO->setOldPassword($oldWrittenPassword);
                    $this->myProfileDTO->setNewPassword($_POST['newPassword'] ?? "");
                    $this->myProfileDTO->setConfirmationNewPassword($_POST['confirmationNewPassword'] ?? "");
                    $validatePasswords = $this->myProfileModel->ValidatePasswords($this->myProfileDTO);

                    if ($validatePasswords) {
                        $this->myProfileModel->UpdateDatasProfile($this->myProfileDTO);
                        $this->CleanPasswords();
                    }
                } else {
                    $this->myProfileModel->UpdateDatasProfile($this->myProfileDTO);
                }
            }
        } catch (Exception $exc) {
            echo "<div id='message' class='bad'>ERROR AL ACTUALIZAR LOS DATOS DEL PERFIL</div>";
        }
    }

    private function CleanPasswords()
    {
        $this->myProfileDTO->setOldPassword("");
        $this->myProfileDTO->setNewPassword("");
        $this->myProfileDTO->setConfirmationNewPassword("");
    }

    public function DeletePhoto()
    {
        try {
            if (isset($_POST['DeletePhoto'])) {
                $this->myProfileModel->DeletePhotoProfile($this->myProfileDTO);
            }
        } catch (Exception $exc) {
            echo "<div id='message' class='bad'>ERROR AL ELIMINAR FOTO DE PERFIL</div>";
        }
    }

    public function UpdatePhoto()
    {
        try {
            if (isset($_POST['UpdatePhoto'])) {
                if (isset($_FILES['photoProfile'])) {
                    $this->myProfileModel->UpdatePhotoProfile($this->myProfileDTO);
                } else {
                    echo "<div id='message' class='bad'>¡SELECCIONE UNA IMAGEN!</div>";
                }
            }
        } catch (Exception $exc) {
            echo "<div id='message' class='bad'>ERROR AL ACTUALIZAR FOTO DE PERFIL</div>";
            $exc->getMessage();
        }
    }
}

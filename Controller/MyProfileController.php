<?php
include("../Model/MyProfileModel.php");

class MyProfileController
{
    function InsertDatasProfile()
    {
        if (isset($_POST['boton-actualizar'])) {
            $myProfileModel = new MyProfileModel();
            $myProfileModel->InsertDatasProfileDataBase();
        }
    }
}

<?php
include("../ConnectionDataBase/ConnectionDataBase.php");
class MyProfileModel
{
    function InsertDatasProfileDataBase()
    {
        $name = trim($_POST['nombre']);
        echo $name;
    }
}

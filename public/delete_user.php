<?php
include_once '../controllers/UserController.php';
$controller = new UserController();

$id = $_GET['id'];

if ($controller->deleteUser($id)) {
    header('Location: ../views/list_users.php');
} else {
    echo "Error deleting user.";
}
?>

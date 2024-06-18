<?php
include_once '../controllers/UserController.php';
$controller = new UserController();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if ($controller->updateUser($id, $name, $lastname, $username, $password, $email)) {
    header('Location: ../views/list_users.php');
} else {
    echo "Error updating user.";
}
?>

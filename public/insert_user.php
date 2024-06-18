<?php
include_once '../controllers/UserController.php';
$controller = new UserController();

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if ($controller->createUser($name, $lastname, $username, $password, $email)) {
    header('Location: ../views/list_users.php');
} else {
    echo "Error creating user.";
}
?>

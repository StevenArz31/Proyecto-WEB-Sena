<?php
include_once '../controllers/UserController.php';
$controller = new UserController();
$user = $controller->viewUser($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="../public/update_user.php" method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="text" name="name" placeholder="Name" value="<?= $user['name'] ?>" required>
        <input type="text" name="lastname" placeholder="Last Name" value="<?= $user['lastname'] ?>" required>
        <input type="text" name="username" placeholder="Username" value="<?= $user['username'] ?>" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>

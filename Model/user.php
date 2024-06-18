<?php
class User {
    private $con;

    public function __construct($db) {
        $this->con = $db;
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        return $this->con->query($sql);
    }

    public function getUserById($id) {
        $stmt = $this->con->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function insertUser($name, $lastname, $username, $password, $email) {
        $stmt = $this->con->prepare("INSERT INTO users (name, lastname, username, password, email) VALUES (?, ?, ?, ?, ?)");
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("sssss", $name, $lastname, $username, $hashed_password, $email);
        return $stmt->execute();
    }

    public function updateUser($id, $name, $lastname, $username, $password, $email) {
        $stmt = $this->con->prepare("UPDATE users SET name = ?, lastname = ?, username = ?, password = ?, email = ? WHERE id = ?");
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("sssssi", $name, $lastname, $username, $hashed_password, $email, $id);
        return $stmt->execute();
    }

    public function deleteUser($id) {
        $stmt = $this->con->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>

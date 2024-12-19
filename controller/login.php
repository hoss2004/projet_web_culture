<?php
session_start();
require_once '../model/DB.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Utilisez bcrypt en production

    $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header('Location: ../view/index.php'); // Redirige après succès
        exit();
    } else {
        echo "<script>alert('Email ou mot de passe incorrect'); window.location.href='../view/index.php';</script>";
    }
}
?>
<?php
session_start();
include 'includes/header.php';

if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
    exit();
}
?>

<h1>Perfil</h1>

<p>Utilizador: <?= $_SESSION["username"] ?></p>

<p>Tipo: <?= $_SESSION["user_type"] ?></p>

<?php
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') {
    echo '<a href="admin.php">Página de Administração</a>';
}
?>

<br><br>

<a href="logout.php">Logout</a>

<?php include 'includes/footer.php'; ?>
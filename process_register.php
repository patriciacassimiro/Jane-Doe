<?php

include "db.php";

$username = trim($_POST["username"] ?? "");
$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";
$confirm = $_POST["confirm_password"] ?? "";
$userType = "user";

if ($password !== $confirm) {

    die("As senhas são diferentes");

}

$hash = password_hash(
    $password,
    PASSWORD_DEFAULT
);

$profilePic = "";

if (isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]["error"] === UPLOAD_ERR_OK) {

    $profilePic =
        "uploads/" .
        basename($_FILES["profile_pic"]["name"]);

    move_uploaded_file(
        $_FILES["profile_pic"]["tmp_name"],
        $profilePic
    );

}

$sql = "INSERT INTO users
(username,email,password_hash,user_type,profile_pic)
VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssss",
    $username,
    $email,
    $hash,
    $userType,
    $profilePic
);

$stmt->execute();

header("Location: login.php");
exit();

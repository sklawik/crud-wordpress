<?php
include_once("shared.php");
include_once("../db.php");

if (!isset($_POST['newLogin']) || !isset($_POST['newPassword']) || !isset($_POST['repeatNewPassword'])) {
    redirectBackWithError('Wszystkie pola muszą zostać uzupełnione.');
    exit;
}

$login = $_POST["newLogin"];
$password = $_POST['newPassword'];
$repeatPassword = $_POST['repeatNewPassword'];

$loginSize = strlen($login);
$passwordSize = strlen($password);
$repeatPasswordSize = strlen($repeatPassword);

if (!isLoginSafe($login)) {
    redirectBackWithError('Login musi zawierać określoną ilość znaków (3-16), zawierać litery (A-Z) lub liczby (0-9) bez znaków specjalnych.');
    exit;
}

if (!isPasswordSafe($password) || !isPasswordSafe($repeatPassword)) {
    redirectBackWithError("Hasła muszą zawierać przynajmniej jedną cyfrę, jeden znak specjalny, jedną wielką literę i mieć wielkość (8-32).");
    exit;
}

if (strcmp($repeatPassword, $password) != 0) {
    redirectBackWithError("Hasła nie zgadzają się.");
    exit;
}

$conn = getDatabaseConnection();

$query = $conn->prepare("SELECT login FROM users WHERE login=?");
if (!$query) {
    die("Błąd prepare SELECT: " . $conn->error);
}
$query->bind_param("s", $login);
$query->execute();
$query->store_result();

if ($query->num_rows > 0) {
    $query->close();
    redirectBackWithError("Użytkownik już istnieje");
    exit;
}
$query->close();

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

if ($login === 'admin') {
    $stmt = $conn->prepare("INSERT INTO users (login, password, adminLevel) VALUES (?, ?, 1)");
} else
    $stmt = $conn->prepare("INSERT INTO users (login, password) VALUES (?, ?)");
if (!$stmt) {
    die("Błąd prepare INSERT: " . $conn->error);
}
$stmt->bind_param("ss", $login, $hashedPassword);
$stmt->execute();
$stmt->close();

header("Location: /?msg=Konto utworzone pomyślnie");
exit;

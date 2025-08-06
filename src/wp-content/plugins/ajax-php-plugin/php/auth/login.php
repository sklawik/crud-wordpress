<?php
session_start();
include_once("shared.php");
include_once("../db.php");

if (!isset($_POST['login']) || !isset($_POST['password'])) {
    redirectBackWithError("Musisz podać login oraz hasło do konta, które już posiadasz.");
}

$login = $_POST["login"];
$password = $_POST['password'];

$conn = getDatabaseConnection();
$query = $conn->prepare("SELECT login, password, id, adminLevel FROM users WHERE login=? LIMIT 1");


$query->bind_param("s", $login);
$query->execute();
$result = $query->get_result();

while ($result && $row = $result->fetch_assoc()) {
    if (password_verify($password, $row["password"])) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["login"] = $row["login"];
        $_SESSION["adminLevel"] = $row["adminLevel"];
        header("Location: /?msg=Zalogowano się. Witaj $login ($id)");
        exit;
    } else {
        $query->close();
        redirectBackWithError("Wprowadzone dane są niepoprawne.");
    }
}

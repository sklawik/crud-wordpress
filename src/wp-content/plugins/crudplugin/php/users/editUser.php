<?php
include_once(__DIR__ . '/../db.php');
include_once(__DIR__ . '/../auth/shared.php');


if (!isset($_POST["change_login"])) {
    echo ("Błąd: Login jest brakujący.");
    exit;
}
if(!isset($_POST['id'])){
     echo ("Błąd: Brakuje ID rekordu.");
    exit;
}

$newLogin = $_POST['change_login'];
$deleteUser = $_POST['delete_user'];
$id = $_POST['id'];

$conn = getDatabaseConnection();


if ($deleteUser) {
    $stmt = $conn->prepare('DELETE FROM users WHERE id=?');
    $stmt->bind_param('s',$id);
    $stmt->execute();
    $stmt->close();
    header('Location: /index.php/users');
} else {
    if (!isLoginSafe($newLogin)) {
        echo ('Login jest niepoprawny.'); 
        exit;
    }
    $stmt = $conn->prepare('UPDATE users SET login=? WHERE id=?');
    $stmt->bind_param('ss', $newLogin, $id);
    $stmt->execute();
    $stmt->close();
    header('Location: /index.php/users');
}

$conn->close();

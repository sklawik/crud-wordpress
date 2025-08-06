<?php
include_once(__DIR__ . "/../auth/shared.php");
include_once(__DIR__ . '/../db.php');
if(isUserLoggedIn() == false){
    echo("Musisz być zalogowany by móc odwiedzić te stronę.");
    exit;
}

if(!isset($_SESSION['adminLevel'])){
    echo("Coś poszło nie tak.");
    exit;
}

$adminLevel = $_SESSION["adminLevel"];
if($adminLevel < 1){
 echo("Brak uprawnień.");
    exit;
}

$conn = getDatabaseConnection();
$stmt = $conn->prepare("SELECT * FROM users;");
$stmt->execute();
$result = $stmt->get_result();

while($row = $result->fetch_assoc()){

    $url =plugins_url("users/editUser.php", __DIR__);

    echo("<form method='POST' action=$url> <button type='action'>Zapisz zmiany</button> <input name='change_login' value={$row['login']}> <input name='delete_user' type='radio'>usuń</input> <input name='id' value={$row['id']}>  </form>");
}

$conn->close();


?>
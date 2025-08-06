<?php

function redirectBackWithError($errorMessage)
{
    $url = "Location: /?page_id=12&err=" . urlencode($errorMessage);
    header($url);
    exit;
}

function redirectHome()
{
    header("Location:  /");
    exit;
}

function isLoginSafe($string)
{
    return preg_match('/^[a-zA-Z0-9]{3,16}$/', $string);
}

// chcielibyśmy aby użytkownik zawsze był aktualny np. w przypadku zabrania nagle uprawnień takiemu, który jest zalogowany w serwisie.
function fetchUserData($userId){
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    $conn = getDatabaseConnection();
    $stmt = $conn->prepare('SELECT login, id, adminLevel FROM users WHERE id=?');
    $stmt->bind_param('s',$userId);
    $stmt->execute();
    $result = $stmt->get_result();
    while(  $stmt->more_results() && $row = $result->fetch_assoc()   ){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['adminLevel'] = $row['adminLevel'];
        $_SESSION['login'] = $row['login'];
    }
    $stmt->close();
}

function isUserLoggedIn(){
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    if(!isset($_SESSION['user_id'])){
        return false;
    }
    if($_SESSION['user_id'] == null){
        return false;
    }
    return true;
}

function isPasswordSafe($string)
{
    if (strlen($string) < 6 || strlen($string) > 32)
        return false;

    $hasSpecialCharacter = false;
    $hasOneUpperLetter = false;
    $hasAtLeastOneNum = false;
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == '!' || $string[$i] == '@' || $string[$i] == '?') {
            $hasSpecialCharacter = true;
        }
        if ($string[$i] == strtoupper($string[$i])) {
            $hasOneUpperLetter = true;
        }
        for ($j = 0; $j < 10; $j++) {
            if ($string[$i] == $j) {
                $hasAtLeastOneNum = true;
                break;
            }
        }
    }

    if ($hasOneUpperLetter == false || $hasSpecialCharacter == false || $hasAtLeastOneNum == false) {
        return false;
    }

    return true;
}

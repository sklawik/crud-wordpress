<?php
include_once("shared.php");
include_once("../db.php");
if(session_start()){
    $_SESSION["user_id"] = null;
    fetchUserData($_SESSION["user_id"] );
    header("Location: /");
    exit;
}
?>
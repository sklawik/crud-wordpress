<?php

if(session_start()){
    $_SESSION["user_id"] = null;
    header("Location: /");
    exit;
}
?>
<?php
session_start() or die("");
include_once("db.php");
include_once("auth/shared.php");

?>

<div id="crudplugin-header-container">
  <div>
    <?php
    if (isset($_GET['msg'])) {
      $msg = $_GET['msg'];
      echo ("<div id='crudplugin-success-message'>$msg</div>");
    }
    ?>
    <script>
      let successMessageElement = document.getElementById('crudplugin-success-message');
      setTimeout(() => {
        successMessageElement.style.display = 'none';
      }, 3000)
    </script>
    <?php
    if ($_SESSION['user_id'] != null) {
      $logoutLink = plugin_dir_url(__FILE__) . 'auth/logout.php';
      echo ("<a href='$logoutLink'>Wyloguj się</a>");
    } else {
      echo ('<a href="/index.php/logowanie?">Logowanie</a>');
    }
    ?>
    <?php
    $conn = getDatabaseConnection();
    if (!$conn) {
      die("Błąd połączenia z bazą danych.");
    }

    $query = mysqli_multi_query(
      $conn,
      "CREATE TABLE IF NOT EXISTS users (
       id INT AUTO_INCREMENT PRIMARY KEY,
        login VARCHAR(128) UNIQUE,
         password VARCHAR(256),
         adminLevel TINYINT DEFAULT 0
         );
       "
    );

    do {
      if ($result = mysqli_store_result($conn)) {
        mysqli_free_result($result);
      }
    } while (mysqli_more_results($conn) && mysqli_next_result($conn));
    ?>
  </div>

    <?php

    session_start();
    if (!isset($_SESSION["user_id"])) {
    } else {

      fetchUserData($_SESSION["user_id"]);
      echo ($_SESSION['login']);
    }
    fetchUserData($_SESSION['user_id']);
      if($_SESSION['adminLevel'] > 0){
        echo('<a href="http://localhost:8080/index.php/users/">Użytkownicy</div>');
      }

    ?>
  
</div>

<script>

</script>
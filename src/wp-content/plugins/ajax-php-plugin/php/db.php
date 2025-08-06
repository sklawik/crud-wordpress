<?php



function getDatabaseConnection()
{
    static $conn = null;
    if ($conn === null) {
        $conn = mysqli_connect("phpdb", "root", "tiger", "my_database");

        if (!$conn) {
            error_log("Błąd połączenia z bazą: " . mysqli_connect_error());
            return null;
        }
    }
    return $conn;
}
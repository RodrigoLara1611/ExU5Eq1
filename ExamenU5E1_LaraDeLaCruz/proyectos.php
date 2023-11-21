<?php
include 'conn.php';

function getProyectos() {
    global $conn;
    $query = "SELECT * FROM proyectos";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



?>

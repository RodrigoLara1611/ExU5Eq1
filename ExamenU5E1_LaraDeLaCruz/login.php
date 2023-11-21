<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];

    $query = "SELECT * FROM usuarios WHERE login = :login AND pwd = :pwd";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':pwd', $pwd);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (isset($usuario['rol']) && $usuario['rol'] == 'rev') {
            session_start();
            $_SESSION['user'] = array(
                'rol' => $usuario['Rol'],
                'nombre' => $usuario['nombres'],
            );
            header("Location: dashboard_rev.php");
            exit();
        } else {
            echo "Acceso no autorizado.";
        }
    } else {
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
} else {
    header("Location: login.php");
    exit();
}
?>


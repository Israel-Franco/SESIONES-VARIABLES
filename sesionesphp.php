<?php
 if (isset($_POST["enviar"])){
    session_start();

    $_SESSION["usuario"] = htmlentities($_POST["usuario"]);

    $_SESSION["email"] = htmlentities($_POST["email"]);

    header("Location: paginasesion3.php");
 }
?>

<!DOCTIPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=divice-width, initial-scale=1.0">
        <title>SESIONES PHP </title>
</head>
<body>

<form method="post">
    <input type="text" name="usuario" placeholder="Ingrese el usuario">

    <input type="text" name="email" placeholder="Ingrese el email">

    <input type="submit" name="enviar" values="ENVIAR">
</body>
</html>
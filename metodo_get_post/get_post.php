<?php
//RECOGIENDO LOS DATOS ENVIANDOS POR EL FORMULARIO
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];
    $fechan = $_POST['fechan'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>DATOS</title>
</head>
<body bgcolor="#222430">
    <h2>Mis Datos</h2>
    <p>Nombre: <?=$nombre ?></p>
    <p>Apellidos: <?=$apellidos ?></p>
    <p>direccion: <?=$direccion ?></p>
    <p>sexo: <?=$sexo ?></p>
    <p>fechan: <?=$fechan ?></p>
    <p>Numero de Documento: <?=$dni ?></p>
    <p>Telefono: <?=$telefono ?></p>
    <p>Ciudad: <?=$ciudad ?></p>

    
</body>
</html>